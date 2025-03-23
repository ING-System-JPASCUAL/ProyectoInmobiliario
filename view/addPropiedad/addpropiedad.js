/* function init(){
    $("#inmueble_form").on("submit", function(e){
        guardaryeditar(e);
    });
} */


// Asegurar que jQuery esté disponible y evitar conflictos
(function($) {
    // Función para verificar dependencias
    function verificarDependencias() {
        console.log('Verificando dependencias...');
        
        if (typeof jQuery === 'undefined') {
            console.error('jQuery no está cargado');
            return false;
        }
        console.log('jQuery versión:', jQuery.fn.jquery);

        if (typeof jQuery.fn.niceSelect === 'undefined') {
            console.error('nice-select no está cargado');
            return false;
        }
        console.log('nice-select está disponible');

        return true;
    }

    $(document).ready(function() {
        // Verificar dependencias antes de continuar
        if (!verificarDependencias()) return;

        // Constantes para IDs y URLs
        const SELECTORS = {
            DEPARTAMENTO: 'department_id',
            PROVINCIA: 'province_id',
            DISTRITO: 'districts_id',
            TIPO_PROPIEDAD: 'tipprod_id',
            SUBTIPO_PROPIEDAD: 'tipsubprop_id',
            TIPO_OPERACION: 'tipopera_id'
        };
    
        const URLS = {
            DEPARTAMENTO: '../../controller/ubigeoperu.php?op=combo_departamento',
            PROVINCIA: '../../controller/ubigeoperu.php?op=combo_provincia',
            DISTRITO: '../../controller/ubigeoperu.php?op=combo_distrito',
            TIPO_PROPIEDAD: '../../controller/tipopropiedad.php?op=combo',
            SUBTIPO_PROPIEDAD: '../../controller/tiposubpropiedad.php?op=combo',
            TIPO_OPERACION: '../../controller/tipoperacion.php?op=combo'
        };
    
        const MENSAJES = {
            DEPARTAMENTO: 'Seleccione Departamento',
            PROVINCIA: 'Seleccione Provincia',
            DISTRITO: 'Seleccione Distrito',
            TIPO_PROPIEDAD: 'Seleccione Tipo de Propiedad',
            SUBTIPO_PROPIEDAD: 'Seleccione Subtipo de Propiedad',
            TIPO_OPERACION: 'Seleccione Tipo de Operación'
        };
    
        // Función mejorada para actualizar nice-select
        function updateNiceSelect(elementId) {
            const $element = $(`#${elementId}`);
            if (!$element.length) {
                console.warn(`Elemento #${elementId} no encontrado`);
                return;
            }

            try {
                $element.niceSelect('destroy');
                $element.niceSelect();
            } catch (error) {
                console.error(`Error al actualizar nice-select para ${elementId}:`, error);
            }
        }
    
        // Función mejorada para cargar datos en un select
        function loadSelectData(url, elementId, params = null) {
            return $.ajax({
                url: url,
                method: 'POST',
                data: params,
                beforeSend: function() {
                    console.log(`Cargando datos para ${elementId}...`);
                }
            })
            .done(function(data) {
                $(`#${elementId}`).html(data);
                updateNiceSelect(elementId);
            })
            .fail(function(error) {
                console.error(`Error al cargar datos para ${elementId}:`, error);
                resetSelect(elementId, `Error al cargar ${elementId}`);
            });
        }
    
        // Función mejorada para resetear un select
        function resetSelect(elementId, mensaje) {
            const $element = $(`#${elementId}`);
            if (!$element.length) {
                console.warn(`Elemento #${elementId} no encontrado`);
                return;
            }

            $element
                .html(`<option value="">${mensaje || ''}</option>`)
                .prop('disabled', true);
            updateNiceSelect(elementId);
        }
    
        // Función para resetear selects dependientes
        function resetDependentSelects(startIndex) {
            const dependencias = [
                SELECTORS.DEPARTAMENTO,
                SELECTORS.PROVINCIA,
                SELECTORS.DISTRITO
            ];
    
            for (let i = startIndex; i < dependencias.length; i++) {
                resetSelect(dependencias[i], MENSAJES[dependencias[i].toUpperCase()]);
            }
        }
    
        // Función mejorada para habilitar un select
        function enableSelect(elementId) {
            const $element = $(`#${elementId}`);
            if (!$element.length) {
                console.warn(`Elemento #${elementId} no encontrado`);
                return;
            }

            $element.prop('disabled', false);
            updateNiceSelect(elementId);
        }
    
        // Inicialización mejorada
        function initializeSelects() {
            console.log('Iniciando carga de selects...');

            // Cargar datos iniciales
            Promise.all([
                loadSelectData(URLS.DEPARTAMENTO, SELECTORS.DEPARTAMENTO),
                loadSelectData(URLS.TIPO_PROPIEDAD, SELECTORS.TIPO_PROPIEDAD),
                loadSelectData(URLS.TIPO_OPERACION, SELECTORS.TIPO_OPERACION)
            ]).catch(error => {
                console.error('Error en la carga inicial de datos:', error);
            });
    
            // Resetear selects dependientes
            resetSelect(SELECTORS.PROVINCIA, MENSAJES.PROVINCIA);
            resetSelect(SELECTORS.DISTRITO, MENSAJES.DISTRITO);
            resetSelect(SELECTORS.SUBTIPO_PROPIEDAD, MENSAJES.SUBTIPO_PROPIEDAD);
        }
    
        // Event handlers mejorados
        $(`#${SELECTORS.DEPARTAMENTO}`).on('change', function() {
            const departamentoId = $(this).val();
            console.log('Cambio en departamento:', departamentoId);
    
            if (departamentoId) {
                enableSelect(SELECTORS.PROVINCIA);
                loadSelectData(URLS.PROVINCIA, SELECTORS.PROVINCIA, { 
                    department_id: departamentoId 
                });
                resetSelect(SELECTORS.DISTRITO, MENSAJES.DISTRITO);
            } else {
                resetDependentSelects(1);
            }
        });
    
        $(`#${SELECTORS.PROVINCIA}`).on('change', function() {
            const provinciaId = $(this).val();
            const departamentoId = $(`#${SELECTORS.DEPARTAMENTO}`).val();
            console.log('Cambio en provincia:', provinciaId);
    
            if (provinciaId && departamentoId) {
                enableSelect(SELECTORS.DISTRITO);
                loadSelectData(URLS.DISTRITO, SELECTORS.DISTRITO, {
                    province_id: provinciaId,
                    department_id: departamentoId
                });
            } else {
                resetDependentSelects(2);
            }
        });
    
        $(`#${SELECTORS.TIPO_PROPIEDAD}`).on('change', function() {
            const tipoId = $(this).val();
            console.log('Cambio en tipo de propiedad:', tipoId);
    
            if (tipoId) {
                enableSelect(SELECTORS.SUBTIPO_PROPIEDAD);
                loadSelectData(URLS.SUBTIPO_PROPIEDAD, SELECTORS.SUBTIPO_PROPIEDAD, {
                    tipprod_id: tipoId
                });
            } else {
                resetSelect(SELECTORS.SUBTIPO_PROPIEDAD, MENSAJES.SUBTIPO_PROPIEDAD);
            }
        });

        // Manejo global de errores AJAX
        $(document).ajaxError(function(event, jqxhr, settings, thrownError) {
            console.error('Error en petición AJAX:', {
                url: settings.url,
                status: jqxhr.status,
                error: thrownError
            });
        });

        // Inicializar todo
        initializeSelects();
        
        // Log de inicialización exitosa
        console.log('Inicialización completada');
    });

})(jQuery);




