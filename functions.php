<?php

    function ambigram_scripts() {
        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', null, '1.0', true);
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&family=PT+Serif:ital@0;1&display=swap', null, array(), 'all');
        wp_enqueue_style('styles', get_template_directory_uri() . '/css/stylesheet.css', null, '1.0', 'all');
    }

    function ambigram_config() {
        register_nav_menus(array(
            'header_menu' => 'Menu Header',
            'footer_menu' => 'Menu Footer',
        ));
        
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-header' );
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

?>