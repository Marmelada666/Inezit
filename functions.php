<?php  

add_action('after_setup_theme', 'inezit_setup');
function inezit_setup()
{
	add_theme_support('menus');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	// add_theme_support('custom-fields');

	register_nav_menus(array(
		'primary' => 'Primary Menu	'
	));
}
add_action('wp_enqueue_scripts','inezit_scripts');
function inezit_scripts(){
	// Theme stylesheet.
	wp_enqueue_style('inezit-style',get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('inezit-google-font', 'https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300');
	wp_enqueue_style('inezit-glypher-css', get_template_directory_uri() . '/assets/font/font-icon/font-svg/css/Glyphter.css');
	wp_enqueue_style('inezit-material-icons-css', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style('inezit-font-awesome-css', get_template_directory_uri() . '/assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css');
	// Scripts
	wp_enqueue_script('inezit-jquery-js', get_template_directory_uri() . '/assets/js/jquery/dist/jquery.min.js',array(),'x.x.x',true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(),'x.x.x',true);
	// Lib
	wp_enqueue_script('inezit-wow', get_template_directory_uri() . '/assets/js/inezit.min.js', array(),'x.x.x',true);
}

// Advanced custom fields
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_co-sa-naucite',
		'title' => 'Čo sa naučíte',
		'fields' => array (
			array (
				'key' => 'field_591999365faf3',
				'label' => 'Čo sa naučíte',
				'name' => 'co_sa_naucite',
				'type' => 'table',
				'use_header' => 2,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'post_category',
					'operator' => '!=',
					'value' => '7',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_kontakt',
		'title' => 'Kontakt',
		'fields' => array (
			array (
				'key' => 'field_5913233d8d02b',
				'label' => 'telefónne číslo',
				'name' => 'telefonne_cislo',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_591323608d02c',
				'label' => 'Emailová adresa',
				'name' => 'emailova_adresa',
				'type' => 'email',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_591323738d02d',
				'label' => 'Firemna adresa - ulica',
				'name' => 'firemna_adresa_ulica',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5913260017377',
				'label' => 'Firemna adresa - mesto',
				'name' => 'firemna_adresa_mesto',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '163',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_parametre-kurzu',
		'title' => 'Parametre kurzu',
		'fields' => array (
			array (
				'key' => 'field_5909c89a5fce5',
				'label' => 'Cena kurzu ',
				'name' => 'cena_kurzu',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_59182311ae11a',
				'label' => 'Dĺžka kurzu',
				'name' => 'dlzka_kurzu',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => 200,
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5918237cae11b',
				'label' => 'Úroveň',
				'name' => 'uroven',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'zaciatocnik / mierne pokrocily / pokrocily',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_591823b2ae11c',
				'label' => 'Termín',
				'name' => 'termin',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'na upresnenie / 15.4.',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5918287d74f7c',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_thumbnail',
		'title' => 'thumbnail',
		'fields' => array (
			array (
				'key' => 'field_591160f618407',
				'label' => 'Ikonka kurzu',
				'name' => 'ikonka_kurzu',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_ucebna-osnova',
		'title' => 'Učebná osnova',
		'fields' => array (
			array (
				'key' => 'field_590a32e9bbdc3',
				'label' => 'Začiatočník',
				'name' => 'osnova_1',
				'type' => 'table',
				'instructions' => 'Učebná osnova pre začiatočníka',
				'use_header' => 1,
			),
			array (
				'key' => 'field_590a39fd78aa1',
				'label' => 'Mierne pokročilý',
				'name' => 'osnova_2',
				'type' => 'table',
				'instructions' => 'Učebná osnova pre mierne pokročilých',
				'use_header' => 1,
			),
			array (
				'key' => 'field_590a3a2b78aa2',
				'label' => 'Pokročilý',
				'name' => 'osnova_3',
				'type' => 'table',
				'use_header' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '!=',
					'value' => '7',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'post_category',
					'operator' => '!=',
					'value' => '5',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_ucebna-osnova-uctovnictvo',
		'title' => 'Učebná osnova Účtovníctvo',
		'fields' => array (
			array (
				'key' => 'field_59108221a739b',
				'label' => 'Osnova 1',
				'name' => 'osnova_1',
				'type' => 'table',
				'use_header' => 1,
			),
			array (
				'key' => 'field_59108233a739c',
				'label' => 'Osnova 2',
				'name' => 'osnova_2',
				'type' => 'table',
				'use_header' => 1,
			),
			array (
				'key' => 'field_59108243a739d',
				'label' => 'Osnova 3',
				'name' => 'osnova_3',
				'type' => 'table',
				'use_header' => 1,
			),
			array (
				'key' => 'field_5910824fa739e',
				'label' => 'Osnova 4',
				'name' => 'osnova_4',
				'type' => 'table',
				'use_header' => 1,
			),
			array (
				'key' => 'field_5910893d8cf34',
				'label' => 'Osnova 5',
				'name' => 'osnova_5',
				'type' => 'table',
				'use_header' => 1,
			),
			array (
				'key' => 'field_591089568cf35',
				'label' => 'Osnova 6',
				'name' => 'osnova_6',
				'type' => 'table',
				'use_header' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '5',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
