<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_rrss',
	'title' => 'Datos de contacto y redes sociales',
	'fields' => array(
		array(
			'key' => 'field_rrss_facebook',
			'label' => 'Facebook',
			'name' => 'rrss_facebook',
			'type' => 'url',
			'required' => 0,
		),
        array(
			'key' => 'field_rrss_twitter',
			'label' => 'Twitter',
			'name' => 'rrss_twitter',
			'type' => 'url',
			'required' => 0,
		),
        array(
			'key' => 'field_rrss_instagram',
			'label' => 'Instagram',
			'name' => 'rrss_instagram',
			'type' => 'url',
			'required' => 0,
		),
        array(
			'key' => 'field_rrss_tiktok',
			'label' => 'TikTok',
			'name' => 'rrss_tiktok',
			'type' => 'url',
			'required' => 0,
		),
		array(
			'key' => 'field_rrss_linkedin',
			'label' => 'Linkedin',
			'name' => 'rrss_linkedin',
			'type' => 'url',
			'required' => 0,
		),
        array(
			'key' => 'field_rrss_youtube',
			'label' => 'Youtube',
			'name' => 'rrss_youtube',
			'type' => 'url',
			'required' => 0,
		),
		array(
			'key' => 'field_contact_phone',
			'label' => 'Teléfono de contacto',
			'name' => 'phone',
			'type' => 'text',
			'required' => 0,
		),
		array(
			'key' => 'field_contact_email',
			'label' => 'Email de contacto',
			'name' => 'email',
			'type' => 'text',
			'required' => 0,
		),
		array(
			'key' => 'field_login_page',
			'label' => 'Enlace al panel de usuario',
			'name' => 'user_panel_page',
			'type' => 'link',
			'return_format' => 'array',
		),
		array(
			'key' => 'field_footer_logos',
			'label' => 'Logos del footer',
			'name' => 'footer_logos',
			'type' => 'repeater',
			'layout' => 'table',
			'sub_fields' => array(
				array(
					'key' => 'field_footer_logo',
					'label' => 'Logo',
					'name' => 'logo',
					'type' => 'image',
					'return_format' => 'array',
					'library' => 'all',
					'preview_size' => 'thumbnail',
				),
			),
			'button_label' => 'Añadir logo',
		),
		array(
			'key' => 'field_head_tags',
			'label' => 'Etiquetas extra para <head>',
			'name' => 'head_tags',
			'type' => 'textarea',
			'required' => 0,
		),
		array(
			'key' => 'field_google_maps_api_key',
			'label' => 'API key para Google Maps',
			'name' => 'google_maps_api_key',
			'type' => 'text',
			'required' => 0,
		),
	),
	'active' => true,
	'label_placement' => 'left',
	'show_in_rest' => 0,
    'location' => array(
		array(
			array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'theme-options',
            ),
		),
	),
));

/* acf_add_local_field_group(array(
	'key' => 'group_common_sections',
	'title' => 'Secciones comunes',
	'fields' => array(
		array(
			'key' => 'field_common_footer_img',
			'label' => 'Imagen de footer',
			'name' => 'img',
			'type' => 'image',
			'return_format' => 'array',
			'library' => 'all',
			'preview_size' => 'thumbnail',
		),
	),
	'active' => true,
	'label_placement' => 'left',
	'show_in_rest' => 0,
    'location' => array(
		array(
			array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'theme-options',
            ),
		),
	),
)); */

endif;