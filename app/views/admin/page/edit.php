            <h1>Artikel > Bearbeiten</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/page/show/' . $article->id); ?>" class="button">Zurück</a>
            </div>
            <?php if(isset($validation_errors) or isset($msg)): ?>
            <div class="error-box">
                <h4>ERROR</h4>
                <p>
                <?php if($validation_errors): ?>
                    <?php echo $validation_errors; ?>
                <?php elseif($msg):?>
                    <?php echo $msg; ?>
                <?php endif; ?>
                </p>
            </div>
            <?php endif; ?>
            <?php 
            
            echo form_open(base_url('admin/page/edit/' . $article->id));
            
            echo form_label('Titel', 'title');
            echo form_input([
                'name' => 'title',
                'value' => $article->title
            ]);
            
            echo form_label('Pfad', 'path');
            echo form_input([
                'name' => 'path',
                'value' => $article->path
            ]);
            
            echo form_label('Inhalt', 'content');
            echo form_textarea([
                'name' => 'content',
                'value' => $article->text
            ]);
            
            echo form_label('Datum (d.m.Y)', 'date');
            echo form_input([
                'name' => 'date',
                'value' => date('d.m.Y', strtotime($article->date))
            ]);
            
            echo form_label('Kategorie', 'category');
            echo form_dropdown('category', $categories);
            
            echo form_label('Typ', 'type');
            echo form_dropdown('type', [
                'slide' => 'Slider',
                'include' => 'Integriert'
            ], $article->type);
            
            echo form_submit('edit_article_submit', 'Ändern');
            
            echo form_reset('article_reset', 'Zurücksetzen');
            
            echo form_close();
            
            ?>
