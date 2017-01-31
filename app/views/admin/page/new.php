            <h1>Artikel > Schreiben</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/page'); ?>" class="button">Zurück</a>
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
            
            echo form_open(base_url('admin/page/new_article'));
            
            echo form_label('Titel', 'title');
            echo form_input(['name' => 'title']);
            
            echo form_label('Pfad', 'path');
            echo form_input(['name' => 'path']);
            
            echo form_label('Inhalt', 'content');
            echo form_textarea(['name' => 'content']);
            
            echo form_label('Datum (d.m.Y)', 'date');
            echo form_input(['name' => 'date']);
            
            echo form_label('Kategorie', 'category');
            echo form_dropdown('category', $categories);
            
            echo form_label('Typ', 'type');
            echo form_dropdown('type', [
                'slide' => 'Slider',
                'include' => 'Integriert'
            ], 'slide');
            
            echo form_submit('add_article_submit', 'Hinzufügen');
            
            echo form_reset('article_reset', 'Zurücksetzen');
            
            echo form_close();
            
            ?>
