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

    <ul class="p-side-navigation__list">
      <li class="p-side-navigation__item--title">
        <a class="p-side-navigation__link" href="#">Machines</a>
      </li>
      <li class="p-side-navigation__item">
        <a class="p-side-navigation__link" href="#">Commission machines</a>
      </li>
      <li class="p-side-navigation__item">
        <span class="p-side-navigation__text">Testing</span>
        <ul class="p-side-navigation__list">
          <li class="p-side-navigation__item">
            <a class="p-side-navigation__link" href="#">Hardware testings</a>
          </li>
          <li class="p-side-navigation__item">
            <a class="p-side-navigation__link" href="#">Network testing</a>
          </li>
          <li class="p-side-navigation__item">
            <a class="p-side-navigation__link" aria-current="page" href="#">Commissioning and hardware testing scripts</a>
          </li>
        </ul>
      </li>
      <li class="p-side-navigation__item">
        <a class="p-side-navigation__link" href="#">Deploy machines</a>
      </li>
    </ul>
  </nav>
</div>
