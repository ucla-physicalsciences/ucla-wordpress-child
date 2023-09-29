<header class="ucla-header ucla-header--college">
  <div class="ucla-header__logo-container">
    <div class="ucla-header__logo">
      <a href="https://www.ucla.edu/">
        <img class="ucla-header__logo-image" src="https://www.ucla.edu/img/logo-ucla.svg" alt="UCLA Logo" />
      </a>
    </div>
  </div>
  <div class="ucla-header__container" id="header-wrap">
    <div class="ucla-header__site-name">
      <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
    </div>
    <?php if (has_nav_menu('secondary-menu')) { ?>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'secondary-menu',
        'container' => 'nav',
        'container_class' => 'ucla-secondary-nav',
        'container_id' => 'nav-second',
        'container_aria_label' => 'Secondary Menu',
        'depth' => 0,
        'menu_class' => 'ucla-secondary-nav__list',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'walker' => new Ucla_Wordpress_Secondary_Navigation_Walker()
      ));
      ?>
    <?php } ?>
    <button id="primary-ham" class="hamburger" type="button" aria-controls="nav-main" aria-expanded="false" alt="navigation and search">
      <span class="hamburger__box">
        <span class="hamburger__inner"></span>
      </span>
    </button>
    <nav aria-labelledby="primary-ham" id="nav-main" class="ucla-main-nav" aria-label="Main Menu">
      <?php if (has_nav_menu('main-menu')) { ?>
        <ul class="ucla-main-nav__list" role="menubar" data-menubar-item-expanded="true">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'depth' => 4,
            // 'menu_class' => 'nav-primary__list',
            'items_wrap' => '%3$s',
            'walker' => new Ucla_Wordpress_Primary_Navigation_Walker()
          ));
          ?>
        </ul>
        <?php if (has_nav_menu('secondary-menu')) {
          wp_nav_menu(array(
            'theme_location' => 'secondary-menu',
            'container' => false,
            'depth' => 1,
            'menu_class' => 'ucla-secondary-nav__list',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker' => new Ucla_Wordpress_Secondary_Navigation_Walker()
          ));
        } ?>
      <?php } ?>
      <div class="ucla-main-nav__search-desktop" id="primary-nav-search">
        <button id="search-button" aria-expanded="false" class="ucla-main-nav__search-desktop-button">
          <svg role="img" aria-label="Search Icon" class="ucla-main-nav__search-icon" width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Search Icon</title>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-15.000000, -15.000000)">
                <g id="Nav-Item">
                  <g transform="translate(12.000000, 12.000000)">
                    <polygon class="Path-polygon" points="0 0 24 0 24 24 0 24"></polygon>
                    <path d="M15.5,14 L14.71,14 L14.43,13.73 C15.41,12.59 16,11.11 16,9.5 C16,5.91 13.09,3 9.5,3 C5.91,3 3,5.91 3,9.5 C3,13.09 5.91,16 9.5,16 C11.11,16 12.59,15.41 13.73,14.43 L14,14.71 L14,15.5 L19,20.49 L20.49,19 L15.5,14 Z M9.5,14 C7.01,14 5,11.99 5,9.5 C5,7.01 7.01,5 9.5,5 C11.99,5 14,7.01 14,9.5 C14,11.99 11.99,14 9.5,14 Z" fill="#00598C" fill-rule="evenodd"></path>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <svg class="ucla-main-nav__search-close" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" xml:space="preserve" viewBox="10 10 28 28">
            <title>Close</title>
            <path d="M38 12.8 35.2 10 24 21.2 12.8 10 10 12.8 21.2 24 10 35.2l2.8 2.8L24 26.8 35.2 38l2.8-2.8L26.8 24 38 12.8z" fill="#ffffff" fill-rule="evenodd"></path>
          </svg>
        </button>
        <div class="ucla-main-nav__search-block-form" id="block-search" role="search">
          <?php get_search_form() ?>
        </div>
      </div>
    </nav>
  </div>
</header>