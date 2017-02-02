            <h1>Nutzer > Details</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/user'); ?>" class="button">Zurück</a>
            </div>
            <div class="box-large">
                <h4 class="bg-lightblue">Nutzer Details</h4>
                <p>
                    ID: <?php echo $user->id; ?><br>
                    Nutzername: <?php echo $user->username; ?><br>
                    Name: <?php echo $user->first_name . ' ' . $user->last_name; ?><br>
                    Email: <?php echo $user->email; ?><br>
                    Status: <?php echo (($user->active == 1) ? 'aktiv' : 'inaktiv'); ?><br>
                    Gruppe: <?php echo $group; ?>
                </p>
            </div>
