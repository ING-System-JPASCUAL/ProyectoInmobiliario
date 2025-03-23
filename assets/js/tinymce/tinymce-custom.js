(function() {
    // Función para verificar dependencias
    function checkDependencies() {
        if (typeof jQuery === 'undefined') {
            console.error('jQuery no está disponible. Esperando...');
            setTimeout(checkDependencies, 100);
            return;
        }
        if (typeof tinymce === 'undefined') {
            console.error('TinyMCE no está disponible. Esperando...');
            setTimeout(checkDependencies, 100);
            return;
        }
        initTinyMCE();
    }

    function initTinyMCE() {
        jQuery(document).ready(function($) {
            try {
                if ($(".textarea-tinymce").length > 0) {
                    tinymce.init({
                        selector: ".textarea-tinymce",
                        theme: "modern",
                        height: 148,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ],
                        content_css: [
                            '//fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap'
                        ],
                        setup: function(editor) {
                            editor.on('init', function() {
                                console.log('TinyMCE inicializado correctamente');
                            });
                            editor.on('error', function(e) {
                                console.error('Error en TinyMCE:', e);
                            });
                        }
                    });
                }
            } catch (error) {
                console.error('Error inicializando TinyMCE:', error);
            }
        });
    }

    // Iniciar verificación
    checkDependencies();
})();