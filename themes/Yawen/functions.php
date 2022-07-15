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
    $menudata = menu_data();
    $currentpage = menu_data(get_page_slug(false));
    $parent_title = '';
    
    if ( empty($slug) ) { $slug = get_page_slug(false); }
    
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
