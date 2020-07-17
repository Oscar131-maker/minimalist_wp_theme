<!-- Navegation Menu -->
<header id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="menu">
            <div class="logo-box">
                <a href="<?php echo esc_html(home_url()); ?>">
                    <?php if (!has_custom_logo()) {
                    echo '<h1 class="sitle-title">';  bloginfo('name'); echo '</h1>';
                    }else{
                    the_custom_logo();
                    } ?>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarNavDropdown',
                'menu_class' => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            )); ?>

          </nav>
    </header>