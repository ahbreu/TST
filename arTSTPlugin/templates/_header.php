<?php echo get_component('default', 'updateCheck') ?>

<?php echo get_component('default', 'privacyMessage') ?>

<?php if ($sf_user->isAdministrator() && (string)QubitSetting::getByName('siteBaseUrl') === ''): ?>
  <div class="site-warning">
    <?php echo link_to(__('Please configure your site base URL'), 'settings/siteInformation', array('rel' => 'home', 'title' => __('Home'))) ?>
  </div>
<?php endif; ?>


  <div id="top-bar">
        <div class="logo-header">
            <a href="http://tst.jus.br/web/cgedm/memoria-viva/labor-arq"><img src="/plugins/arTSTPlugin/images/jdt.png" alt="jdt"></a>
         </div>
    <nav>
      <?php echo get_component('menu', 'userMenu') ?>
      <?php echo get_component('menu', 'quickLinksMenu') ?>
      <?php if (sfConfig::get('app_toggleLanguageMenu')): ?>
        <?php echo get_component('menu', 'changeLanguageMenu') ?>
      <?php endif; ?>
      <?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
    </nav>

    <div id="header-search" class="span6">

          <?php echo get_component('search', 'box') ?>

          <?php echo get_component('menu', 'clipboardMenu') ?>
          </div>


    </div>

<div id="header">
