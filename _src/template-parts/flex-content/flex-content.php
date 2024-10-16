<?php if (have_rows('flex_content')) :
    $tp = 'template-parts/content-block/'; // Content blocks folder

    while (have_rows('flex_content')) : the_row();

        if( get_row_layout() == 'swiper' ) : 
            $banners = get_sub_field('swiper_repeater');
            $title = get_sub_field('title');
            $cta = get_sub_field('cta');
            $size = get_sub_field('size');

            get_template_part($tp . 'swiper-banner/swiper-banner', null,
                array(
                    'banners'  => $banners,
                    'title'  => $title,
                    'cta'  => $cta,
                    'size' => $size
                )
            );

        elseif( get_row_layout() == 'shortcuts' ) : 
            $shortcuts = get_sub_field('shortcuts_repeater');

            get_template_part($tp . 'shortcuts/shortcuts', null,
                array(
                    'shortcuts'  => $shortcuts
                )
            );

        elseif( get_row_layout() == 'wysiwyg' ) : 
            $text_content = get_sub_field('content');
            $bg_class = get_sub_field('bg_class');

            get_template_part($tp . 'wysiwyg/wysiwyg', null,
                array(
                    'content'   => $text_content,
                    'bg_class'  => $bg_class
                )
            );

        elseif( get_row_layout() == 'shortcode' ) : 
            $text_content = get_sub_field('content');

            get_template_part($tp . 'shortcode/shortcode', null,
                array(
                    'content'   => $text_content,
                )
            );

        elseif( get_row_layout() == 'text_media' ) : 
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $btns = get_sub_field('btn_repeater');
            $type =  get_sub_field('type');
            $media_pos =  get_sub_field('position');
            $bg_class =  get_sub_field('bg_class');
            $media = null;
            if ($type == 'upload-file') { $media = get_sub_field('file'); }
            elseif ($type == 'external-embed') { $media = get_sub_field('embed'); }

            get_template_part($tp . 'text-media/text-media', null,
                array(
                    'title'     => $title,
                    'text'      => $text,
                    'btns'      => $btns,
                    'type'      => $type,
                    'media_pos' => $media_pos,
                    'media'     => $media,
                    'bg_class'  => $bg_class,
                )
            );

        elseif( get_row_layout() == 'gallery' ) :
            $title = get_sub_field('title');
            $gallery = get_sub_field('gallery_images');
            $cols = get_sub_field('cols');
            $aspect = get_sub_field('aspect');

            get_template_part($tp . 'gallery/gallery', null,
                array(
                    'title'  => $title,
                    'gallery'  => $gallery,
                    'cols'  => $cols,
                    'aspect'  => $aspect
                )
            );

        elseif( get_row_layout() == 'image' ) :
            $has_link = get_sub_field('has_link'); $link = null;
            if ($has_link) $link = get_sub_field('link');
            $img =  get_sub_field('image');

            get_template_part($tp . 'image/image', null,
                array(
                    'img'  => $img,
                    'link' => $link
                )
            );
        
        elseif( get_row_layout() == 'video' ) :
            $video_type = get_sub_field('type');
            $bg_class =  get_sub_field('bg_class');
            if ($video_type == 'upload-file') $video = get_sub_field('file');
            elseif ($video_type == 'external-embed') $video = get_sub_field('embed');

            get_template_part($tp . 'video/video', null,
                array(
                    'type'  => $video_type,
                    'video' => $video,
                    'bg_class' => $bg_class,
                )
            );

        elseif( get_row_layout() == 'news_list' ) :
            $title = get_sub_field('title');
            $post_type = "post";
            $see_more = get_sub_field('see_more');
            $post_term = get_sub_field('post_term');

            get_template_part($tp . 'recent-posts/recent-posts', null,
                array(
                    'title'     => $title,
                    'post_type' => $post_type,
                    'post_taxonomy' => 'category',
                    'post_term' => $post_term,
                    'see_more'  => $see_more
                )
            );

        elseif( get_row_layout() == 'videos_list' ) :
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $post_type = "video";
            $see_more = get_sub_field('see_more');
            $post_term = get_sub_field('video_term');

            get_template_part($tp . 'recent-videos/recent-videos', null,
                array(
                    'title'     => $title,
                    'description'     => $description,
                    'post_type' => $post_type,
                    'post_taxonomy' => 'video_category',
                    'post_term' => $post_term,
                    'see_more'  => $see_more
                )
            );

        elseif( get_row_layout() == 'form' ) :
            $title = get_sub_field('title');
            $formID = get_sub_field('cf7_form');
            // $image = get_sub_field('image');
            $bg_backdrop =  get_sub_field('bg_backdrop');
            $bg_backdrop_blur =  get_sub_field('bg_backdrop_blur');
            $type =  get_sub_field('type');
            $media = null;
            if ($type == 'upload-file') { $media = get_sub_field('file'); }
            elseif ($type == 'external-embed') { $media = get_sub_field('embed'); }

            get_template_part($tp . 'form/cf7-form', null,
                array(
                    'title'     => $title,
                    'formID'    => $formID,
                    // 'image'     => $image,
                    'bg_backdrop'  => $bg_backdrop,
                    'bg_backdrop_blur'  => $bg_backdrop_blur,
                    'type'      => $type,
                    'media'     => $media
                )
            );

        elseif( get_row_layout() == 'product_card' ) : 
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $text = get_sub_field('text');
            $features = get_sub_field('feature_repeater');
            $bg_img =  get_sub_field('bg');
            $btns = get_sub_field('btn_repeater');

            $order =  get_sub_field('position');

            get_template_part($tp . 'product-card/product-card', null,
                array(
                    'title'     => $title,
                    'subtitle'  => $subtitle,
                    'text'      => $text,
                    'features'  => $features,
                    'bg_img'    => $bg_img,
                    'btns'      => $btns,
                    'order'     => $order,
                )
            );

        elseif( get_row_layout() == 'card_swiper' ) : 
            $cards_repeater = get_sub_field('cards_repeater');
            $title = get_sub_field('title');
            $subtitle = get_sub_field('subtitle');
            $read_more = get_sub_field('read_more');
            $card_style = get_sub_field('style');

            get_template_part($tp . 'card-swiper/card-swiper', null,
                array(
                    'cards'  => $cards_repeater,
                    'card_style' => $card_style,
                    'title'  => $title,
                    'subtitle'  => $subtitle,
                    'read_more' => $read_more
                )
            );
            
        elseif( get_row_layout() == 'map' ) : 
            $title = get_sub_field('title');
            $type =  get_sub_field('type');
            $media = null;
            if ($type == 'upload-file') { $media = get_sub_field('file'); }
            elseif ($type == 'external-embed') { $media = get_sub_field('embed'); }

            get_template_part($tp . 'map/map', null,
                array(
                    'title'     => $title,
                    'type'      => $type,
                    'media'     => $media
                )
            );

        elseif( get_row_layout() == 'cta' ) : 
            $title = get_sub_field('title');
            $bg_backdrop =  get_sub_field('bg_backdrop');
            $bg_backdrop_blur =  get_sub_field('bg_backdrop_blur');
            $btns = get_sub_field('btn_repeater');
            $type =  get_sub_field('type');
            $media = null;
            if ($type == 'upload-file') { $media = get_sub_field('file'); }
            elseif ($type == 'external-embed') { $media = get_sub_field('embed'); }
    
            get_template_part($tp . 'cta-section/cta-section', null,
                array(
                    'title'     => $title,
                    'bg_backdrop'  => $bg_backdrop,
                    'bg_backdrop_blur'  => $bg_backdrop_blur,
                    'btns'      => $btns,
                    'type'      => $type,
                    'media'     => $media
                )
            );
    
        endif;
    endwhile;
endif; ?>