<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_header',
	'title' => 'Cabecera de página',
	'fields' => array(
		array(
            'key' => 'field_header_type',
            'label' => 'Tipo de cabecera',
            'name' => 'header_type',
            'type' => 'select',
            'default_value' => 'page-header',
            'choices' => array(
                'hero-header'   => 'Cabecera destacada',
                'swiper-header'   => 'Cabecera carrusel',
                'simple-header' => 'Cabecera simple',
                'no-header'     => 'Sin cabecera',
            )
        ),
        array(
            'key' => 'field_page_header',
            'label' => 'Contenido de la cabecera',
            'name' => 'page_header',
            'type' => 'clone',
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_header_type',
                        'operator' => '==',
                        'value' => 'page-header',
                    ),
                ),
            ),
            'clone' => array(
                0 => 'group_page_header',
            ),
            'display' => 'group',
        ),
        array(
            'key' => 'field_hero_header',
            'label' => 'Contenido de la cabecera',
            'name' => 'hero_header',
            'type' => 'clone',
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_header_type',
                        'operator' => '==',
                        'value' => 'hero-header',
                    ),
                ),
            ),
            'clone' => array(
                0 => 'group_hero_header',
            ),
            'display' => 'group',
        ),
        array(
            'key' => 'field_swiper_header',
            'label' => 'Contenido de la cabecera',
            'name' => 'swiper_header',
            'type' => 'clone',
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_header_type',
                        'operator' => '==',
                        'value' => 'swiper-header',
                    ),
                ),
            ),
            'clone' => array(
                0 => 'group_swiper_header',
            ),
            'display' => 'group',
        ),
        array(
            'key' => 'field_simple_header',
            'label' => 'Contenido de la cabecera',
            'name' => 'simple_header',
            'type' => 'clone',
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_header_type',
                        'operator' => '==',
                        'value' => 'simple-header',
                    ),
                ),
            ),
            'clone' => array(
                0 => 'group_simple_header',
            ),
            'display' => 'group',
        ),
	),
	'active' => true,
	'label_placement' => 'left',
	'show_in_rest' => 0,
    'position' => 'acf_after_title',
    'menu_order' => 0,
    'location' => array(
		array(
			array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
		),
	),
));

acf_add_local_field_group(array(
	'key' => 'group_page_header',
	'title' => 'Cabecera por defecto',
	'fields' => array(
		array(
            'key' => 'field_page_header_title',
            'label' => 'Título',
            'name' => 'title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_page_header_text',
            'label' => 'Texto',
            'name' => 'text',
            'type' => 'wysiwyg',
        ),
        array(
            'key' => 'field_page_header_bg',
            'label' => 'Fondo',
            'name' => 'bg',
            'type' => 'image',
            'return_format' => 'array',
            'library' => 'all',
            'preview_size' => 'thumbnail',
        ),
	),
	'active' => true,
    'label_placement' => 'left',
));

acf_add_local_field_group(array(
	'key' => 'group_hero_header',
	'title' => 'Cabecera destacada',
	'fields' => array(
		array(
            'key' => 'field_hero_header_title',
            'label' => 'Título',
            'name' => 'title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_hero_header_subtitle',
            'label' => 'Subtítulo',
            'name' => 'subtitle',
            'type' => 'text',
        ),
        array(
            'key' => 'field_hero_header_bg_backdrop',
            'label' => 'Añadir degradado al fondo',
            'instructions' => 'El degradado hace que la cabecera encaje mejor con el resto de la página y el texto sea más legible, pero puede ser innecesario si el fondo es lo suficientemente neutro',
            'name' => 'bg_backdrop',
            'type' => 'true_false',
            'required' => 0,
            'default_value' => 1,
        ),
        array(
            'key' => 'field_hero_header_bg_media',
            'label' => 'Fondo',
            'name' => 'bg_media',
            'type' => 'clone',
            'clone' => array(
                0 => 'group_media_element',
            ),
            'display' => 'seamless',
        ),
	),
	'active' => true,
    'label_placement' => 'left',
));

acf_add_local_field_group(array(
	'key' => 'group_swiper_header',
	'title' => 'Cabecera carrusel',
	'fields' => array(
        array(
            'key' => 'field_swiper_header_main_title',
            'label' => 'Título principal',
            'name' => 'title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_swiper_header_slides',
            'label' => 'Slides',
            'name' => 'banner_repeater',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_swiper_header_title',
                    'label' => 'Título',
                    'name' => 'title',
                    'type' => 'text',
                    'required' => 1
                ),
                array(
                    'key' => 'field_swiper_header_text',
                    'label' => 'Texto',
                    'name' => 'text',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'field_swiper_header_buttons',
                    'label' => 'Botones',
                    'name' => 'btn_repeater',
                    'type' => 'clone',
                    'clone' => array(
                        0 => 'group_button_repeater',
                    ),
                    'display' => 'seamless',
                ),
                array(
                    'key' => 'field_swiper_header_bg_backdrop',
                    'label' => 'Añadir degradado al fondo',
                    'instructions' => 'El degradado hace que la cabecera encaje mejor con el resto de la página y el texto sea más legible, pero puede ser innecesario si el fondo es lo suficientemente neutro',
                    'name' => 'bg_backdrop',
                    'type' => 'true_false',
                    'required' => 0,
                    'default_value' => 1,
                ),
                array(
                    'key' => 'field_swiper_header_bg_media',
                    'label' => 'Fondo',
                    'name' => 'bg_media',
                    'type' => 'clone',
                    'clone' => array(
                        0 => 'group_media_element',
                    ),
                    'display' => 'seamless',
                ),
            ),
            'button_label' => 'Añadir slide',
        ),
	),
	'active' => true,
    'label_placement' => 'left',
));

acf_add_local_field_group(array(
	'key' => 'group_simple_header',
	'title' => 'Cabecera simple',
	'fields' => array(
		array(
            'key' => 'field_simple_header_title',
            'label' => 'Título',
            'name' => 'title',
            'type' => 'text',
        ),
        array(
            'key' => 'field_simple_header_subtitle',
            'label' => 'Subtítulo',
            'intruactions' => 'Opcional.',
            'name' => 'subtitle',
            'type' => 'text',
        ),
	),
	'active' => true,
    'label_placement' => 'left',
));

endif;