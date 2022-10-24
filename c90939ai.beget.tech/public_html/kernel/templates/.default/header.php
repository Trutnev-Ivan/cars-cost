<?php
$asset = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<? $APPLICATION->showTitle() ?>
	<meta charset="UTF-8">

	<?php $asset->addCss($SITE_TEMPLATE_PATH . "/css/bootstrap.css"); ?>
	<?php $asset->addCss($SITE_TEMPLATE_PATH . "/css/bootstrap.rtl.css"); ?>
	<?php $asset->addCss($SITE_TEMPLATE_PATH . "/css/bootstrap-grid.css"); ?>
	<?php $asset->addCss($SITE_TEMPLATE_PATH . "/css/bootstrap-grid.css"); ?>
	<?php $asset->addCss($SITE_TEMPLATE_PATH . "/css/bootstrap-reboot.css"); ?>
	<?php $asset->addCss($SITE_TEMPLATE_PATH . "/css/bootstrap-utilities.css"); ?>
	<?php $asset->addCss($SITE_TEMPLATE_PATH . "/css/template_style.css"); ?>

	<?php $asset->addJs($SITE_TEMPLATE_PATH . "/js/jquery.js"); ?>
	<?php $asset->addJs($SITE_TEMPLATE_PATH . "/js/bootstrap.js"); ?>
	<?php $asset->addJs($SITE_TEMPLATE_PATH . "/js/popper.min.js"); ?>
	<?php $asset->addJs($SITE_TEMPLATE_PATH . "/js/bootstrap.bundle.js"); ?>

</head>
<body>

<div class="row">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="navbar-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
			</ul>
		</div>
	</nav>
