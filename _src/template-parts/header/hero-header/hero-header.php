<?php $header = get_arg($args, "header");
if ($header) : 
    
    $title = $header["title"];
    $subtitle = $header["subtitle"];
    $bg_backdrop = $header["bg_backdrop"];
    
    // Background media element
    $type = $header["type"];
    $media = null;
    if ($type == 'upload-file') { $media = $header["file"]; }
    elseif ($type == 'external-embed') { $media = $header["embed"]; } ?>

    <header id="hero-header">
        <div class="container">
            <?php if ($subtitle) : ?><p class="subtitle animate slide-down delay-025"><?php echo $subtitle; ?></p><?php endif; ?>
            <?php if ($title) : ?><h1 class="animate fade-in delay-075"><?php echo $title; ?></h1>
            <?php else : ?><h1 class="animate fade-in delay-075"><?php esc_html_e(get_the_title()); ?></h1><?php endif; ?>
        </div>
        <?php if($media): ?>
            <div class="header-background<?php if ($bg_backdrop) :?> bg_backdrop <?php endif; ?> animate zoom-in-bg">
                <?php if (is_array($media) && $media['type'] == 'image') : ?>
                <?php get_template_part('template-parts/content-block/image/image-elm', null,
                    array(
                        'img'  => $media,
                        'link' => null,
                        'background' => true
                    )
                );?>
            <?php else : ?>
                <?php get_template_part('template-parts/content-block/video/video-elm', null,
                    array(
                        'type'  => $type,
                        'video' => $media,
                        'autoplay' => true,
                        'no_controls' => true,
                        'muted' => true,
                        'loop' => true
                    )
                );?>
            <?php endif; ?>
            </div>
        <?php endif; ?>
    </header>
<?php endif; ?>