<?php
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

// This file should not be loaded directly. It should be loaded in the context of GetSimple CMS
if ( defined('IN_GS') === false ) { echo "You cannot load this file directly!"; header("Location: /"); }

// Get Global variables
GLOBAL $LANG;

?><!DOCTYPE html><!-- HTML 5 : XHTML Compatible -->
<html lang="<?php echo $LANG; ?>">

    <?php include('includes/header.inc.php'); // Include the HTML <head> template ?>    
    
    <body id="<?php get_page_slug(); ?>">
         
        <?php include('includes/navigation.inc.php'); // Include the global site navigation template ?>
        
        <hr class="is-fixed-width" />

        <main id="main-content">
            <header class="page-header">
            
                <?php include('includes/page-header.inc.php'); // Include the page header template ?>
                
            </header>
            <div class="p-strip">
                <div class="row">
                    <article class="col-8 js-toc-content">
                        
                        <?php get_page_content(); // Get the content of the current page ?>
                        
                    </article>
                    <aside class="col-4">
                    
                        <?php include('includes/sidebar.inc.php'); // Include the sidebar template ?>
                        
                    </aside>
                </div>
            </div>
        </main>
        
        <footer style="border-top:1px solid rgba(0,0,0,.1);padding:2rem 0;" class="u-align--center">
            
            <?php include('includes/footer.inc.php'); // Include the footer template ?>
            
        </footer>
        
        <?php get_footer(); // GetSimple plugin hook - used by plugins to inject their code ?>

    </body>
</html>

