            <h1>Nutzer > Hinzufügen</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/user'); ?>" class="button">Zurück</a>
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
            
            echo form_open(base_url('admin/user/new_user'));
            
            echo form_label('Vorname', 'first_name');
            echo form_input(['name' => 'first_name']);
            
            echo form_label('Nachname', 'last_name');
            echo form_input(['name' => 'last_name']);
            
            echo form_label('Nutzername', 'username');
            echo form_input(['name' => 'username']);
            
            echo form_label('Email-Adresse', 'email');
            echo form_input(['name' => 'email']);
            
            echo form_label('Passwort', 'password');
            echo form_password(['name' => 'password']);
            
            echo form_label('Passwort (Wiederholung)', 'password_confirm');
            echo form_password(['name' => 'password_confirm']);
            
            echo form_label('Passwort (Administrator)', 'password_admin');
            echo form_password(['name' => 'password_admin']);
            
            echo form_label('Gruppe', 'group');
            echo form_dropdown('group', $groups);
            
            echo form_submit('add_user_submit', 'Hinzufügen');
            
            echo form_reset('user_reset', 'Zurücksetzen');
            
            echo form_close();
            
            ?>
