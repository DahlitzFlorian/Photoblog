<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="<?php echo $this->config->item('charset'); ?>">
    
    <title><?php echo $title; ?></title>
    
    <!-- Own Stylesheets -->
    <link rel="stylesheet" href="<?php echo css_file_url('admin/reset'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo css_file_url('admin/main'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo css_file_url('helper'); ?>" type="text/css">
</head>
<body>
    <div id="wrapper">
        <nav class="side-nav">
            <span>VD-Admin</span>
            <ul>
                <li><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
                <li><a href="<?php echo base_url('admin/user'); ?>">Nutzer</a></li>
                <li><a href="<?php echo base_url('admin/page'); ?>">Artikel</a></li>
                <li><a href="<?php echo base_url('admin/category'); ?>">Kategorien</a></li>
                <li><a href="<?php echo base_url('admin/todo'); ?>">Todo-Liste</a></li>
                <li><a href="<?php echo base_url('admin/settings'); ?>">Einstellungen</a></li>
                <li><a href="<?php echo base_url('admin/login/logout'); ?>">Logout</a></li>
            </ul>
        </nav>
        <section class="main">
