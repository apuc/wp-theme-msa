<?php

add_action('init', 'register_post_types_slider');
add_theme_support('post-thumbnails', array('msa_slider'));
function register_post_types_slider()
{
    register_post_type('msa_slider', [
        'label' => null,
        'labels' => [
            'name' => 'Слайдер', // основное название для типа записи
            'singular_name' => 'Слайд', // название для одной записи этого типа
            'add_new' => 'Добавить сдайд', // для добавления новой записи
            'add_new_item' => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование слайда', // для редактирования типа записи
            'new_item' => 'Новое слайд', // текст новой записи
            'view_item' => 'Смотреть слайд', // для просмотра записи этого типа.
            'search_items' => 'Искать слайд', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Слайдер Msa', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => true, // добавить в REST API. C WP 4.7stsy
        'menu_position' => 6,
        'menu_icon' => null,
        'capability_type' => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => array('slug' => 'msa_slider'),
        'query_var' => true,
    ]);
}

add_action('init', 'register_post_types_main_slider');
add_theme_support('post-thumbnails', array('main_slider'));
function register_post_types_main_slider()
{
    register_post_type('main_slider', [
        'label' => null,
        'labels' => [
            'name' => 'Слайдер главной страницы', // основное название для типа записи
            'singular_name' => 'Слайд главной страницы', // название для одной записи этого типа
            'add_new' => 'Добавить сдайд главной страницы', // для добавления новой записи
            'add_new_item' => 'Добавление слайда главной страницы', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование слайда главной страницы', // для редактирования типа записи
            'new_item' => 'Новый слайд главной страницы', // текст новой записи
            'view_item' => 'Смотреть слайд главной страницы', // для просмотра записи этого типа.
            'search_items' => 'Искать слайд главной страницы', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Слайдер  главной страницы', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => true, // добавить в REST API. C WP 4.7stsy
        'menu_position' => 6,
        'menu_icon' => null,
        'capability_type' => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => array('slug' => 'main_slider'),
        'query_var' => true,
    ]);
}

//function sb_add_cpts_to_api( $args, $post_type ) {
//    if ( 'msa_slider' === $post_type ) {
//        $args['show_in_rest'] = true;
//    }
//    return $args;
//}
//add_filter( 'register_post_type_args', 'sb_add_cpts_to_api', 10, 2 );
//
//function rest_route_for_msa_slider( $route, $post ) {
//    if ( $post->post_type === 'msa_slider' ) {
//        $route = '/wp/v2/msa_slider/' . $post->ID;
//    }
//
//    return $route;
//}
//add_filter( 'rest_route_for_post', 'rest_route_for_msa_slider', 10, 2 );

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    wp_enqueue_style('style.css', get_template_directory_uri() . '/css/media.css', [], false);
    wp_enqueue_script('site.js', get_template_directory_uri() . '/js/site.js', array(), false, true);
}

add_action('init', 'create_left_menu_taxonomies');
function create_left_menu_taxonomies()
{
    register_taxonomy('left_menu', array('page'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Левое меню', 'меню страниц'),
            'singular_name' => _x('Левое меню', 'меню страницы'),
            'search_items' => __('Найти левое меню'),
            'all_items' => __('Все левые меню'),
            'edit_item' => __('Редактировать меню'),
            'update_item' => __('Обновить меню'),
            'add_new_item' => __('Добавить меню'),
            'new_item_name' => __('Название меню'),
            'menu_name' => __('Левое меню'),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'query_var' => true,
        'meta_box_cb' => true, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column' => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest' => true, // добавить в REST API
//        'rest_base'             => true, // $taxonomy
//        'rest_controller_class' => 'WP_REST_Terms_Controller',
        //'rewrite'       => array( 'slug' => 'the_genre' ), // свой слаг в URL
    ));

    add_action('rest_api_init', function () {

        register_rest_field('page', 'left_page_menu', array(
            'get_callback' => function ($post) {
                return get_the_terms($post->ID, 'left_menu');
            },
            'update_callback' => null,
            'schema' => null
        ));

    });


}

add_action('init', 'create_top_menu_taxonomies');
function create_top_menu_taxonomies()
{
    register_taxonomy('top_menu', array('page'), array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x('Верхнее меню', 'меню страниц'),
            'singular_name' => _x('Верхнее меню', 'меню страницы'),
            'search_items' => __('Найти верхнее меню'),
            'all_items' => __('Все верхнее меню'),
            'edit_item' => __('Редактировать меню'),
            'update_item' => __('Обновить меню'),
            'add_new_item' => __('Добавить меню'),
            'new_item_name' => __('Название меню'),
            'menu_name' => __('Верхнее меню'),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'query_var' => true,
        'meta_box_cb' => true, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column' => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest' => true, // добавить в REST API
//        'rest_base'             => true, // $taxonomy
//        'rest_controller_class' => 'WP_REST_Terms_Controller',
        //'rewrite'       => array( 'slug' => 'the_genre' ), // свой слаг в URL
    ));

    add_action('rest_api_init', function () {

        register_rest_field('page', 'top_page_menu', array(
            'get_callback' => function ($post) {
                return get_the_terms($post->ID, 'top_menu');
            },
            'update_callback' => null,
            'schema' => null
        ));

    });
}

