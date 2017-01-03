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
            <h1>
                Willkommen auf meinem Fotoblog!<br>
                Hier werde ich regelmäßig neue Bilder hochladen. Enjoy!
            </h1>
            <ul class="icons">
                <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="<?php echo base_url('contact'); ?>" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
        </header>
        <nav id="head-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Artikel</a>
                    <ul>
                        <li><a href="#">beliebteste Artikel</a></li>
                        <li><a href="#">letzte Artikel</a></li>
                        <li><a href="#">alle Artikel</a></li>
                    </ul>
                </li>
                <li><a href="#">Kategorien</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </nav>
