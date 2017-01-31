<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="<?php echo $this->config->item('charset'); ?>">
    
    <title><?php echo $title; ?></title>
    
    <link rel="stylesheet" href="<?php echo css_file_url('admin/reset'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo css_file_url('admin/main'); ?>" type="text/css">
</head>
<body>
    <div id="wrapper">
        <header class="top-header"></header>
        <nav class="site-nav">
            <ul>
                <li><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
                <li><a href="<?php echo base_url('admin/user'); ?>">Nutzer</a></li>
                <li><a href="<?php echo base_url('admin/article'); ?>">Artikel</a></li>
                <li><a href="<?php echo base_url('admin/todo'); ?>">Todo-List</a></li>
            </ul>
        </nav>
        <section class="main">
