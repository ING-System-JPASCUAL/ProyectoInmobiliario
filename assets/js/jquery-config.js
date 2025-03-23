// Asegurar que no haya conflictos con otras versiones de jQuery
jQuery.noConflict();

// Esperar a que jQuery esté completamente cargado
(function($) {
    $(document).ready(function() {
        // Verificar que jQuery esté funcionando
        if (typeof jQuery != 'undefined') {
            console.log('jQuery ' + jQuery.fn.jquery + ' está cargado correctamente');
        }
        
        // Verificar que los selectores estén funcionando
        const $districts = $('#districts_id');
        const $province = $('#province_id');
        const $department = $('#department_id');
        
        if (!$districts.length || !$province.length || !$department.length) {
            console.warn('Algunos selectores no se encontraron en el DOM');
        }
    });
})(jQuery);