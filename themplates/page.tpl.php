<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php print $front_page; ?>">Home</a></li>
                <li><a href="<?php print base_path() ?>lingerie-dames"
                       class="<?php echo strpos($_SERVER['REQUEST_URI'], (base_path() . 'lingerie-dames')) !== false ? 'active' : '' ?>">Dames
                        lingerie</a></li>
                <li><a href="<?php print base_path() ?>ondergoed-heren"
                       class="<?php echo strpos($_SERVER['REQUEST_URI'], (base_path() . 'ondergoed-heren')) !== false ? 'active' : '' ?>">Heren
                        ondergoed</a></li>
                <li><a href="<?php print base_path() ?>badmode"
                       class="<?php echo strpos($_SERVER['REQUEST_URI'], (base_path() . 'badmode')) !== false ? 'active' : '' ?>">Badmode</a>
                </li>
                <li><a href="<?php print base_path() ?>nachtmode"
                       class="<?php echo strpos($_SERVER['REQUEST_URI'], (base_path() . 'nachtmode')) !== false ? 'active' : '' ?>">Nachtmode</a>
                </li>
                <li><a href="<?php print base_path() ?>winkels"
                       class="<?php echo strpos($_SERVER['REQUEST_URI'], (base_path() . 'winkels')) !== false ? 'active' : '' ?>">Openingsuren</a>
                </li>
                <li><a href="<?php print base_path() ?>merken"
                       class="<?php echo strpos($_SERVER['REQUEST_URI'], (base_path() . 'merken')) !== false ? 'active' : '' ?>">Merken</a>
                </li>
                <li>
                    <a href="https://www.bugattis-shop.be/" target="_blank">Onze webshop</a>
                </li>
                <li><a href="<?php print base_path() ?>contact"
                       class="<?php echo strpos($_SERVER['REQUEST_URI'], (base_path() . 'contact')) !== false ? 'active' : '' ?>">Contact</a>
                </li>
                <li><?php global $user;
                  if ($user->uid != 0) {
                    print '<li class="first">' . t('') .
                      '<a href="' . url('user/' . $user->uid) . '">' . $user->name . '</a>
                        </li>';
                    print '<li>
                        <a href="' . url('admin/dashboard') . '">' . t('Dashboard') . '</a>
                        </li>';
                  } else {
                    print '<li class="first">
                        <a href="' . url('user') . '">' . t('') . '</a>
                        </li>';
                  } ?>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<div class="container">
    <header class="row">
        <div class="col-md-6" id="logo">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Bugattis lingerie'); ?>"/>
            </a>
        </div>
      <?php
      /**
       * Quotes random getoond
       */
      if ($page['quotes']): ?>
          <div class="col-md-4">
              <div class="quotes">
                <?php print render($page['quotes']); ?>
              </div>

              <div class="webshop-url">
                  <a href="https://www.bugattis-shop.be/">Onze webshop</a>
              </div>
          </div>
      <?php endif; ?>
    </header>
    <div class="col-md-10" id="content_wrap">

      
      <?php if ($page['banner']): ?> <!-- zou nog de img-responsive class moeten meekrijgen -->
          <div class="col-md-12 clearfix" id="banner">
            <?php print render($page['banner']); ?>
          </div>
      <?php endif; ?>


        <div class="col-md-12">
          <?php if ($page['news']): ?>
              <div id="news"><!-- de image hier zou nog de img-responsive class moeten meekrijgen -->
                <?php print render($page['news']); ?>
              </div><!-- end news -->
          <?php endif; ?>
        </div>

        
        <div class="col-md-12">
            <div class="content">
              <?php // print $breadcrumb; ?>
                <a id="main-content"></a>
              <?php if ($tabs): ?>
                <div id="tabs-wrapper" class="clearfix"><?php endif; ?>
                  <?php print render($title_prefix); ?>
                  <?php if ($title): ?>
                      <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
                  <?php endif; ?>
                  <?php print render($title_suffix); ?>
                  <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
              <?php print render($tabs2); ?>
              <?php print $messages; ?>
              <?php print render($page['help']); ?>
              <?php if ($action_links): ?>
                  <ul class="action-links">
                    <?php print render($action_links); ?>
                  </ul>
              <?php endif; ?>
                <div class="clearfix">
                  <?php print render($page['content']); ?>
                </div>
            </div>
            <!-- end content -->
        </div>
        <div class="col-md-12" id="footer_wrap">
            <div class="row">
                <div class="col-md-6">
                    <div id="footer_left">
                        <div class="row">
                            <div class="col-md-10 footer_title">
                                <h3>Winkel Balen</h3>
                                Kerkstraat 52 - 2490 Balen
                                <div class="tel">
                                    <label>Telefoon:</label>
                                    <a href="tel:+3214709480">
                                        <span class="lg-tel">014/709480</span>
                                        <span class="mobile-telB">Bel ons</span>
                                    </a>
                                </div>
                                <!-- end tel -->
                                <a href="https://www.bugattis-shop.be/">Onze webshop</a>
                            </div>
                            <!-- end footer title -->
                            <div class="col-md-1 col-md-offset-1 icons">
                                <a href="https://www.facebook.com/BugattisBalen" target="_blank">
                                    <img
                                            src="<?php print base_path() . path_to_theme(); ?>/images/facebook_icon-min.jpg"
                                            title="Facebook Balen">
                                </a>
                                <a href="https://maps.google.be/maps?q=Kerkstraat+52+-+2490+Balen&hl=nl&sll=51.061045,5.232885&sspn=0.159889,0.41851&hnear=Kerkstraat+52,+Balen+2490+Balen&t=m&z=16"
                                   target="_blank">
                                    <img
                                            src="<?php print base_path() . path_to_theme(); ?>/images/google_maps_icon.jpg">
                                </a>
                            </div>
                            <!-- end icons -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end footer_left -->
                </div>
                <div class="col-md-6">
                    <div id="footer_right">
                        <div class="row">
                            <div class="col-md-10 footer_title">
                                <h3>Winkel Hofstade</h3>
                                Tervuursesteenweg 358 - 1981 Hofstade-Zemst
                                <div class="tel">
                                    <label>Telefoon:</label>
                                    <a href="tel:+3215620896">
                                        <span class="lg-tel">015/620896</span>
                                        <span class="mobile-telH">Bel ons</span>
                                    </a>
                                </div>
                                <!-- end tel -->
                                <a href="https://www.google.com/maps/place/Bugattis/@50.988419,4.495708,2a,90y,90t/data=!3m5!1e2!3m3!1shttps:%2F%2Flh4.googleusercontent.com%2F-BpEaOLGCKZM%2FUw-lbQQ_iGI%2FAAAAAAAJr8Y%2FxUDftjYbq0E%2Fs203%2Fphoto.jpg!2e4!3e12!4m2!3m1!1s0x0:0xac76d6f458119e5f!6m1!1e1?hl=nl" target="_blank">Klik hier om de winkel te verkennen</a>
                                
                            </div>
                            <!-- end footer_title -->
                            <div class="col-md-1 col-md-offset-1 icons">
                                <a href="https://www.facebook.com/BugattisBodyBeachHofstade" target="_blank">
                                    <img
                                            src="<?php print base_path() . path_to_theme(); ?>/images/facebook_icon-min.jpg"
                                            title="Facebook Hofstade">
                                </a>
                                <a href="https://maps.google.be/maps?q=Tervuursesteenweg+358+-+1981+Hofstade-Zemst+&hl=nl&sll=51.174432,5.171127&sspn=0.009969,0.026157&hnear=Tervuursesteenweg+358,+Hofstade+1981+Zemst&t=m&z=16"
                                   target="_blank">
                                    <img
                                            src="<?php print base_path() . path_to_theme(); ?>/images/google_maps_icon.jpg">
                                </a>
                            </div>
                            <!-- end icons -->
                        </div>
                        <!-- row row -->
                    </div>
                    <!-- end footer_right -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end footer_wrap -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8 copyright">
                    &copy; 2015 - <a href="<?php print base_path() ?>user">Bugattis</a> -
                    <a href="<?php print base_path() ?>cookies">Gebruik van cookies</a>
                </div>
                <!-- copyright -->
                <div class="col-md-4">
                    <a href="<?php print base_path() ?>nieuwsbrief">Inschrijven op onze nieuwsbrief</a>
                </div>
            </div>
        </div>

    </div>
    <!-- end content_wrap -->
</div>
<!-- end container -->
