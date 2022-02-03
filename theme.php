<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
	</head>
	
	<body>
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

		<div id="kitt-page">
			<div id="kitt-topbar">
			</div><!-- kitt-topbar -->
			<header id="kitt-header">
				<hgroup>
					<h1>Header</h1>
					<h2>Subheader</h2>
				</hgroup>
			</header><!-- kitt-header -->
			<nav id="kitt-nav">
				<ul class="menu"><?= $Wcms->menu() ?></ul>
			</nav><!-- kitt-nav -->
			<main id="kitt-main">
				<article class="kitt-article">
					<!-- <header>
						<h1>Article #1</h1>
					</header>
					<section>
						This is the first article.
					</section> -->
					<?= $Wcms->page('content') ?><!-- Main content for each page -->
				</article><!-- kitt-article -->
				<!-- <article>
					<header><h1>Article #2</h1></header>
					<section>This is the second article.</section>
				</article> -->



				<div class="kitt-block"></div><!-- kitt-block -->
			</main><!-- kitt-main -->
			<aside id="kitt-sidebar">
				<!-- <section>
					<h1>Links</h1>
					<ul>
						<li><a href="#">Link 1</a></li>
						<li><a href="#">Link 2</a></li>
					</ul>
				</section>
				<figure>
					<img width="85" height="85" src="http://domain.tld/path/to/image.jpg" alt="foobar" />
					<figcaption>Foobar</figcaption>
				</figure> -->
				<?= $Wcms->block('subside') ?><!-- Static editable block, same on each page -->
			</aside>
			<footer id="kitt-footer">
				<?= $Wcms->footer() ?>
				<div id="kitt-bottombar">
					<div id="kitt-copyright"></div><!-- kitt-copyright -->
				</div><!-- kitt-bottombar -->
			</footer><!-- kitt-footer -->
		</div><!-- kitt-page -->

		<!-- Admin JavaScript. More JS libraries can be added below -->
		<?= $Wcms->js() ?>

	</body>
</html>