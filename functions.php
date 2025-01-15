<?php
    // remove the unwanted <meta> links
    remove_action('wp_head', 'wp_generator');

    // Remove WooCommerce <meta> links
    // remove_action('wp_head', 'woo_version'); 
    
    function ambigram_scripts() {
        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', null, '1.0', true);
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif:ital@0;1&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap', null, array(), 'all');
        wp_enqueue_style('styles', get_template_directory_uri() . '/css/stylesheet.css', null, '1.0', 'all');
    }

    function ambigram_config() {
        register_nav_menus(array(
            'header_menu' => 'Menu Header',
            'footer_menu' => 'Menu Footer',
        ));
        
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-header' );

        add_image_size( 'custom-thumb', 55, 44); //Simple widget size
    }

    function ambigram_sidebars() {
        register_sidebar(array(
            'name' => 'Citação Página Inicial',
            'id' => 'citacao-pagina-inicial',
            'description' => 'Inserir aqui a frase de citação e seu autor que vão no início do site',
            'before_widget' => '<blockquote>',
            'after_widget' => '</blockquote>',
        ));
    }

    /* Libera arquivos SVG para Upload */
    function add_file_types_to_uploads($file_types){
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );
        return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');

    /* Adiciona um novo custom post type */
    function add_cpt() { 

        /* Informa os nomes que serão exibidos na dashboard do WordPress */
        $labels = [
            "name" => __( "Áreas de Atuação", "santanaevanzella" ),
            "singular_name" => __( "Áreas de Atuação", "santanaevanzella" ),
            "menu_name" => __( "Áreas de Atuação", "santanaevanzella" ),
            "add_new" => __( "Adicionar nova área de atuação", "santanaevanzella"),
            "add_new_item" => __( "Adicionar nova área de atuação", "santanaevanzella"),
            "edit_item" => __( "Editar área de atuação", "santanaevanzella"),
            "view_item" => __( "Ver área de atuação", "santanaevanzella"),
            "all_items" => __( "Todas as Áreas de Atuação", "santanaevanzella" ),
        ];

        /* Informa os argumentos do custom post type */
        $args = [
            "label" => __( "Áreas de Atuação", "santanaevanzella" ),
            "labels" => $labels,
            "description" => "Conheça nossas Áreas de Atuação",
            "public" => true,
            "has_archive" => true,
            "show_in_menu" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "hierarchical" => false,
            "rewrite" => [ "slug" => "areas-atuacao", "with_front" => true ],
            "menu_icon" => "dashicons-text-page",
            'show_in_rest' => true,
            "supports" => [ "title", "editor", "thumbnail", "excerpt",  "revisions", "custom-fields", "page-attributes", "post-formats" ],
        ];


        /* Registra o custom post type */
        register_post_type( "areas-atuacao", $args );
    }
    /* Adiciona a função que acabou de ser criada */
    add_action( 'init', 'add_cpt' );

    add_action ( 'widgets_init', 'ambigram_sidebars');


    add_action('wp_enqueue_scripts', 'ambigram_scripts');
    
    add_action( 'after_setup_theme', 'ambigram_config', 0 );

    function get_field($key, $page_id = 0) {
        $id = $page_id !== 0 ? $page_id : get_the_ID();
        return get_post_meta($id, $key, true);
    }
    
    function the_field($key, $page_id = 0) {
        echo get_field($key, $page_id);
    }

    add_action('cmb2_admin_init', 'cmb2_fields_beneficios');
    add_action('cmb2_admin_init', 'cmb2_fields_especialidades');

    function cmb2_fields_beneficios() {
        // Adiciona um bloco
        $cmb = new_cmb2_box( array(
            'id'            => 'test_metabox',
            'title'         => __( '✅ Benefícios', 'cmb2' ),
            'object_types'  => array( 'areas-atuacao', ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );    
      
        // Adiciona um campo ao bloco criado
        $cmb->add_field( array(
            'name'       => __( 'Benefício 1', 'cmb2' ),
            'desc'       => __( 'Texto do Campo', 'cmb2' ),
            'id'         => 'beneficio1',
            'type'       => 'textarea_small',
            'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
        ) );
        $cmb->add_field( array(
            'name'       => __( 'Benefício 2', 'cmb2' ),
            'desc'       => __( 'Texto do Campo', 'cmb2' ),
            'id'         => 'beneficio2',
            'type'       => 'textarea_small',
            'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
        ) );
        $cmb->add_field( array(
            'name'       => __( 'Benefício 3', 'cmb2' ),
            'desc'       => __( 'Texto do Campo', 'cmb2' ),
            'id'         => 'beneficio3',
            'type'       => 'textarea_small',
            'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
        ) );
    }

    function cmb2_fields_especialidades() {
        // Adiciona um bloco
        $cmb = new_cmb2_box( array(
            'id'            => 'test_metabox2',
            'title'         => __( '➕ Especialidades', 'cmb2' ),
            'object_types'  => array( 'areas-atuacao', ), // Post type
            'context'       => 'normal',
            'priority'      => 'low',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ) );

        $especialidades = $cmb->add_field([
            'id'            => 'especialidades',
            'title'         => __( 'Especialidades', 'cmb2' ),
            'object_types'  => array( 'areas-atuacao', ), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true,
            'type' => 'group',
            'repeatable' => 'true',
            'options' => [
                'group_title' => 'Especialidade {#}',
                'add_button' => 'Adicionar especialidade',
                'remove_button' => 'Remover especialidade',
                'sortable' => true
            ]
        ]);

        $cmb->add_group_field($especialidades, [
            'name' => 'Especialidade',
            'id' => 'especialidade',
            'type' => 'text',
        ]);

        $cmb->add_group_field($especialidades, [
            'name' => 'Descrição da Especialidade',
            'id' => 'descricao_especialidade',
            'type' => 'textarea_small',
        ]);
    
    }

?>