<?php

function get_secondary_nav( string $type = 'siblings', bool $echo = true ): string
{
    $menudata = menu_data();
    $currentpage = menu_data(get_page_slug(false));
    $menustring = '';

    switch ($type) {
        case 'children':
            foreach ( $menudata as $menuitem )
            {
                if ( $menuitem['parent_slug'] == $currentpage['slug'] )
                {
                    if ( $menuitem['menu_status'] == 'Y' && $menuitem['private'] != 'Y' )
                    {
                        $isactive = $menuitem['slug'] == get_page_slug(false) ? ' is-active' : '';
                        $menustring .= '<li class="p-inline-list__item' . $isactive . '"><a href="' . $menuitem['url'] . '">' . $menuitem['menu_text'] . '</a></li>';
                    }
                }
            }
            break;
            
        case 'siblings':
            foreach ( $menudata as $menuitem )
            {
                if ( $menuitem['parent_slug'] == $currentpage['parent_slug'] )
                {
                    if ( $menuitem['menu_status'] == 'Y' && $menuitem['private'] != 'Y' )
                    {
                        $isactive = $menuitem['slug'] == get_page_slug(false) ? ' is-active' : '';
                        $menustring .= '<li class="p-inline-list__item' . $isactive . '"><a href="' . $menuitem['url'] . '">' . $menuitem['menu_text'] . '</a></li>';
                    }
                }
            }
            break;
            
        case 'parents':
            foreach ( $menudata as $menuitem )
            {
                if ( $menuitem['slug'] == $currentpage['parent_slug'] )
                {
                    if ( $menuitem['menu_status'] == 'Y' && $menuitem['private'] != 'Y' )
                    {
                        $isactive = $menuitem['slug'] == get_page_slug(false) ? ' is-active' : '';
                        $menustring .= '<li class="p-inline-list__item' . $isactive . '"><a href="' . $menuitem['url'] . '">' . $menuitem['menu_text'] . '</a></li>';
                    }
                }
            }
            break;
            
        default:
            // Nothing to do here
    }

    if ( $echo === true ) { echo $menustring; }
    return $menustring;
}

function get_page_parent_title( string $slug = '', bool $echo = true ): string
{
    if ( empty($slug) ) { $slug = get_page_slug(false); }

    $menudata = menu_data();
    $currentpage = menu_data($slug);
    $parent_title = '';
    
    foreach ( $menudata as $menuitem )
    {
        if ( $menuitem['slug'] == $currentpage['parent_slug'] )
        {
            $parent_title = $menuitem['title'];
            break;
        }
    }
    
    if ( $echo === true ) { echo $parent_title; }
    return $parent_title;
}

function get_page_parent_title_long( string $slug = '', bool $echo = true ): string
{
    if ( empty($slug) ) { $slug = get_page_slug(false); }

    $menudata = menu_data();
    $currentpage = menu_data($slug);
    $parent_long_title = '';

    foreach ( $menudata as $menuitem )
    {
        if $menuitem['slug'] == $current_page['parent_slug'] )
        {
            if ( isset($menuitem['titlelong']) )
            {
                $parent_long_title = $menuitem['titlelong'];
                break;
            }
        }
    }

    if ( $echo === true ) { echo $parent_long_title; }
    return $parent_long_title;
}

function get_page_parent_summary( string $slug = '', bool $echo = true ): string
{
    if ( empty($slug) ) { $slug = get_page_slug(false); }

    $menudata = menu_data();
    $currentpage = menu_data($slug);
    $parent_summary = '';

    foreach ( $menudata as $menuitem )
    {
        if $menuitem['slug'] == $current_page['parent_slug'] )
        {
            if ( isset($menuitem['summary']) )
            {
                $parent_summary = $menuitem['summary'];
                break;
            }
            elseif ( isset($menuitem['metad']) )
            {
                $parent_summary = $menuitem['summary'];
                break;
            }
        }
    }

    if ( $echo === true ) { echo $parent_long_title; }
    return $parent_long_title;
}
