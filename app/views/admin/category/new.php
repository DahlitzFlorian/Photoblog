            <h1>Kategorien > Erstellen</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/category'); ?>" class="button">Zurück</a>
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
            echo form_open(base_url('admin/category/new_category'));
            
            echo form_label('Kategoriename', 'name');
            echo form_input(['name' => 'name']);
            
            echo form_submit(['name' => 'add_category_submit'], 'Erstellen');
            echo form_reset(['name' => 'add_category_reset'], 'Zurücksetzen');
            
            echo form_close();
            ?>
