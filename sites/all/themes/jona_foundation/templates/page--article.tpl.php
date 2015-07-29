
<div role="document" class="page">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
        <nav class="top-bar"<?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>
          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) :?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>
<?php if ($alt_header): ?>
    <section class="row <?php print $alt_header_classes; ?>">

      <?php if ($linked_logo): print $linked_logo; endif; ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name" class="element-invisible">
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
      <?php endif; ?>

      <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation" role="navigation">
          <?php print ($alt_main_menu); ?>
        </nav> <!-- /#main-menu -->
      <?php endif; ?>

      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav> <!-- /#secondary-menu -->
      <?php endif; ?>

    </section>
    <?php endif; ?>
    <div class="article">
      <div class='row'>
          <div class="small-12 large-centered small-centered columns front-content">
              <?php if ($title && !$is_front): ?>
                  <?php print render($title_prefix); ?>
                  <h1 id="page-title" class="title"><?php print $title; ?></h1>
                  <?php print render($title_suffix); ?>
              <?php endif; ?>

            <?php print render($page['content']);?>
            <?php// print render($page['sidebar_third']);?>
            <a href="#" class="subscribe-btn small-subscribe" data-reveal-id="myModal"><div class="subscribe">Subscribe!</div></a>


              <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h4>Subscribe and get notified of any new content. Ah go on. Ya will Ya will Ya will.</h4>
                <img class='doyle' src="sites/all/themes/jona_foundation/images/doyle-med.png">
                <?php print render($page['sidebar_second']);?>

                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
          </div>
      </div>
    </div>