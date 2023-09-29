<?php
// Variables
$dept_footer_name = get_theme_mod('ucla_footer_dept_name');
$dept_footer_address = get_theme_mod('ucla_footer_address');
$dept_footer_phone = get_theme_mod('ucla_footer_phone');
$dept_footer_email = get_theme_mod('ucla_footer_email');

// Social Media

$dept_footer_social = [
  [
    'company' => 'Facebook',
    'icon' => '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 10.0611C20 4.50451 15.5229 0 10 0C4.47715 0 0 4.50451 0 10.0611C0 15.0828 3.65684 19.2452 8.4375 20V12.9694H5.89844V10.0611H8.4375V7.84452C8.4375 5.32296 9.93047 3.93012 12.2146 3.93012C13.3088 3.93012 14.4531 4.12663 14.4531 4.12663V6.60261H13.1922C11.95 6.60261 11.5625 7.37822 11.5625 8.17387V10.0611H14.3359L13.8926 12.9694H11.5625V20C16.3432 19.2452 20 15.083 20 10.0611Z" /></svg>'
  ],
  [
    'company' => 'Twitter/X',
    'icon' => '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path
      d="M13.7124 10.6218L20.4133 3H18.8254L13.0071 9.61788L8.35992 3H3L10.0274 13.0074L3 21H4.58799L10.7324 14.0113L15.6401 21H21L13.7121 10.6218H13.7124ZM11.5375 13.0956L10.8255 12.0991L5.16017 4.16971H7.59922L12.1712 10.5689L12.8832 11.5655L18.8262 19.8835H16.3871L11.5375 13.096V13.0956Z"/></svg>'
  ],
  [
    'company' => 'Instagram',
    'icon' => '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.85848 0.0699389C4.79447 0.120139 4.06786 0.289939 3.43265 0.53954C2.77524 0.795741 2.21804 1.13954 1.66363 1.69594C1.10923 2.25235 0.767824 2.80995 0.513421 3.46835C0.267218 4.10495 0.100416 4.83215 0.0534157 5.89676C0.00641507 6.96136 -0.0039851 7.30356 0.00121448 10.0192C0.00641405 12.7348 0.0184141 13.0752 0.0700145 14.142C0.120815 15.2058 0.290016 15.9322 0.539619 16.5676C0.796221 17.225 1.13962 17.782 1.69623 18.3366C2.25284 18.8912 2.81004 19.2318 3.47005 19.4866C4.10605 19.7324 4.83346 19.9 5.89787 19.9466C6.96228 19.9932 7.30489 20.004 10.0197 19.9988C12.7345 19.9936 13.0763 19.9816 14.143 19.931C15.2096 19.8804 15.9322 19.71 16.5678 19.4616C17.2252 19.2044 17.7826 18.8616 18.3368 18.3048C18.891 17.748 19.2322 17.19 19.4864 16.5312C19.7328 15.8952 19.9002 15.1678 19.9464 14.1042C19.993 13.0368 20.004 12.696 19.9988 9.98078C19.9936 7.26557 19.9814 6.92517 19.9308 5.85876C19.8802 4.79236 19.7108 4.06816 19.4614 3.43235C19.2044 2.77495 18.8614 2.21835 18.305 1.66335C17.7486 1.10834 17.1902 0.767343 16.5316 0.513742C15.8952 0.267541 15.1682 0.0997406 14.1038 0.0537403C13.0393 0.00773992 12.6967 -0.00406018 9.98092 0.00113936C7.26509 0.0063389 6.92509 0.0179389 5.85848 0.0699389ZM5.97527 18.1476C5.00026 18.1052 4.47086 17.9432 4.11805 17.8076C3.65085 17.6276 3.31805 17.41 2.96644 17.0618C2.61484 16.7136 2.39884 16.3796 2.21644 15.9134C2.07943 15.5606 1.91443 15.0318 1.86883 14.0568C1.81923 13.003 1.80883 12.6866 1.80303 10.0168C1.79723 7.34696 1.80743 7.03096 1.85363 5.97676C1.89523 5.00256 2.05824 4.47255 2.19364 4.11995C2.37364 3.65215 2.59044 3.31995 2.93945 2.96855C3.28845 2.61715 3.62145 2.40075 4.08806 2.21835C4.44046 2.08075 4.96927 1.91715 5.94388 1.87075C6.99849 1.82075 7.31449 1.81075 9.98392 1.80495C12.6533 1.79915 12.9701 1.80915 14.0252 1.85555C14.9994 1.89795 15.5296 2.05935 15.8818 2.19555C16.3492 2.37555 16.6818 2.59175 17.0332 2.94135C17.3846 3.29095 17.6012 3.62275 17.7836 4.09036C17.9214 4.44176 18.085 4.97036 18.131 5.94556C18.1812 7.00017 18.1926 7.31637 18.1974 9.98558C18.2022 12.6548 18.1928 12.9718 18.1466 14.0256C18.104 15.0006 17.9424 15.5302 17.8066 15.8834C17.6266 16.3504 17.4096 16.6834 17.0604 17.0346C16.7112 17.3858 16.3786 17.6022 15.9118 17.7846C15.5598 17.922 15.0304 18.086 14.0566 18.1324C13.0019 18.182 12.6859 18.1924 10.0155 18.1982C7.34509 18.204 7.03008 18.1932 5.97547 18.1476M14.1276 4.65536C14.128 4.89271 14.1987 5.12462 14.3309 5.32175C14.4631 5.51887 14.6508 5.67237 14.8703 5.76282C15.0897 5.85326 15.3311 5.8766 15.5638 5.82988C15.7965 5.78316 16.0101 5.66847 16.1777 5.50033C16.3452 5.33219 16.4591 5.11814 16.505 4.88526C16.5508 4.65238 16.5266 4.41112 16.4354 4.19201C16.3441 3.9729 16.1899 3.78577 15.9923 3.65428C15.7947 3.5228 15.5625 3.45288 15.3252 3.45335C15.007 3.45399 14.7021 3.58097 14.4775 3.80638C14.2529 4.03179 14.127 4.33716 14.1276 4.65536ZM4.86546 10.01C4.87106 12.846 7.17429 15.1398 10.0097 15.1344C12.8451 15.129 15.1406 12.826 15.1352 9.98998C15.1298 7.15397 12.8259 4.85956 9.99012 4.86516C7.15429 4.87076 4.86006 7.17436 4.86546 10.01ZM6.66668 10.0064C6.66538 9.34709 6.85961 8.70222 7.2248 8.15332C7.59 7.60442 8.10976 7.17614 8.71837 6.92264C9.32697 6.66914 9.99708 6.6018 10.644 6.72914C11.2908 6.85648 11.8854 7.17278 12.3525 7.63804C12.8196 8.1033 13.1383 8.69663 13.2682 9.34299C13.3981 9.98935 13.3334 10.6597 13.0823 11.2693C12.8312 11.8789 12.405 12.4004 11.8576 12.7677C11.3101 13.1351 10.666 13.3319 10.0067 13.3332C9.56895 13.3341 9.13529 13.2488 8.7305 13.0821C8.32571 12.9154 7.95773 12.6706 7.64757 12.3616C7.33741 12.0527 7.09114 11.6857 6.92284 11.2816C6.75454 10.8775 6.6675 10.4441 6.66668 10.0064Z" /></svg>'
  ],
  [
    'company' => 'LinkedIn',
    'icon' => '<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5236 3.23877e-06L1.47639 2.5814e-07C0.661111 1.15592e-07 -1.15592e-07 0.661111 -2.5814e-07 1.47639L-3.23877e-06 18.5236C-3.38132e-06 19.3389 0.661108 20 1.47639 20L18.5236 20C19.3389 20 20 19.3389 20 18.5236L20 1.47639C20 0.661115 19.3389 3.38132e-06 18.5236 3.23877e-06ZM5.96111 17.0389L2.95416 17.0389L2.95417 7.48611L5.96111 7.48611L5.96111 17.0389ZM4.45833 6.16389C3.50139 6.16389 2.725 5.43472 2.725 4.4375C2.725 3.44028 3.50139 2.71111 4.45833 2.71111C5.41528 2.71111 6.19167 3.44028 6.19167 4.4375C6.19167 5.43472 5.41528 6.16389 4.45833 6.16389ZM17.0458 17.0458L14.0389 17.0458L14.0389 11.8292C14.0389 10.2903 13.3847 9.81528 12.5403 9.81528C11.6486 9.81528 10.7736 10.4861 10.7736 11.8681L10.7736 17.0472L7.76666 17.0472L7.76667 7.49306L10.6583 7.49306L10.6583 8.81667L10.6972 8.81667C10.9875 8.22917 12.0042 7.225 13.5556 7.225C15.2333 7.225 17.0458 8.22084 17.0458 11.1375L17.0458 17.0458Z" fill="white" /></svg>'
  ],
  [
    'company' => 'YouTube',
    'icon' => '<svg viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.8136 0.447582C18.6739 0.694356 19.3523 1.42016 19.5818 2.34194C20 4.01371 20 7.5 20 7.5C20 7.5 20 10.9875 19.5818 12.6581C19.3523 13.5798 18.6739 14.3056 17.8136 14.5524C16.2545 15 10 15 10 15C10 15 3.74659 15 2.18636 14.5524C1.32614 14.3056 0.647726 13.5798 0.418181 12.6581C0 10.9863 0 7.5 0 7.5C0 7.5 0 4.01371 0.418183 2.34193C0.647729 1.42016 1.32614 0.694353 2.18637 0.447579C3.74546 0 10 0 10 0C10 0 16.2545 0 17.8136 0.447582ZM13.1818 7.5L7.95454 10.6657L7.95455 4.33427L13.1818 7.5Z" /></svg>'
  ],
  [
    'company' => 'TikTok',
    'icon' => '<svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.4609 3.80844C13.4108 3.14097 12.6528 2.07347 12.4165 0.828944C12.3654 0.559927 12.3374 0.283295 12.3374 2.15713e-06L8.98579 1.57113e-06L8.98026 13.0911C8.92395 14.5571 7.68611 15.7337 6.16835 15.7337C5.69672 15.7337 5.25242 15.6189 4.86151 15.4181C3.96479 14.9581 3.35124 14.0419 3.35124 12.9877C3.35124 11.4735 4.61512 10.2417 6.16835 10.2417C6.45836 10.2417 6.73633 10.2883 6.99965 10.3686L6.99965 7.0338C6.72722 6.99763 6.45055 6.97511 6.16835 6.97511C2.76731 6.97542 -1.69121e-06 9.67258 -2.27084e-06 12.9877C-2.6265e-06 15.0218 1.04287 16.8218 2.63353 17.9103C3.63539 18.5958 4.85435 19 6.16868 19C9.57004 19 12.3374 16.3028 12.3374 12.9877L12.3374 6.34951C13.6517 7.26919 15.2622 7.81103 17 7.81103L17 4.54443C16.0639 4.54443 15.1919 4.27319 14.4609 3.80844Z" fill="white" /></svg>'
  ]
];
?>
<footer>
  <div class="ucla-dept-footer">
    <div class="ucla-dept-footer__container">
      <img class="ucla-dept-footer__logo" src="https://www.ucla.edu/img/logo-ucla.svg" alt="UCLA Logo" />
      <div class="ucla-dept-footer__body">
        <div class="ucla-dept-footer__info">
          <?php if ($dept_footer_name || $dept_footer_address || $dept_footer_phone || $dept_footer_email) { ?>
            <address class="ucla-dept-footer__info-address">
              <?php
              if ($dept_footer_name) :
                echo esc_html($dept_footer_name);
              endif;
              ?>
                <br />
              <?php
              if ($dept_footer_address) :
                echo nl2br(esc_html($dept_footer_address));
              endif;
              if ($dept_footer_phone) :
              ?>
                <br />
              <?php echo esc_html($dept_footer_phone);
              endif;
              if ($dept_footer_email) :
              ?>
                <br /><a href="mailto:<?= esc_html($dept_footer_email); ?>">
                  <?= esc_html($dept_footer_email); ?></a>
              <?php endif; ?>
            </address>
          <?php } ?>
          <?php
          $dept_social = false;
          $dept_social_html = '<ul class="ucla-social">';
          foreach ($dept_footer_social as $social) {
            $lowercase_social = strtolower($social['company']);
            $url = get_theme_mod('ucla_dept_' . $lowercase_social);
            if ($url === false || empty($url)) {
              continue;
            }
            $dept_social = true;
            $dept_social_html .= sprintf('<li class="ucla-social__item"><a class="ucla-social__link" href="%1$s"><span class="visuallyhidden">%2$s</span>%3$s</a></li>', $url, $social['company'], $social['icon']);
          }
          $dept_social_html .= '</ul>';
          if ($dept_social) {
            echo $dept_social_html;
          }
          ?>
        </div>
        <!-- Start Dept Footer Navigation -->
        <?php if (has_nav_menu('footer-menu')) { ?>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'depth' => 0,
            'container' => false,
            'menu_class' => 'ucla-dept-footer__tertiary-nav',
            'walker' => new Ucla_Wordpress_Footer_Navigation_Walker(),
            'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>'
          ));
          ?>
        <?php } ?>
        <!-- End Dept Footer Navigation -->
      </div>
    </div>
  </div>
</footer>