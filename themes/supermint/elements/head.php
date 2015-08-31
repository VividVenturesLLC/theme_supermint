<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$c = Page::getCurrentPage();
// Les options
$o = \Concrete\Package\ThemeSupermint\Src\Models\ThemeSupermintOptions::get();

// $p = \Concrete\Core\Package\Package::getByHandle('theme_supermint');
// $ci = new \Concrete\Package\ThemeSupermint\Src\Helper\SupermintInstaller($p);
// $ci->importContentFile($p->getPackagePath() . '/config/install/base/attributes.xml');	

?>
<!DOCTYPE html>
<html>
<head>
<?php echo $html->css($view->getStylesheet('main.less')); ?>
<!-- Start Concrete Header -->
<?php Loader::element('header_required'); ?>
<!-- End Concrete Header -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php echo URL::to("/ThemeSupermint/tools/override.css") . '?cID=' . $c->cID ?>" id="css-override" type="text/css" />
<link rel="stylesheet" href="<?php echo Concrete\Package\ThemeSupermint\Controller\Tools\FontsTools::getFontsURL() ?>" id="css-fonts" type="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<?php if($o->responsive) : ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php endif ?>
<!-- Theme Supermint V<?php echo Package::getByHandle('theme_supermint')->getPackageVersion() ?> // Theme preset ID : <?php echo $o->pID ?> -->
</head>
<body id="supermint"  class="supermint <?php if ($c->isEditMode()) : ?>edit-mode<?php  endif ?>" <?php if ($c->isEditMode()) : ?>style="margin:0 !important;"<?php  endif ?>>
    <!-- Responsive Nav -->
    <div class="small-display-nav-bar">
        <?php 
        $a = new GlobalArea('Responsive Navigation');
        $a->display();
        ?>    
    </div>
    <!-- End Responsive Nav -->
	<div class="<?php echo $c->getPageWrapperClass()?> <?php echo $c->getAttribute('layout_mode') != 'default' ? $c->getAttribute('layout_mode') : $o->layout_mode ?> <?php  echo $o->navigation_style == 'lateral-regular' ? 'with-lateral-nav' : '' ?>">