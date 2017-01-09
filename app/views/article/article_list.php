        <section id="main">
            <h2><?php echo $header; ?></h2>
                <?php foreach($articles as $article): ?>
                    <a href="<?php echo base_url('article/show/' . $article->path); ?>"><article class="article_list">
                        <div class="thumbnail"><img src="<?php echo article_pics_url() . $article->path . '/thumbnail.jpg'; ?>"></img></div>
                        <h4><?php echo $article->title; ?></h4>
                        <?php 
                            if (strlen($article->text) > 90): $article->text = substr($article->text, 0, 86) . ' ...';
                            endif;
                        ?>
                        <div><?php echo $article->text; ?></div>
                    </article></a>
                <?php endforeach; ?>
        </section>
