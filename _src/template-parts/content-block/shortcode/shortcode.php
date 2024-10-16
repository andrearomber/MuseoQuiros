<?php 

function process_shortcodes_only($content) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_content', 'wptexturize');

    $output = do_shortcode($content);

    add_filter('the_content', 'wpautop');
    add_filter('the_content', 'wptexturize');

    return $output;
}

/* Component arguments */
$shortcode_content   = get_arg($args, 'content');
?>

<?php if ($shortcode_content) : ?>
    <section class="shortcode-section">
        <div class="container">
            <?php echo process_shortcodes_only($shortcode_content); ?>
        </div>
    </section>
<?php endif; ?>