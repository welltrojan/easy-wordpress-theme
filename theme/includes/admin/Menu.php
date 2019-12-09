<?php

class MenuClass
{
    public function __construct()
	{
        add_action('after_setup_theme',     array('MenuClass', 'registerMenus'));
    }

    public static function registerMenus()
    {
        register_nav_menus(
            array(
                'principal' => 'Menu Principal',
                'rodape'    => 'Menu Rodapé',
            )
        );
    }

}

new MenuClass();