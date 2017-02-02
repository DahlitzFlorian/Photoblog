            <h1>Todo-Liste > Erstellen</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/todo'); ?>" class="button">Zurück</a>
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
            echo form_open(base_url('admin/todo/new_todo'));
            
            echo form_label('Titel', 'title');
            echo form_input(['name' => 'title']);
            
            echo form_label('Inhalt', 'content');
            echo form_textarea(['name' => 'content']);
            
            echo form_label('Todo für alle', 'all');
            echo form_checkbox(['name' => 'all']);
            
            echo form_label('Mit Dashboard verknüpfen', 'dash_link');
            echo form_checkbox(['name' => 'dash_link']);
            
            echo form_submit(['name' => 'add_todo_submit'], 'Erstellen');
            echo form_reset(['name' => 'add_todo_reset'], 'Zurücksetzen');
            
            echo form_close();
            ?>
