            <h1>Todo-Eintrag > Details</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/todo/show_archive'); ?>" class="button">Zurück</a>
            </div>
            <div class="box-large">
                <h4 class="bg-lightblue">Todo-Eintrag Details</h4>
                <p>
                    ID: <?php echo $todo->id; ?><br>
                    Titel: <?php echo $todo->title; ?><br>
                    Autor: <?php echo $todo->author; ?><br>                    
                    Datum: <?php echo date('d.m.Y', strtotime($todo->date)); ?><br>
                    Inhalt: <?php echo nl2br($todo->content); ?>
                </p>
            </div>
