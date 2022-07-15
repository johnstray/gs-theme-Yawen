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

?><section class="p-strip">
                    <div class="row">
                        <div class="col-4 u-align--right">
                            <?php // @TODO: Get this from page custom fields ?>
                            <img src="http://get-simple.info/data/uploads/getsimple-logo-2.png" />
                        </div>
                        <div class="col-8 u-vertically-center">
                            <div class="page-title">
                                <h2 style="margin-bottom: 0">
                                    <?php
                                        if ( function_exists('get_page_custom_field') ) {
                                            $parentTitleType = get_page_custom_field('parent-title');
                                            if ( $parentTitleType == 'parent' ) {
                                                get_page_parent_title();
                                            } else { get_page_title(); }
                                        } else { get_page_title(); }
                                    ?>
                                </h2>
                                <?php if ( function_exists('get_page_title_long') && get_page_title_long(false) != "" ) {  ?>
                                    <p style="margin-bottom:0;padding-top:0"><?php get_page_title_long(); ?></p>
                                <?php } if ( function_exists('get_page_summary') && get_page_summary(false) != "" ) { ?>
                                    <p class="p-muted-heading" style="padding-top:0.75rem;"><?php get_page_summary(); ?></p>
                                <?php } else { ?>
                                    <!-- Long page title + Page summary are only supported on GetSimple CMS v3.4+
                                         We'll use get_page_meta_desc() here instead' -->
                                    <p class="p-muted-heading" style="padding-top:0.75rem;"><?php get_page_meta_desc(); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
                
                <?php
                    if ( function_exists('get_page_custom_field') ) {
                        $secondNavType = get_page_custom_field('second-nav');
                        if ( empty($secondNavType) === false ) {
                ?>
                
                    <section class="row" style="border-bottom:#d9d9d9 solid 1px">
                        <div class="col-12 u-align--center">
                            <ul class="p-inline-list--middot u-align-center">
                                <?php get_secondary_nav( $secondNavType, true ); ?>
                            </ul>
                        </div>
                    </section>
                    
                <?php } } ?>
