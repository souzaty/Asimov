<?php
// Custom Post Portfolio
/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_projeto' );
/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_projeto() {
    /**
     * Labels customizados para o tipo de post
     *
     */
    $labels = array(
	    'name' => _x('Projetos', 'post type general name'),
	    'singular_name' => _x('Projeto', 'post type singular name'),
	    'add_new' => _x('Adicionar novo', 'Projeto'),
	    'add_new_item' => __('Adicionar novo Projeto'),
	    'edit_item' => __('Editar Projeto'),
	    'new_item' => __('Novo Projeto'),
	    'all_items' => __('Todos os Projetos'),
	    'view_item' => __('View projeto'),
	    'search_items' => __('Search projetos'),
	    'not_found' =>  __('No projetos found'),
	    'not_found_in_trash' => __('No projetos found in Trash'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Projetos'
    );

    /**
     * Registamos o tipo de post projeto através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'projeto', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'projetos',
	    'rewrite' => array(
		  'slug' => 'projetos',
		  'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => 20,
	    'supports' => array('title','editor','author','thumbnail','excerpt','comments'),
        'taxonomies' => array('post_tag')
	    )
    );

    /**
     * Registamos a categoria de projetoes para o tipo de post projeto
     */
    register_taxonomy( 'projeto_category', array( 'projeto' ), array(
        'hierarchical' => true,
        'label' => __( 'projeto Category' ),
        'labels' => array( // Labels customizadas
	    'name' => _x( 'Categorias', 'taxonomy general name' ),
	    'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Pesquisar Categorias' ),
	    'all_items' => __( 'Todas as Categorias' ),
	    'parent_item' => __( 'Parent Categoria' ),
	    'parent_item_colon' => __( 'Parent Categoria:' ),
	    'edit_item' => __( 'Editar Categoria' ),
	    'update_item' => __( 'Update Category' ),
	    'add_new_item' => __( 'Adicionar nova' ),
	    'new_item_name' => __( 'Nova Categoria' ),
	    'menu_name' => __( 'Categorias' ),
	),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
          'slug' => 'projetos/categorias',
          'with_front' => false,
        ),
        )
    );
    /**
     * Esta função associa tipos de categorias com tipos de posts.
     * Aqui associamos as tags ao tipo de post projeto.
     */
    register_taxonomy_for_object_type( 'tags', 'Projeto' );
}
