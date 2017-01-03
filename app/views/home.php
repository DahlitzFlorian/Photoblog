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
        <section id="main">
            <section class="thumbnails">
                <?php 
                $article_place = 0;
                foreach($latestArticles as $article)
                {
                    if($article_place == 0)
                    {
                        echo '<div>';
                        echo '<a href="' . pics_url($article->path . '/thumbnail_l.jpg') . '">';
                        echo '<img src="" alt="" />';
                        echo '<h3>' . $article->title . '</h3>';
                        echo '</a>';
                        $article_place = 1;
                    }
                    else
                    {
                        echo '<a href="' . pics_url($article->path . '/thumbnail_l.jpg') . '">';
                        echo '<img src="" alt="" />';
                        echo '<h3>' . $article->title . '</h3>';
                        echo '</a>';
                        echo '</div>';
                        $article_place = 0;
                    }
                }
                ?>
            </section>
        </section>
        <footer id="footer">
            <p>&copy; <?php echo $this->config->item('name'); ?>. Alle Rechte vorbehalten. <a href="<?php echo base_url('contact'); ?>">Kontakt</a>. <a href="<?php echo base_url('articles/imprint'); ?>">Impressum</a>. <a href="<?php echo base_url('admin/login'); ?>">Login</a>.</p>
        </footer>
    </div>

    <!-- Other Scripts -->
    <script src="<?php echo js_file_url('jquery.min'); ?>"></script>
    <script src="<?php echo js_file_url('jquery.poptrox.min'); ?>"></script>
    <script src="<?php echo js_file_url('skel.min'); ?>"></script>
    <script src="<?php echo js_file_url('main'); ?>"></script>
    
</body>
</html>
