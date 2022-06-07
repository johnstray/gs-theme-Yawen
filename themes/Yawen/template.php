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

include('includes/header.inc.php'); ?>

    <body id="<?php get_page_slug(); ?>">
         <?php include('includes/navigation.inc.php'); ?>

        <main id="main-content">
            <header class="page-header">
                <?php //@TODO: Set below variables using support plugin ?>
                <?php $SECTIONED=true; $SHOWNAV=true; include('includes/page-header.inc.php'); ?>
            </header>
            <div class="p-strip">
                <div class="row">
                    <article class="col-8">
                        <?php get_page_content(); ?>
                    </article>
                    <aside class="col-4">
                        <?php include('includes/sidebar.inc.php'); ?>
                    </aside>
                </div>
            </div>
        </main>

    </body>
</html>
