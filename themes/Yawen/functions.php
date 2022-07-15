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

function get_multilevel_navigation( string $slug = '', bool $echo = true ): string
{
    if ( empty($slug) ) { $slug = get_page_slug(false); }

    $menudata = subval_sort(menu_data(), 'menu_priority');
    $navigation_html = '';

    foreach ( $menudata as $menuitem )
    {
        $menu_children_data = menu_children_data($menuitem['slug']);
        if ( count($menu_children_data) !== 0 )
        {
            if ( $menuitem['menu_status'] == 'Y' && $menuitem['private'] != 'Y' && $menuitem['parent_slug'] == '' )
            {
                $isselected = $menuitem['slug'] == $slug ? ' is-selected' : '';
                $navigation_html .= '<li class="p-navigation__item--dropdown-toggle" id="menu-item__' . $menuitem['slug'] . '">';
                $navigation_html .= '<a href="#menu-item-dropdown__' . $menuitem['slug'] . '" aria-controls="menu-item-dropdown__' . $menuitem['slug'] . '" class="p-navigation__link">'.$menuitem['menu_text'].'</a>';
                $navigation_html .= '<ul class="p-navigation__dropdown" id="menu-item-dropdown__' . $menuitem['slug'] . '" aria-hidden="true">';

                foreach ( $menu_children_data as $childitem )
                {
                    if ( $menuitem['menu_status'] == 'Y' && $menuitem['private'] != 'Y' )
                    {
                        $navigation_html .= '<li><a href="' . $childitem['url'] . '" class="p-navigation__dropdown-item">' . $childitem['menu_text'] . '</a></li>';
                    }
                }

                $navigation_html .= '</ul>';
            }
        }
        else
        {
            if ( $menuitem['menu_status'] == 'Y' && $menuitem['private'] != 'Y' && $menuitem['parent_slug'] == '' )
            {
                $isselected = $menuitem['slug'] == $slug ? ' is-selected' : '';
                $navigation_html .= '<li class="p-navigation__item' . $isselected . '">';
                $navigation_html .= '<a class="p-navigation__link" href="' . $menuitem['url'] . '">' . $menuitem['menu_text'] . '</a>';
                $navigation_html .= '</li>';
            }
        }
    }

    if ( $echo === true ) { echo $navigation_html; }
    return $navigation_html;
}

function menu_children_data( string $slug = '' ): array
{
    if ( empty($slug) ) { $slug = get_page_slug(false); }

    $menudata = menu_data();
    $menu_children_data = array();

    foreach ( $menudata as $menuitem )
    {
        if ( $menuitem['parent_slug'] == $slug )
        {
            $menu_children_data[] = $menuitem;
        }
    }

    return $menu_children_data;
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
        if ( $menuitem['slug'] == $current_page['parent_slug'] )
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
        if ( $menuitem['slug'] == $current_page['parent_slug'] )
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
