<?php

class ContentClass
{
	public function __construct()
	{
		add_action('init',      array('ContentClass', 'post_type_teste'));
		add_action('init',      array('ContentClass', 'categorias_teste'), 0);
	}

    public function post_type_teste()
	{
		$labels = array(
			'name' => _x('Testes', 'post type general name', 'wordpress'),
			'singular_name' => _x('Teste', 'post type singular name', 'wordpress'),
			'add_new' => _x('Adicionar Novo', 'Teste', 'wordpress'),
			'add_new_item' => __('Adicionar Novo Teste', 'wordpress'),
			'edit_item' => __('Editar Teste', 'wordpress'),
			'new_item' => __('Novo Teste', 'wordpress'),
			'all_items' => __('Todos os Testes', 'wordpress'),
			'view_item' => __('Ver Teste', 'wordpress'),
			'search_items' => __('Procurar Testes', 'wordpress'),
			'not_found' =>  __('Nenhum Teste encontrado', 'wordpress'),
			'not_found_in_trash' => __('Nenhum Teste encontrado na Lixeira', 'wordpress'),
			'parent_item_colon' => '',
			'menu_name' => __('Testes', 'wordpress')
		);

		$config = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'has_archive' => false,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => 'dashicons-heart',
			'exclude_from_search' => false,
			'supports' => array( 'title' )
		);

		register_post_type('teste', $config);
	}

	public function categorias_teste()
	{
		$labels = array(
			'name' => _x( 'Categorias', 'taxonomy general name' ),
			'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
			'search_items' =>  __( 'Procurar Categorias' ),
			'all_items' => __( 'Todas as Categorias' ),
			'parent_item' => __( 'Categoria' ),
			'parent_item_colon' => __( 'Categoria:' ),
			'edit_item' => __( 'Editar Categoria' ), 
			'update_item' => __( 'Atualizar Categoria' ),
			'add_new_item' => __( 'Adicionar nova Categoria' ),
			'new_item_name' => __( 'Nova Categoria nome' ),
			'menu_name' => __( 'Categorias' ),
		);

		register_taxonomy('categorias_teste',array('teste'), array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'tipos' ),
		));
	}

}

new ContentClass();