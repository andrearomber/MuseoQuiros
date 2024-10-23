<?php /* Component arguments */
$text_content   = get_arg($args,'content'); ?>

<?php if ($text_content) : ?>
    <section class="content-section">
        <div class="container">
            <?php echo apply_filters('the_content', $text_content); ?>
        </div>
    </section>
<?php endif; ?>