<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>

<!-- First Top Bar Region -->

    <?php if (!empty($page['FirstTop_Bar'])): ?>

      <div id="Firstnavbar">
        <?php print render($page['FirstTop_Bar']); ?>

      </div >

    <?php endif; ?>

<!-- Enoding of  First Top Bar Region -->

<!-- Second Top Bar Code  -->


<div class="row"  id="secondnavbar">

 <!-- site logo bootstrap colums  -->
  <div class="col-md-4">

      <div id="sitelogo">
          <?php if ($logo): ?>
              <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </br>
                <span class="logo-slogan">Smarter Shopping, Better Living!</span>
              </a>

            <?php endif; ?>
       </div>
  </div>   <!-- ending site logo bootstrap colums  -->


  <div class="col-md-3">
     <!--SearchBar Region Starts Here -->
       <?php if (!empty($page['SecondTop_Bar_Search'])): ?>

      <div id="SearchBarController">
        <?php print render($page['SecondTop_Bar_Search']); ?>

      </div >

    <?php endif; ?>

     <!-- Ending of Search Bar Region  -->

  </div>


  <div class="col-md-4">

  <!--Starting of menu Bar links Cart ,Wishlist , myaccount , Logout etc-->


  <?php if (!empty($page['SecondTop_Bar_Links'])): ?>
  <div id="barlinks">

  <?php print render($page['SecondTop_Bar_Links']); ?>


</div>  <!-- Barlinks id Ending  -->
  <?php endif; ?>



</div>   <!--Ending of menu Bar links Cart ,Wishlist , myaccount , Logout etc-->

</div>

<!--Ending of  Second Top Bar Code  -->


  <!--Third Header containing deals and Categories -->

<div class="row" id="ThirdHeader">
  <div class="col-md-3">
    <div id="categories">
    CATEGOREIS <span> <a href="#">See All > </a></span>
    </div>
  </div>
  <div class="col-md-9">
  <?php if (!empty($page['ThirdTop_Bar_Deals'])): ?>

      <div id="ThirdTopBarDeals">
        <?php print render($page['ThirdTop_Bar_Deals']); ?>

      </div >

    <?php endif; ?>

  </div>
</div>

 <!-- Ending of Third Header containing deals and Categories -->


  <!--Taxonomy Mega Menu(primary region ) , Slider1 (Highlighted)
  ,Slider2 (Secondary region)  -->

  <div class="row">
    <!--taxonomy Mega Menu (primary Region ) -->
  <div class="col-xs-6 col-md-3" >
     <?php if (!empty($page['sidebar_first'])): ?>
      <aside  role="complementary" id="Sidebarstyling">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

  </div>
    <!-- Ending of taxonomy Mega Menu (primary Region ) -->

    <!-- Starting of Highlited Region (Main Slider) -->
  <div class="col-xs-6 col-md-5" id="highlitedslider">
    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>

  </div>
      <!-- Ending of Highlited Region (Main Slider) -->


<!-- Starting of SecondarySide bar  Region (Secondary Slider) -->
  <div class="col-xs-6 col-md-4" id="seondarysidebar" >

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside  role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
<!-- Ending of SecondarySide bar  Region (Secondary Slider) -->


</div>


















<!-- Themes Default header Structure commented  Starting  -->

<!--
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

  </div>
</header> -->


<!-- Themes Default header Structure commented Ending ...  -->

<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

  <?php print $messages; ?>


<!--
    <section<?php print $content_column_class; ?>>

      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>
 -->

  </div>
</div>

<!--Footer First-->

<?php if (!empty($page['footer'])): ?>
  <footer  id="footer1">
    <div class="container">
    <?php print render($page['footer']); ?>
  </div>
  </footer>
<?php endif; ?>

<!--Footer First End-->

<!--Footer Second-->
<div class="row " id="footer2">

  <div class="col-sm-4">
  <?php if (!empty($page['footer_second_subscription'])): ?>
  <footer   >
    <div class="">
    <?php print render($page['footer_second_subscription']); ?>
 </div>
  </footer>
<?php endif; ?>

 </div>


  <div class="col-sm-8">
<?php if (!empty($page['footer_second'])): ?>
  <footer   >
    <div class="">
    <?php print render($page['footer_second']); ?>
 </div>
  </footer>
<?php endif; ?>
</div>


</div>

<!--Footer Second End-->


<!-- Third footer-->

  <div class="row padding-bottom">
<?php if (!empty($page['footer_third'])): ?>
<div class="col-md-6 pull-left">
  <footer class="containerleft">
    <div id="footerThird">
    <?php print render($page['footer_third']); ?>
    </div>
  </footer>
</div>
<?php endif; ?>

<?php if (!empty($page['footer_third_rightside'])): ?>
<div class="col-md-6 pull-right">
  <footer class="containerright">
    <div id="footerThird">
    <?php print render($page['footer_third_rightside']); ?>
    </div>
  </footer>
</div>
<?php endif; ?>

  </div>

<!-- Fotter NO 4 Starting -->


<?php if (!empty($page['footer_fourth'])): ?>
  <footer>
  <?php print render($page['footer_fourth']); ?>
  </footer>

<?php endif; ?>










