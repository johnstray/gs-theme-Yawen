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
?><!DOCTYPE html><!-- HTML 5 : XHTML Compatible -->
<html lang="en"><!-- @TODO: Set GS lang here -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="index,follow" />

        <title><?php get_head_title(); ?></title>
        <link rel="shortcut icon" href="favicon.ico" />

        <!-- Stylesheets -->
        <link rel="stylesheet" id="vanilla-framework_v3.6.1" href="<?php get_theme_url(); ?>/assets/styles/vanilla-framework.css" />
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/styles/yawen-styles.css" />

        <?php get_header(); // GetSimple plugin hook - used by plugins to inject their code ?>
    </head>
