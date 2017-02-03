            <h1>Todo-Liste > Bearbeiten</h1>
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
            echo form_open(base_url('admin/todo/edit/' . $todo->id));
            
            echo form_label('Titel', 'title');
            echo form_input([
                'name' => 'title',
                'value' => $todo->title
            ]);
            
            echo form_label('Inhalt', 'content');
            echo form_textarea([
                'name' => 'content',
                'value' => nl2br($todo->content)
            ]);
            
            echo form_submit(['name' => 'edit_todo_submit'], 'Ändern');
            echo form_reset(['name' => 'edit_todo_reset'], 'Zurücksetzen');
            
            echo form_close();
            ?>
