        <section id="main">
            <h2><?php echo $header; ?></h2>
                <?php foreach($articles as $article): ?>
                    <article>
                        <div class="thumbnail"><img src="<?php echo article_pics_url() . $article->path . '/thumbnail.jpg'; ?>"></img></div>
                    </article>
                <?php endforeach; ?>
        </section>
