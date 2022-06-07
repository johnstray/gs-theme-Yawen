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
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/assets/css/build-min.css" />
        <style>
            .p-inline-list--middot .p-inline-list__item { padding-right: 0.75rem !important; } .p-inline-list__item.is-selected { font-weight: bold; } .p-navigation .p-navigation__dropdown-item, .p-navigation .p-navigation__dropdown-item:focus, .p-navigation .p-navigation__dropdown-item:hover, .p-navigation .p-navigation__dropdown-item:visited, .p-navigation .p-navigation__link>a, .p-navigation .p-navigation__link>a:focus, .p-navigation .p-navigation__link>a:hover, .p-navigation .p-navigation__link>a:visited, .p-navigation .p-navigation__toggle--close, .p-navigation .p-navigation__toggle--close:focus, .p-navigation .p-navigation__toggle--close:hover, .p-navigation .p-navigation__toggle--close:visited, .p-navigation .p-navigation__toggle--open, .p-navigation .p-navigation__toggle--open:focus, .p-navigation .p-navigation__toggle--open:hover, .p-navigation .p-navigation__toggle--open:visited, .p-navigation [class*=p-navigation__item]>.p-navigation__link, .p-navigation.is-dark .p-navigation__dropdown-item, .p-navigation.is-dark .p-navigation__dropdown-item:focus, .p-navigation.is-dark .p-navigation__dropdown-item:hover, .p-navigation.is-dark .p-navigation__dropdown-item:visited, .p-navigation.is-dark .p-navigation__link>a, .p-navigation.is-dark .p-navigation__link>a:focus, .p-navigation.is-dark .p-navigation__link>a:hover, .p-navigation.is-dark .p-navigation__link>a:visited, .p-navigation.is-dark .p-navigation__toggle--close, .p-navigation.is-dark .p-navigation__toggle--close:focus, .p-navigation.is-dark .p-navigation__toggle--close:hover, .p-navigation.is-dark .p-navigation__toggle--close:visited, .p-navigation.is-dark .p-navigation__toggle--open, .p-navigation.is-dark .p-navigation__toggle--open:focus, .p-navigation.is-dark .p-navigation__toggle--open:hover, .p-navigation.is-dark .p-navigation__toggle--open:visited, .p-navigation.is-dark [class*=p-navigation__item]>.p-navigation__link { color: #eee; } .p-navigation .p-navigation__dropdown-item:hover, .p-navigation .p-navigation__link.is-selected>a, .p-navigation .p-navigation__link>a:hover, .p-navigation .p-navigation__toggle--close:hover, .p-navigation .p-navigation__toggle--open:hover, .p-navigation [class*=p-navigation__item].is-selected>.p-navigation__link, .p-navigation [class*=p-navigation__item]>.p-navigation__link:hover, .p-navigation.is-dark .p-navigation__dropdown-item:hover, .p-navigation.is-dark .p-navigation__link.is-selected>a, .p-navigation.is-dark .p-navigation__link>a:hover, .p-navigation.is-dark .p-navigation__toggle--close:hover, .p-navigation.is-dark .p-navigation__toggle--open:hover, .p-navigation.is-dark [class*=p-navigation__item].is-selected>.p-navigation__link { background-color: transparent; } .p-breadcrumbs__items { margin-bottom: 0 } .p-breadcrumbs__item { margin-bottom: 0; padding: 1rem 0; } .p-breadcrumbs__item a { color: #eee; } .p-breadcrumbs__item:not(:first-of-type)::before { color: #ccc; } .p-navigation__title { font-size: 1.5rem; font-weight: bold; color: #fff; line-height: 3rem; padding-left: 1rem; } .p-media-object__image.p-image--bordered { padding: 0.25rem; }
        </style>

        <?php get_header(); // GetSimple plugin hook - used by plugins to inject their code ?>
    </head>
