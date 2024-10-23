<?php /* Component arguments */
$title = get_arg($args,'title');
$text = get_arg($args,'text'); 
$type = get_arg($args,'type');
$btns = get_arg($args,'btns');
$bg_class = get_arg($args,'bg_class');
$media_position = get_arg($args,'media_pos');
$media = get_arg($args,'media'); ?>

<section class="content-section text-media-section">
    <div class="container <?php echo $media_position; ?>">
        <div class="text-elm animate slide-up-big">
            <?php if ($title) : ?>
                <h2 id="<?php echo generate_anchor($title);?>"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if ($text) : ?>
                <?php echo $text; ?>
            <?php endif; ?>
            <?php if ($btns) : ?>
                <?php get_template_part('template-parts/content-block/button-group/button-group', null,
                    array(
                        'buttons'  => $btns,
                    )
                );?>
            <?php endif; ?>
        </div>
        <aside class="media-elm animate slide-left-big">
            <?php if (is_array($media) && $media['type'] == 'image') : ?>
                <?php get_template_part('template-parts/content-block/image/image-elm', null,
                    array(
                        'img'  => $media,
                        'link' => null
                    )
                );?>
            <?php else : ?>
                <?php get_template_part('template-parts/content-block/video/video-elm', null,
                    array(
                        'type'  => $type,
                        'video' => $media,
                        'autoplay' => false,
                        'no_controls' => false,
                        'muted' => false,
                        'loop' => false
                    )
                );?>
            <?php endif; ?>
        </aside>
    </div>
</section>