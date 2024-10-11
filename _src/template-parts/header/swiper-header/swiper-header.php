<?php $header = get_arg($args, "header");

if ($header) : 
    $main_title = $header["title"]; 
    $banners = $header["banner_repeater"]; ?>

    <?php if (count($banners) > 1) :?>
        <header id="hero-swiper-header">
            <?php if ($main_title) : ?><div class="container title-floating"><h1><?php echo $main_title; ?></h1></div><?php endif; ?>
            <div class="swiper swiper-header overflow-hidden">
                <div class="swiper-wrapper">
                    <?php foreach ($banners as $banner) :
                    $title = $banner["title"];
                    $text = $banner["text"];
                    $btns = $banner["btn_repeater"];
                    $type = $banner["type"];
                    $media = null;
                    if ($type == 'upload-file') { $media = $banner["file"]; }
                    elseif ($type == 'external-embed') { $media = $banner["embed"]; }
                    $bg_backdrop = $banner["bg_backdrop"];?>
                    <div class="swiper-slide">
                        <div class="slider-content"> 
                            <div class="container">
                                <?php if ($main_title) : ?><p class="subtitle text-background"><?php echo $main_title; ?></p><?php endif; ?>
                                <?php if ($main_title && $title) : ?><br><?php endif; ?>
                                <?php if ($title) : ?><h2 class="h1 text-background"><?php echo $title; ?></h2>
                                <?php else : ?><h2 class="h1 text-background"><?php echo get_the_title(); ?></h2><?php endif; ?>
                                <?php if ($text) : ?><?php echo $text; ?><?php endif; ?>
                                <?php if ($btns) : ?>
                                    <?php get_template_part('template-parts/content-block/button-group/button-group', null,
                                        array(
                                            'buttons'  => $btns,
                                        )
                                    );?>
                                <?php endif; ?>
                            </div>
                            <?php if($media): ?>
                                <!-- <div class="header-background<?php if ($bg_backdrop) :?> backdrop-gradient backdrop-vignette<?php endif; ?>"> -->
                                <div class="header-background">
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
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-navigation">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </header>
    <?php else : 
        $title = $banners[0]["title"];
        $text = $banners[0]["text"];
        $btns = $banners[0]["btn_repeater"];
        $type = $banners[0]["type"];
        $media = null;
        if ($type == 'upload-file') { $media = $banners[0]["file"]; }
        elseif ($type == 'external-embed') { $media = $banners[0]["embed"]; }
        $bg_backdrop = $banners[0]["bg_backdrop"];?>
        <header id="hero-swiper-header" class="one-slide">
            <div class="container">
                <?php if ($main_title) : ?><p class="subtitle text-background"><?php echo $main_title; ?></p><?php endif; ?>
                <?php if ($main_title && $title) : ?><br><?php endif; ?>
                <?php if ($title) : ?><h2 class="h1 text-background"><?php echo $title; ?></h2>
                <?php else : ?><h2 class="h1 text-background"><?php echo get_the_title(); ?></h2><?php endif; ?>
                <?php if ($text) : ?><?php echo $text; ?><?php endif; ?>
                <?php if ($btns) : ?>
                    <?php get_template_part('template-parts/content-block/button-group/button-group', null,
                        array(
                            'buttons'  => $btns,
                        )
                    );?>
                <?php endif; ?>
            </div>
            <?php if($media): ?>
                <div class="header-background<?php if ($bg_backdrop) :?> backdrop-gradient backdrop-vignette<?php endif; ?>">
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
<?php endif; ?>