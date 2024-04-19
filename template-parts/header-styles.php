<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 112px;
}
.u-header .u-image-1 {
  width: 131px;
  height: 131px;
  margin: 0 auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -91px 0 36px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  font-weight: 700;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    width: 131px;
    height: 131px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -91px;
    margin-right: 0;
  }
  .u-header .u-nav-1 {
    letter-spacing: normal;
  }
}</style>
