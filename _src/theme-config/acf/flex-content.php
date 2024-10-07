<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_flex_content',
	'title' => 'Contenido de página flexible',
	'fields' => array(
		array(
			'key' => 'field_flex_content',
			'label' => 'Contenido de la página',
			'name' => 'flex_content',
			'type' => 'flexible_content',
            'required' => 0,
            'layouts' => array(			
                'layout_swiper' => array(
                    'key' => 'layout_swiper',
                    'name' => 'swiper',
                    'label' => 'Carrusel',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_swiper_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_swiper_cta',
                            'label' => 'Botón',
                            'instructions' => 'Si se deja vacío, no aparecerá ningún botón.',
                            'name' => 'cta',
                            'type' => 'link',
                            'return_format' => 'array',
                        ),
                        array(
                            'key' => 'field_swiper_size',
                            'label' => 'Tamaño',
                            'instructions' => 'Cada tamaño de swiper tiene un número mínimo de slides necesarias. Si no hay suficientes, es posible que el carrusel no se comporte de forma correcta.',
                            'name' => 'size',
                            'type' => 'select',
                            'default_value' => 'image-swiper-medium',
                            'choices' => array(
                                'image-swiper-large' => 'Grande (mínimo 4 slides)',
                                'image-swiper-medium'  => 'Mediano (mínimo 7 slides)',
                                'image-swiper-small'  => 'Pequeño (mínimo 12 slides)',
                            )
                        ),
                        array(
                            'key' => 'field_swiper_repeater',
                            'label' => 'Slides',
                            'name' => 'swiper_repeater',
                            'type' => 'repeater',
                            'layout' => 'table',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_swiper_slide_img',
                                    'label' => 'Imagen',
                                    'name' => 'img',
                                    'type' => 'image',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'preview_size' => 'thumbnail',
								),
                                array(
                                    'key' => 'field_swiper_slide_link',
                                    'label' => 'Enlace de la imagen',
                                    'instructions' => 'Si se deja vacío, no tendrá ningún enlace al hacer clic.',
                                    'name' => 'link',
                                    'type' => 'link',
                                    'return_format' => 'array',
                                ),
                            ),
                            'button_label' => 'Añadir slide',
                        ),
                    ),
                ),
                'layout_wysiwyg' => array(
                    'key' => 'layout_wysiwyg',
                    'name' => 'wysiwyg',
                    'label' => 'Bloque de texto',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_wysiwyg_content',
                            'label' => 'Contenido',
                            'name' => 'content',
                            'type' => 'wysiwyg',
                        ),
                        array(
                            'key' => 'field_wysiwyg_bg',
                            'label' => 'Color de fondo',
                            'name' => 'bg_class',
                            'type' => 'select',
                            'default_value' => 'default',
                            'choices' => array(
                                'bg-white' => 'Blanco',
                                'bg-light'  => 'Gris',
                                'bg-primary'  => 'Color primario',
                                'bg-secondary'  => 'Color secundario',
                            )
                        ),
                    ),
                ),
                'layout_text_media' => array(
                    'key' => 'layout_text_media',
                    'name' => 'text_media',
                    'label' => 'Texto y multimedia',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_text_media_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_text_media_text',
                            'label' => 'Texto',
                            'name' => 'text',
                            'type' => 'wysiwyg',
                        ),
                        array(
                            'key' => 'field_text_media_buttons',
                            'label' => 'Botones',
                            'name' => 'btn_repeater',
                            'type' => 'clone',
                            'clone' => array(
                                0 => 'group_button_repeater',
                            ),
                            'display' => 'seamless',
                        ),
                        array(
                            'key' => 'field_text_media_position',
                            'label' => 'Posición del elemento multimedia',
                            'name' => 'position',
                            'type' => 'select',
                            'default_value' => 'media-right',
                            'choices' => array(
                                'media-right' => 'A la derecha del texto',
                                'media-left'  => 'A la izquierda del texto',
                                'media-before'  => 'Encima del texto',
                                'media-after'  => 'Debajo del texto',
                            )
                        ),
                        array(
                            'key' => 'field_text_media_element',
                            'label' => 'Elemento multimedia',
                            'name' => 'media_element',
                            'type' => 'clone',
                            'clone' => array(
                                0 => 'group_media_element',
                            ),
                            'display' => 'seamless',
                        ),
                        array(
                            'key' => 'field_text_media_bg',
                            'label' => 'Color de fondo',
                            'name' => 'bg_class',
                            'type' => 'select',
                            'default_value' => 'default',
                            'choices' => array(
                                'bg-white' => 'Blanco',
                                'bg-light'  => 'Gris',
                                'bg-primary'  => 'Color primario',
                                'bg-secondary'  => 'Color secundario',
                            )
                        ),
                    ),
                ),
                'layout_gallery' => array(
                    'key' => 'layout_gallery',
                    'name' => 'gallery',
                    'label' => 'Galería de imágenes',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_gallery_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_gallery_images',
                            'label' => 'Imágenes',
                            'name' => 'gallery_images',
                            'type' => 'gallery',
                            'return_format' => 'array',
                            'library' => 'all',
                            'insert' => 'append',
                        ),
                        array(
                            'key' => 'field_gallery_aspect',
                            'label' => 'Aspect ratio de las imágenes',
                            'instructions' => 'Si se elige mantener el tamaño de las imágenes, todas deberían tener la misma proporción o no se mostrarán correctamente.',
                            'name' => 'aspect',
                            'type' => 'select',
                            'default_value' => 'square',
                            'choices' => array(
                                'square' => 'Cuadradas (1:1)',
                                'wide'  => 'Alargadas (16:9)',
                                'default'  => 'Mantener el tamaño de cada imagen',
                            )
                        ),
                        array(
                            'key' => 'field_gallery_cols',
                            'label' => 'Número de columnas',
                            'name' => 'cols',
                            'type' => 'select',
                            'default_value' => 'col4_2_1',
                            'choices' => array(
                                'col4_2_1' => '4 Desktop, 2 Tablet, 1 Mobile',
                                'col6_3_1' => '6 Desktop, 3 Tablet, 1 Mobile',
                                'col2_1_1' => '2 Desktop, 1 Tablet, 1 Mobile',
                            )
                        ),
                    ),
                ),
                'layout_image' => array(
                    'key' => 'layout_image',
                    'name' => 'image',
                    'label' => 'Imagen',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_image',
                            'label' => 'Imagen',
                            'name' => 'image',
                            'type' => 'image',
                            'return_format' => 'array',
                            'library' => 'all',
                            'preview_size' => 'medium',
                        ),
                        array(
                            'key' => 'field_image_has_link',
                            'label' => 'Añadir link a la imagen',
                            'name' => 'has_link',
                            'type' => 'true_false',
                            'required' => 0,
                            'default_value' => 0,
                        ),
                        array(
                            'key' => 'field_image_link',
                            'label' => 'Enlace de la imagen',
                            'name' => 'link',
                            'type' => 'link',
                            'return_format' => 'url',
                            'conditional_logic' => array(
                                array(
                                    'field' => 'field_image_has_link',
                                    'operator' => '==',
                                    'value' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
                'layout_video' => array(
                    'key' => 'layout_video',
                    'name' => 'video',
                    'label' => 'Vídeo',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_video_type',
                            'label' => '¿El archivo multimedia está alojado en la página, o es un link externo?',
                            'instructions' => 'Un link externo puede ser, por ejemplo, un vídeo de YouTube',
                            'name' => 'type',
                            'type' => 'select',
                            'default_value' => 'upload-file',
                            'choices' => array(
                                'upload-file' => 'Subir archivo o elegir de la galería de medios',
                                'external-embed'  => 'Link externo',
                            )
                        ),
                        array(
                            'key' => 'field_video_file',
                            'label' => 'Archivo de vídeo',
                            'name' => 'file',
                            'type' => 'file',
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_video_type',
                                        'operator' => '==',
                                        'value' => 'upload-file',
                                    ),
                                ),
                            ),
                            'return_format' => 'array',
                            'library' => 'all',
                            'mime_types' => '.mp4, .mov, .mpg, .avi, .ogv',
                        ),
                        array(
                            'key' => 'field_video_embed',
                            'label' => 'Embed',
                            'name' => 'embed',
                            'type' => 'oembed',
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_video_type',
                                        'operator' => '==',
                                        'value' => 'external-embed',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_video_bg',
                            'label' => 'Color de fondo',
                            'name' => 'bg_class',
                            'type' => 'select',
                            'default_value' => 'default',
                            'choices' => array(
                                'bg-white' => 'Blanco',
                                'bg-light'  => 'Gris',
                                'bg-primary'  => 'Color primario',
                                'bg-secondary'  => 'Color secundario',
                            )
                        ),
                    ),
                ),
				'layout_news_list' => array(
                    'key' => 'layout_news_list',
                    'name' => 'news_list',
                    'label' => 'Lista de noticias',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_news_list_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_news_list_see_more',
                            'label' => 'Texto para el botón de "Ver todos"',
                            'instructions' => 'Si se deja este texto vacío, no aparecerá ningún botón',
                            'name' => 'see_more',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_news_list_category',
                            'label' => 'Categoría',
                            'instructions' => 'Si se deja este campo vacío, aparecerán todas las noticias más recientes',
                            'name' => 'post_term',
                            'allow_null' => true,
                            'field_type' => 'select',
                            'type' => 'taxonomy',
                        ),
                    ),
                ),
                'layout_videos_list' => array(
                    'key' => 'layout_videos_list',
                    'name' => 'videos_list',
                    'label' => 'Lista de vídeos',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_videos_list_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_videos_list_description',
                            'label' => 'Descripción',
                            'instructions' => 'Se puede añadir una breve descripción a la lista de vídeos.',
                            'name' => 'description',
                            'type' => 'wysiwyg',
                        ),
                        array(
                            'key' => 'field_videos_list_see_more',
                            'label' => 'Texto para el botón de "Ver todos"',
                            'instructions' => 'Si se deja este texto vacío, no aparecerá ningún botón',
                            'name' => 'see_more',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_videos_list_category',
                            'label' => 'Categoría',
                            'instructions' => 'Si se deja este campo vacío, aparecerán todas los vídeos más recientes',
                            'name' => 'video_term',
                            'allow_null' => true,
                            'field_type' => 'select',
                            'type' => 'taxonomy',
                            'taxonomy' => 'video_category',
                            'multiple' => false, 
                        ),
                    ),
                ),
                'layout_cta_section' => array(
                    'key' => 'layout_cta_section',
                    'name' => 'cta',
                    'label' => 'Sección CTA',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_cta_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_cta_buttons',
                            'label' => 'Botones',
                            'name' => 'btn_repeater',
                            'type' => 'clone',
                            'clone' => array(
                                0 => 'group_button_repeater',
                            ),
                            'display' => 'seamless',
                        ),
                        array(
                            'key' => 'field_cta_bg_backdrop',
                            'label' => 'Añadir degradado al fondo',
                            'name' => 'bg_backdrop',
                            'type' => 'true_false',
                            'required' => 0,
                            'default_value' => 1,
                        ),
                        array(
                            'key' => 'field_cta_bg_backdrop_blur',
                            'label' => 'Difuminar el fondo',
                            'name' => 'bg_backdrop_blur',
                            'type' => 'true_false',
                            'required' => 0,
                            'default_value' => 1,
                        ),
                        array(
                            'key' => 'field_cta_media_element',
                            'label' => 'Elemento multimedia',
                            'name' => 'media_element',
                            'type' => 'clone',
                            'clone' => array(
                                0 => 'group_media_element',
                            ),
                            'display' => 'seamless',
                        ),
                    ),
                ),
                'layout_form' => array(
                    'key' => 'layout_form',
                    'name' => 'form',
                    'label' => 'Formulario de contacto',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_form_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_form_cf7',
                            'label' => 'Formulario',
                            'name' => 'cf7_form',
                            'type' => 'post_object',
                            'post_type' => array(
                                0 => 'wpcf7_contact_form',
                            ),
                            'return_format' => 'id',
                        ),
                        // array(
                        //     'key' => 'field_form_image',
                        //     'label' => 'Imagen',
                        //     'instructions' => 'Opcional. Si no hay imagen quedará ese espacio vacío.',
                        //     'name' => 'image',
                        //     'type' => 'image',
                        //     'return_format' => 'array',
                        //     'library' => 'all',
                        //     'preview_size' => 'medium',
                        // ),
                        array(
                            'key' => 'field_form_bg_backdrop',
                            'label' => 'Añadir degradado al fondo',
                            'name' => 'bg_backdrop',
                            'type' => 'true_false',
                            'required' => 0,
                            'default_value' => 1,
                        ),
                        array(
                            'key' => 'field_form_bg_backdrop_blur',
                            'label' => 'Difuminar el fondo',
                            'name' => 'bg_backdrop_blur',
                            'type' => 'true_false',
                            'required' => 0,
                            'default_value' => 1,
                        ),
                        array(
                            'key' => 'field_form_media_element',
                            'label' => 'Elemento multimedia',
                            'name' => 'media_element',
                            'type' => 'clone',
                            'clone' => array(
                                0 => 'group_media_element',
                            ),
                            'display' => 'seamless',
                        ),
                    ),
                ),
                'layout_product_card' => array(
                    'key' => 'layout_product_card',
                    'name' => 'product_card',
                    'label' => 'Ficha de producto',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_product_card_position',
                            'label' => 'Orden de los elementos',
                            'name' => 'position',
                            'type' => 'select',
                            'default_value' => 'default',
                            'choices' => array(
                                'default' => 'Por defecto (texto a la izquierda, a la imagen derecha)',
                                'inverse' => 'Inverso (texto a la derecha, a la imagen izquierda)',
                            )
                        ),
                        array(
                            'key' => 'field_product_card_subtitle',
                            'label' => 'Subtítulo',
                            'instructions' => 'Opcional. Aparece encima del título, en mayúscula',
                            'name' => 'subtitle',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_product_card_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_product_card_text',
                            'label' => 'Descripción',
                            'instructions' => 'Se pueden usar listas no ordenadas (ul) para describir características del producto.',
                            'name' => 'text',
                            'type' => 'wysiwyg',
                        ),
                        array(
                            'key' => 'field_product_card_features',
                            'label' => 'Características',
                            'name' => 'feature_repeater',
                            'type' => 'repeater',
                            'layout' => 'table',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_product_card_feature_title',
                                    'label' => 'Título',
                                    'name' => 'feature_title',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_product_card_feature_subtitle',
                                    'label' => 'Subtítulo',
                                    'name' => 'feature_subtitle',
                                    'type' => 'text',
                                ),
                                array(
                                    'key' => 'field_product_card_feature_icon',
                                    'label' => 'Icono',
                                    'name' => 'feature_icon',
                                    'instructions' => 'Debe ser un id válido de Tabler icons.',
                                    'type' => 'text',
                                ),
                            ),
                        ),
                        array(
                            'key' => 'field_product_card_background',
                            'label' => 'Fondo de la imagen del producto',
                            'name' => 'bg',
                            'type' => 'image',
                            'return_format' => 'array',
                            'library' => 'all',
                            'preview_size' => 'thumbnail',
                        ),
                        array(
                            'key' => 'field_product_card_buttons',
                            'label' => 'Botones',
                            'name' => 'btn_repeater',
                            'type' => 'clone',
                            'clone' => array(
                                0 => 'group_button_repeater',
                            ),
                            'display' => 'seamless',
                        ),
                    ),
                ),
                'layout_card_swiper' => array(
                    'key' => 'layout_card_swiper',
                    'name' => 'card_swiper',
                    'label' => 'Carrusel de tarjetas',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_card_swiper_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_card_swiper',
                            'label' => 'Botón leer más',
                            'instructions' => 'Si se deja vacío, no aparecerá ningún botón.',
                            'name' => 'read_more',
                            'type' => 'link',
                            'return_format' => 'array',
                        ),
                        array(
                            'key' => 'field_card_swiper_repeater',
                            'label' => 'Tarjetas',
                            'name' => 'cards_repeater',
                            'type' => 'repeater',
                            'layout' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_card_swiper_element',
                                    'label' => 'Card',
                                    'name' => 'card_element',
                                    'type' => 'clone',
                                    'clone' => array(
                                        0 => 'group_card_element',
                                    ),
                                    'display' => 'seamless',
                                ),
                            ),
                            'button_label' => 'Añadir tarjeta',
                        ),
                        array(
                            'key' => 'field_card_style',
                            'label' => 'Estilo',
                            'name' => 'style',
                            'type' => 'select',
                            'default_value' => 'default',
                            'choices' => array(
                                'default' => 'Normal (imagen pequeña y todos los elementos visibles)',
                                'image-full'  => 'Imagen a tamaño completo (el texto y el botón no son visibles)',
                                'hover'  => 'Imagen a tamaño completo y efecto hover para mostrar el contenido',
                            )
                        ),
                    ),
                ),                
                'layout_map' => array(
                    'key' => 'layout_map',
                    'name' => 'map',
                    'label' => 'Mapa',
                    'display' => 'row',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_map_title',
                            'label' => 'Título',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_map_location',
                            'label' => 'Localización',
                            'name' => 'map',
                            'type' => 'google_map',
                        ),
                    ),
                ),
            ),
            'button_label' => 'Añadir bloque',
		),
	),
	'active' => true,
	'show_in_rest' => 0,
    'menu_order' => 1,
    'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
        array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/template-flex-content.php',
			),
		),
	),
));

endif;