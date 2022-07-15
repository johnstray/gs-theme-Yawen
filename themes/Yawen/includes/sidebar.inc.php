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

?>

<div class="p-side-navigation is-sticky" id="drawer">
    <a href="#drawer" class="p-side-navigation__toggle js-drawer-toggle" aria-controls="drawer">
        Toggle side navigation
    </a>
    
    <div class="p-side-navigation__overlay js-drawer-toggle" aria-controls="drawer"></div>
    
    <nav class="p-side-navigation__drawer" aria-label="Example side navigation">
        <div class="p-side-navigation__drawer-header">
            <a href="#" class="p-side-navigation__toggle--in-drawer js-drawer-toggle" aria-controls="drawer">
                Toggle side navigation
            </a>
        </div>

        <div class="js-toc"></div>
    </nav>
</div>

<script src="<?php get_theme_url(); ?>/assets/scripts/tocbot.min.js"></script>
<script>
    function makeIds () {
        var content = document.querySelector('.js-toc-content')
        var headings = content.querySelectorAll('h1, h2, h3, h4, h5, h6')
        var headingMap = {}

        Array.prototype.forEach.call(headings, function (heading) {
            var id = heading.id ? heading.id : heading.textContent.trim().toLowerCase().split(' ').join('-').replace(/[!@#$%^&*():]/ig, '').replace(/\//ig, '-')
            headingMap[id] = !isNaN(headingMap[id]) ? ++headingMap[id] : 0
            if (headingMap[id]) {
                heading.id = id + '-' + headingMap[id]
            } else {
                heading.id = id
            }
        })
    }
    
    makeIds();

    tocbot.init({
        // Where to render the table of contents.
        tocSelector: '.js-toc',
        // Where to grab the headings to build the table of contents.
        contentSelector: '.js-toc-content',
        // Which headings to grab inside of the contentSelector element.
        headingSelector: 'h3, h4, h5',
        // Headings that match the ignoreSelector will be skipped.
        ignoreSelector: '.js-toc-ignore',
        // For headings inside relative or absolute positioned containers within content.
        hasInnerContainers: true,
        // Class to add to list items.
        listItemClass: 'p-side-navigation__item',
        // Main class to add to links.
        linkClass: 'p-side-navigation__link',
        // Class to add to active links,
        // the link corresponding to the top most heading on the page.
        activeLinkClass: 'is-active',
        // Main class to add to lists.
        listClass: 'p-side-navigation__list',
        // orderedList can be set to false to generate unordered lists (ul)
        // instead of ordered lists (ol)
        orderedList: false,
    });
</script>
