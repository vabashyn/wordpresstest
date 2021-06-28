<div class="sidebar">
    <h2> <?php _e('Categories'); ?></h2>
    <ul>
        <?php wp_list_categories('sort_column=name&optioncount=1&ierarchial=0'); ?>
    </ul>
    <h2> <?php _e('Archives'); ?></h2>
    <ul>
    <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>



// Заносим CSS стили и JS скрипты в функцию twentytwelve_scripts_styles
function mytheme_scripts_styles(){
wp_register_style( 'my_style', get_template_directory_uri() . '/assets/css/style.css', array('my_reset'), '1.47', 'screen');
// Подключаю стили
wp_enqueue_style( 'my_style');
// Подключать стили можно и сразу, без регистрации. Тогда необходимо прописать все параметры внутри wp_enqueue_style();
// Пример подключение стандартного обязательного файла стилей style.css
wp_enqueue_style( 'my_style', get_stylesheet_uri() );
}
// Создаем экшн в котором подключаем скрипты подключенные внутри функции twentytwelve_scripts_styles
add_action( 'wp_enqueue_scripts', ' mytheme_scripts_styles', 1 );