            <h1>Kategorien > Löschen</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/category'); ?>" class="button">Zurück</a>
            </div>
            <p>Möchten Sie die Kategorie '<?php echo $category->name; ?>' wirklich unwiderruflich löschen?</p>
            <?php 
            echo form_open(base_url('admin/category/delete/' . $category->id));
            
            echo form_submit(['name' => 'delete_yes'], 'Ja');
            echo form_submit(['name' => 'delete_no'], 'Nein');
            
            echo form_close();
            ?>