add_action('init', 'register_post_types_feedback');
function register_post_types_feedback()
{
    register_post_type('msa_feedback', [
        'label' => null,
        'labels' => [
            'name' => 'Обратная связь', // основное название для типа записи
            'singular_name' => 'Запись', // название для одной записи этого типа
            'add_new' => 'Добавить Запись', // для добавления новой записи
            'add_new_item' => 'Добавление Запись', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование Записи', // для редактирования типа записи
            'new_item' => 'Новая Запись', // текст новой записи
            'view_item' => 'Смотреть Записи', // для просмотра записи этого типа.
            'search_items' => 'Искать Запись', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Обратная связь', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => true, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => true, // добавить в REST API. C WP 4.7stsy
        'menu_position' => 6,
        'menu_icon' => null,
        'capability_type' => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => true, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => array('slug' => 'msa_feedback'),
        'query_var' => true,
    ]);
}

add_action('add_meta_boxes_msa_feedback', 'meta_box_for_msa_feedback');
function meta_box_for_msa_feedback($post)
{
    add_meta_box('my_meta_box_custom_email', __('e-mail', 'msa_feedback'), 'my_custom_meta_box_html_email', 'msa_feedback', 'normal', 'low');
    add_meta_box('my_meta_box_custom_name', __('name', 'msa_feedback'), 'my_custom_meta_box_html_name', 'msa_feedback', 'normal', 'low');
    add_meta_box('my_meta_box_custom_company', __('company', 'msa_feedback'), 'my_custom_meta_box_html_company', 'msa_feedback', 'normal', 'low');
    add_meta_box('my_meta_box_custom_company_activity', __('company_activity', 'msa_feedback'), 'my_custom_meta_box_html_company_activity', 'msa_feedback', 'normal', 'low');
    add_meta_box('my_meta_box_custom_question', __('question', 'msa_feedback'), 'my_custom_meta_box_html_question', 'msa_feedback', 'normal', 'low');
}

function my_custom_meta_box_html_email($post)
{
    wp_nonce_field(basename(__FILE__), 'feedback_nonce'); //used later for security
    echo '<p><input type="email" name="email" value=" ' . get_post_meta($post->ID, 'my_meta_box_custom_email', true) . '" required/></p>';
}

function my_custom_meta_box_html_name($post)
{
    echo '<p><input type="text" name="name" value="' . get_post_meta($post->ID, 'my_meta_box_custom_name', true) . '" required/></p>';
}

function my_custom_meta_box_html_company($post)
{
    echo '<p><input type="text" name="company" value="' . get_post_meta($post->ID, 'my_meta_box_custom_company', true) . '" required/></p>';
}

function my_custom_meta_box_html_company_activity($post)
{
    echo '<p><input type="text" name="company_activity" value="' . get_post_meta($post->ID, 'my_meta_box_custom_company_activity', true) . '" required/></p>';
}

function my_custom_meta_box_html_question($post)
{
    echo '<p><textarea type="text" name="question" required>' . get_post_meta($post->ID, 'my_meta_box_custom_question', true) . '</textarea></p>';
}

add_action('save_post', 'myplugin_save_postdata');
function myplugin_save_postdata($post_id)
{
    // Убедимся что поле установлено.
    if (!isset($_POST['email']) && !isset($_POST['name']) && !isset($_POST['company']) && !isset($_POST['company_activity']) && !isset($_POST['question'])) {
        return;
    }
    // проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
    if (!wp_verify_nonce($_POST['feedback_nonce'], basename(__FILE__))) {
        return;
    }
    // если это автосохранение ничего не делаем
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // проверяем права юзера
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    // Все ОК. Теперь, нужно найти и сохранить данные
    // Очищаем значение поля input.
    $my_email = sanitize_text_field($_POST['email']);
    update_post_meta($post_id, 'my_meta_box_custom_email', $my_email);

    $my_name = sanitize_text_field($_POST['name']);
    update_post_meta($post_id, 'my_meta_box_custom_name', $my_name);

    $my_data = sanitize_text_field($_POST['company']);
    update_post_meta($post_id, 'my_meta_box_custom_company', $my_data);

    $my_data = sanitize_text_field($_POST['company_activity']);
    update_post_meta($post_id, 'my_meta_box_custom_company_activity', $my_data);

    $my_data = sanitize_text_field($_POST['question']);
    update_post_meta($post_id, 'my_meta_box_custom_question', $my_data);

    $my_post = array(
        'ID' => $post_id,
        'post_title' => $my_email . ' - ' . $my_name,
    );

    if ( ! wp_is_post_revision( $post_id ) ){
        // удаляем этот хук, чтобы он не создавал бесконечного цикла
        remove_action('save_post', 'myplugin_save_postdata');

        // обновляем пост, когда снова вызовется хук save_post
        wp_update_post( $my_post );

        // снова вешаем хук
        add_action('save_post', 'myplugin_save_postdata');
    }
    // Обновляем данные в базе данных.
    // update_post_meta( $post_id, 'my_meta_key', $my_data );

}


add_action('wp_ajax_add_feedback', 'action_crate_feedback_from_front');
add_action('wp_ajax_nopriv_add_feedback', 'action_crate_feedback_from_front');

add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

    wp_localize_script( 'jquery.js', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );

}

