        <section id="main">
            <h2><?php echo $article->title; ?></h2>
            <article><?php echo nl2br($article->text); ?></article>
            <p><span class="left">Erstellt von <?php echo $article->author; ?></span><span class="right"><?php echo date('d.m.Y', strtotime($article->date)); ?></span></p>
            <?php if($article->tags != 1): ?>
                <?php if($comments != null): ?>    
                    <div id="comments">
                        <h3><?php echo count($comments); ?> Kommentar(e)</h3>
                        <?php foreach($comments as $comment): ?>
                            <div class="comment">
                                <p><?php echo $comment->name; ?> schrieb am <?php echo date('d.m.Y H:i', strtotime($comment->date)); ?></p>
                                <div><?php echo $comment->text; ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php 
                echo form_open(base_url('article/show/' . $article->path), ['id' => 'comment-form']);
                echo '<h3>Artikel kommentieren</h3>';
                echo form_input([
                    'name' => 'name',
                    'placeholder' => 'Name *'
                ]);
                echo form_input([
                    'name' => 'email',
                    'placeholder' => 'Email (optional)',
                    'type' => 'email'
                ]);            
                echo form_textarea([
                    'name' => 'text',
                    'placeholder' => 'Kommentar verfassen ... *'
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
            <?php endif; ?>
        </section>
