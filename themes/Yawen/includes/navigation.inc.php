<?php if ( defined('IN_GS') === false ) { echo "You cannot load this file directly!"; header("Location: /"); }
/**
 * Yawen Theme for GetSimple CMS
 * A theme designed to be simple yet elegant, focusing more on well constructed
 * content than the website itself. Has support for dark-mode where possible, and
 * tries to be as accessible as possible for all users.
 *
 * @Author:     John Stray
 * @URL:        https://gs.johnstray.com/themes/yawen
 * @Version:    v1.0.0
 **/
?>

        <header id="navigation" class="p-navigation" style="background-color: #369;">
            <div class="p-navigation__row">
                <div class="p-navigation__banner">
                    <div class="p-navigation__logo">

                        <!-- Site Logo -->
                        <a class="p-navigation__item" href="<?php get_site_url(); ?>">
                            <img class="p-navigation__image" src="<?php get_theme_url(); ?>/images/logo.png" alt="<?php get_site_name(); ?>" />
                            <h1 class="p-navigation__title"><?php get_site_name(); ?></h1>
                        </a>

                    </div>
                    <a href="#navigation" class="p-navigation__toggle--open" title="menu">Menu</a>
                    <a href="#navigation-closed" class="p-navigation__toggle--close" title="close menu">Close menu</a>
                </div>

                <nav class="p-breadcrumbs" aria-label="Breadcrumbs">
                    <ol class="p-breadcrumbs__items">
                        <li class="p-breadcrumbs__item"><a href="#">Home</a></li>
                        <li class="p-breadcrumbs__item"><a href="#"><?php get_section_title(true); ?></a></li>
                    </ol>
                </nav>

                <nav class="p-navigation__nav u-align--right" aria-label="Example main navigation">
                    <ul class="p-navigation__items">
                        <?php get_main_menu(); ?>
                    </ul>
                </nav>
            </div>
        </header>
