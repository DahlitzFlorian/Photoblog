            <h1>Todo-Liste > Eintrag löschen</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/todo'); ?>" class="button">Zurück</a>
            </div>
            <p>Möchten Sie den Todo-Eintrag '<?php echo $todo->title; ?>' wirklich unwiderruflich löschen?</p>
            <?php 
            echo form_open(base_url('admin/todo/delete/' . $todo->id));
            
            echo form_submit(['name' => 'delete_yes'], 'Ja');
            echo form_submit(['name' => 'delete_no'], 'Nein');
            
            echo form_close();
            ?>
