<?php
$noHeader = get_arg($args, 'noHeader');
$menu_is_assigned = has_nav_menu('top');
$has_menu_items = wp_nav_menu(array('theme_location' => 'top', 'echo' => false)) !== false;?>

<nav class="navbar-fixed-top<?php if ($noHeader): ?> no-header<?php endif;?>">
    <div class="container">
        <?php // get_template_part('template-parts/misc/skip-to-content-btn/skip-to-content-btn'); ?>

        <div class="nav-logo-container<?php if (!$has_menu_items || !$menu_is_assigned) {
    echo ' no-menu';
}
?>">
            <?php get_template_part('template-parts/misc/site-logo/site-logo');?>
        </div>
        <?php if ($has_menu_items && $menu_is_assigned): // Menu must be assigned AND have at least 1 item ?>
	            <input type="checkbox" name="nav-toggle" id="nav-toggle">
	            <label for="nav-toggle" class="nav-toggle-label" data-tooltip="<?php lit("Pulsa espacio para abrir el menú");?>" data-tooltip-pos="left" data-tooltip-on="input-label">
	            </label>
	        <?php endif;?>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'top', // menu display position
                'container' => false, // do not wrap ul in container div
                'menu_id' => 'main-navigation', // ul id
                'menu_class' => 'menu dropdown-submenu',
            ));
        ?>
        <?php $contact_page = get_field('contact_page', 'options');?>
        <div class="cta">
            <a href="<?php echo esc_url($contact_page ? $contact_page['url'] : '#'); ?>" class="btn-secondary">
            <?php echo esc_html($contact_page ? $contact_page['title'] : ''); ?>
            </a>
        </div>

        <div id="language-switcher">
            <button class="language-toggle">
                <i class="ti ti-world"></i>
            </button>
            <ul id="multi-languages" class="language-list">
                <?php
                if (function_exists('pll_the_languages')) {
                    pll_the_languages(array(
                        'dropdown' => 0,
                        'show_flags' => 1,
                        'show_names' => 1,
                        'hide_if_empty' => 1,
                    ));
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Script para manejar el selector de idiomas

    const languageToggle = document.querySelector('.language-toggle');
    const languageList = document.querySelector('#multi-languages');

    languageToggle.addEventListener('click', function () {
        languageList.classList.toggle('active');
    });

    document.addEventListener('click', function (event) {
        if (!languageToggle.contains(event.target) && !languageList.contains(event.target)) {
            languageList.classList.remove('active');
        }
    });

    // Mantener el menú abierto al hacer hover
    languageToggle.addEventListener('mouseenter', function() {
        languageList.classList.add('active');
    });

    // Aplicar icono de lenguaje si no tiene bandera
    const languageItems = document.querySelectorAll('#multi-languages li.lang-item');
    // console.log(languageItems);

    languageItems.forEach(item => {
        const anchor = item.querySelector('a');
    
        if (!anchor.querySelector('img')) {
            
            const icon = document.createElement('i');
            icon.className = 'ti ti-language';

            anchor.insertAdjacentElement('afterbegin', icon);
        }
    });
    
</script>