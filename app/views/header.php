<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset"<?php echo $this->config->item('charset'); ?>">
    <title><?php echo $this->config->item('title'); ?></title>

    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="<?php echo css_file_url('main'); ?>" type="text/css">
    
    <!-- Own Stylesheets -->
    <link rel="stylesheet" href="<?php echo css_file_url('extended'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo css_file_url('helper'); ?>" type="text/css">
</head>
<body>
    <div id="menu-point"><span onclick="openNav()">&#9776; Menu</span></div>
    <div id="wrapper">
        <nav id="sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li id="submenu1"><a href="#">Artikel</a>
                    <ul>
                        <li><a href="<?php echo base_url('article/latest'); ?>">letzte Artikel</a></li>
                        <li><a href="<?php echo base_url('article/all'); ?>">alle Artikel</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('category'); ?>">Kategorien</a></li>
                <li><a href="<?php echo base_url('article/show/aboutme'); ?>">About me</a></li>
                <li><a href="<?php echo base_url('contact'); ?>">Kontakt</a></li>
                <li><a href="<?php echo base_url('article/show/imprint'); ?>">Impressum</a></li>
            </ul>
        </nav>
        <div id="mainmain">
            <header id="header">
                <span class="avatar"><img src="<?php echo jpg_file_url('avatar'); ?>" alt="<?php echo $this->config->item('name'); ?>" /></span>
                <p>
                    Willkommen auf meinem Fotoblog!<br>
                    Hier werde ich regelmäßig neue Bilder hochladen. Enjoy!
                </p>
                <ul class="icons">
                    <li><a href="https://twitter.com/Chr1sVanTun" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/christoph.dahlitz" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/chris_van_tun/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="<?php echo base_url('contact'); ?>" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
            </header>
