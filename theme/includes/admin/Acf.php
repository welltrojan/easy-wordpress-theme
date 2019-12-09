<?php

class AcfClass
{
    public function __construct()
	{
        add_action('admin_menu',		array('AcfClass', 'createOptionsPage'));
    }

	public static function createOptionsPage()
	{
		if( function_exists('acf_add_options_page') ) {

			$parent = acf_add_options_page(array(
				'page_title' 	=> 'Opções',
				'menu_title' 	=> 'Opções',
				'menu_slug' 	=> 'options',
                'redirect'      => false,
				'position'      => '2.3'
			));

		}
	}
}

new AcfClass();