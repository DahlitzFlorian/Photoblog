<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset"<?php echo $this->config->item('charset'); ?>">
    <title><?php echo $this->config->item('title'); ?></title>

    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="<?php echo css_file_url('main'); ?>" type="text/css">
</head>
<body>
    <div id="wrapper">
		<header id="header">
			<span class="avatar"><img src="<?php echo jpg_file_url('avatar'); ?>" alt="<?php echo $this->config->item('name'); ?>" /></span>
			<h1><?php echo nl2br($start_text->text); ?></h1>
			<ul class="icons">
				<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
		</header>
		<section id="main">
			<section class="thumbnails">
				<div>
					<a href="images/fulls/01.jpg">
						<img src="images/thumbs/01.jpg" alt="" />
						<h3>Lorem ipsum dolor sit amet</h3>
					</a>
					<a href="images/fulls/02.jpg">
						<img src="images/thumbs/02.jpg" alt="" />
						<h3>Lorem ipsum dolor sit amet</h3>
					</a>
				</div>
				<div>
					<a href="images/fulls/03.jpg">
						<img src="images/thumbs/03.jpg" alt="" />
						<h3>Lorem ipsum dolor sit amet</h3>
					</a>
					<a href="images/fulls/04.jpg">
						<img src="images/thumbs/04.jpg" alt="" />
						<h3>Lorem ipsum dolor sit amet</h3>
					</a>
					<a href="images/fulls/05.jpg">
						<img src="images/thumbs/05.jpg" alt="" />
						<h3>Lorem ipsum dolor sit amet</h3>
					</a>
				</div>
				<div>
					<a href="images/fulls/06.jpg">
						<img src="images/thumbs/06.jpg" alt="" />
						<h3>Lorem ipsum dolor sit amet</h3>
					</a>
					<a href="images/fulls/07.jpg">
						<img src="images/thumbs/07.jpg" alt="" />
						<h3>Lorem ipsum dolor sit amet</h3>
					</a>
				</div>
			</section>
		</section>
    	<footer id="footer">
			<p>&copy; <?php echo $this->config->item('name'); ?>. Alle Rechte vorbehalten. Design: <a href="http://templated.co">TEMPLATED</a>.</p>
		</footer>
	</div>

    <!-- Other Scripts -->
	<script src="<?php echo js_file_url('jquery.min'); ?>"></script>
    <script src="<?php echo js_file_url('jquery.poptrox.min'); ?>"></script>
	<script src="<?php echo js_file_url('skel.min'); ?>"></script>
	<script src="<?php echo js_file_url('main'); ?>"></script>
