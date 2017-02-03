            <h1>Dashboard</h1>
            <div class="box welcome">
                <h4 class="bg-lightblue">Willkommen</h4>
                <p><?php echo $reception; ?>, <?php echo $user->first_name . ' ' . $user->last_name; ?>.</p>
            </div>
            <?php foreach($todos as $todo): ?>
            <div class="box">
                <h4 class="bg-darkblue white"><?php echo $todo->title; ?></h4>                    
                <span class="details">Autor: <?php echo $todo->author; ?></span>
                <p><?php echo nl2br($todo->content); ?></p>
            </div>
            <?php endforeach; ?>
