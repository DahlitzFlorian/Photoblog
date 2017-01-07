        <section id="main">
            <h2><?php echo $article->title; ?></h2>
            <article><?php echo nl2br($article->text); ?></article>
            <?php if($imgCount > 0): ?>
                <div id ="images_mini">
                    <?php for($i = 1; $i <= $imgCount; $i++): ?>
                        <?php if($i > 9): ?>
                            <a class="fancybox" rel="group" href="<?php echo article_pics_url() . $article->path . '/bild_' . $i . '_l.jpg'; ?>"><img src="<?php echo article_pics_url() . $article->path . '/bild_' . $i . '_s.jpg'; ?>" alt="" /></a>
                        <?php else: ?>
                            <a class="fancybox" rel="group" href="<?php echo article_pics_url() . $article->path . '/bild_0' . $i . '_l.jpg'; ?>"><img src="<?php echo article_pics_url() . $article->path . '/bild_0' . $i . '_s.jpg'; ?>" alt="" /></a>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
            <p><span class="left">von <?php echo $article->author; ?></span><span class="right"><?php echo $article->date; ?></span></p>
            <?php 
            echo form_open(base_url('article/show/' . $article->path), ['id' => 'comment-form']);
            echo '<h2>Artikel kommentieren</h2>';
            echo form_input([
                'name' => 'name',
                'placeholder' => 'Name'
            ]);
            echo form_input([
                'name' => 'email',
                'placeholder' => 'Email',
                'type' => 'email'
            ]);            
            echo form_textarea([
                'name' => 'text',
                'placeholder' => 'Kommentar verfassen ...'
            ]);
            echo form_submit([
                'name' => 'comment_submit',
                'value' => 'Kommentieren'
            ]);
            echo form_reset([
                'name' => 'comment_reset',
                'value' => 'Zurücksetzen'
            ]);
            echo form_close();
            ?>
        </section>
