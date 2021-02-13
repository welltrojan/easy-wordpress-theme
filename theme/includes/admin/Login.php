<?php

class LoginClass
{
    public function __construct()
	{
        add_action('login_footer', array($this, 'footer'));
    }

	// Change WP logo on wp-admin login page
	public static function footer() {
		$logo 		= get_field('logotipo', 'options')['url'];
		$main_color = get_field('cor_principal', 'options')['url'];
		?>
			<style>
				body {
					background-color: <?php echo $main_color; ?>;
				}
				.login h1 a {
					background-image: url('<?php echo $logo; ?>');
				}
			</style>
		<?php 
	}

}

new LoginClass();