register_rest_field( 'page', 'metadata', array(
    'get_callback' => function ( $data ) {
        return get_post_meta( $data['id'], '', '' );
    }, ));

function action_crate_feedback_from_front(){
    if($_POST['email'] && $_POST['name'] && $_POST['company'] && $_POST['company_activity'] && $_POST['question']) {
        $post_id = wp_insert_post(array(
            'post_status' => 'publish',
            'post_type' => 'msa_feedback',
            'post_author' => 1,
            'ping_status' => 'closed',
            'post_name' => $_POST['email'] . ' - ' . $_POST['name'],
            'post_title' => $_POST['email'] . ' - ' . $_POST['name'],
            'meta_input' => [
                'my_meta_box_custom_email' => $_POST['email'],
                'my_meta_box_custom_name' => $_POST['name'],
                'my_meta_box_custom_company' => $_POST['company'],
                'my_meta_box_custom_company_activity' => $_POST['company_activity'],
                'my_meta_box_custom_question' => $_POST['question'],
            ],
        ), true);
        if( is_wp_error($post_id) ){
            print_r($post_id->get_error_message());
            echo json_encode(['status'=>'error','error_message'=>$post_id->get_error_message()]);
        }else{
            echo json_encode(['status'=>'success']);
        }
    }
    wp_die();
}

