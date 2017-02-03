            <h1>Todo-Liste > Archiv > Archiv leeren</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/todo/show_archive'); ?>" class="button">Zurück</a>
            </div>
            <p>Möchten Sie wirklich das GESAMTE Archiv unwiderruflich leeren??</p>
            <?php 
            echo form_open(base_url('admin/todo/delete_archive'));
            
            echo form_submit(['name' => 'delete_yes'], 'Ja');
            echo form_submit(['name' => 'delete_no'], 'Nein');
            
            echo form_close();
            ?>
