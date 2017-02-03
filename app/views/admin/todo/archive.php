            <h1>Todo-Liste > Eintrag archivieren</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/todo'); ?>" class="button">Zurück</a>
            </div>
            <p>Möchten Sie den Todo-Eintrag '<?php echo $todo->title; ?>' wirklich archivieren?</p>
            <?php 
            echo form_open(base_url('admin/todo/archive/' . $todo->id));
            
            echo form_submit(['name' => 'archive_yes'], 'Ja');
            echo form_submit(['name' => 'archive_no'], 'Nein');
            
            echo form_close();
            ?>
