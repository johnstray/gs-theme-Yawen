<?php

function get_main_menu ( bool $echo = true ) : string
{
    $menudata = menu_data();
    $currentpage = menu_data(get_page_slug(false));
    $menustring = "";

    foreach ( $menudata as $menuitem ) {
        if ( $menuitem['parent_slug'] == "" && $menuitem['menu_status'] == "Y" && $menuitem['private'] != "Y" ) {
            $isselected = in_array($menuitem['slug'], [get_page_slug(false), $currentpage['parent_slug']]) ? " is-selected" : "";
            $menustring .= "<li class=\"p-navigation__item".$isselected."\"><a class=\"p-navigation__link\" href=\"".$menuitem['url']."\">".$menuitem['menu_text']."</a></li>";
        }
    }

    if ( $echo === true ) { echo $menustring; }
    return $menustring;
}

function get_page_menu( bool $echo = true ) : string
{
    $menudata = menu_data();
    $currentpage = menu_data(get_page_slug(false));
    $menustring = "";

    // Filter out the items we want first. Anything that has the same parent slug as the current page.
    foreach ( $menudata as $menuitem ) {
        if ( $menuitem['parent_slug'] == $currentpage['parent_slug'] || $menuitem['parent_slug'] == get_page_slug(false) ) {
            if ( $menuitem['menu_status'] == "Y" && $menuitem['private'] != "Y" && $menuitem['parent_slug'] != "" ) {
                $isselected = $menuitem['slug'] == get_page_slug(false) ? " is-selected" : "";
                $menustring .= "<li class=\"p-inline-list__item".$isselected."\"><a href=\"".$menuitem['url']."\">".$menuitem['menu_text']."</a></li>";
            }
        }
    }

    if ( $echo === true ) { echo $menustring; }
    return $menustring;
}

function get_section_title ( bool $menu = false, bool $echo = true ) : string
{
    $menudata = menu_data();
    $currentdata = menu_data(get_page_slug(false));
    $sectiontitle = "";

    if ( $currentdata['parent_slug'] != "" ) {
        foreach ( $menudata as $menuitem ) {
            if ( $menuitem['slug'] == $currentdata['parent_slug'] ) {

                $sectiontitle = $menu ? $menuitem['menu_text'] : $menuitem['title'];
            }
        }
    }

    if ( $sectiontitle == "" ) {
        $sectiontitle = $menu ? $currentdata['menu_text'] : get_page_title(false); }

    if ( $echo === true ) { echo $sectiontitle; }
    return $sectiontitle;
}

function page_is_sectioned () : bool
{
    # Determines if sectioned option is on
    //@TODO: Write this function and its plugin part
    return true;
}

function page_has_menu () : bool
{
    # Determins weather to show the page menu
    //@TODO: Write this funtion and its plugin part
    return true;
}

//@TODO: Utilise 'get_page_head_title' filter hook from GS 3.4
function get_head_title ( bool $echo = true ) : string
{
    $currentdata = menu_data(get_page_slug(false));
    $headtitle = get_page_clean_title();

    if ( page_is_sectioned() && $currentdata['title'] != get_section_title(false,false) ) {
        $headtitle .= " - " . get_section_title(false,false);
    }

    $headtitle .= " &raquo; " . get_site_name(false);

    if ( $echo === true ) { echo $headtitle; }
    return $headtitle;
}
    
