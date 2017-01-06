        <section id="main">
            <h2><?php echo $article->title; ?></h2>
            <article><?php echo nl2br($article->text); ?></article>
            <?php create_image_slider($imgPath, $imgCount)?>
            <p><span class="left">von <?php echo $article->author; ?></span><span class="right"><?php echo $article->date; ?></span></p>
        </section>
