            <h1>Todo-Liste</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/todo/new_todo'); ?>" class="button">Erstellen</a>
                <a href="<?php echo base_url('admin/todo/show_archive'); ?>" class="button">Archiv</a>
            </div>
            <?php foreach($todos as $todo): ?>
            <div class="box">
                <?php if($this->ion_auth->user()->row()->first_name . ' ' . $this->ion_auth->user()->row()->last_name == $todo->author): ?>
                <h4 class="bg-darkblue white"><?php echo $todo->title; ?></h4>
                <?php else: ?>
                <h4 class="bg-blue white"><?php echo $todo->title; ?></h4>
                <?php endif; ?>
                <span class="actions"><a href="<?php echo base_url('admin/todo/dash_linkage/' . $todo->id); ?>"><?php echo ($todo->dash_link == 0) ? 'An Dashboard anheften' : 'Von Dashboard lösen'; ?></a> - <a href="<?php echo base_url('admin/todo/archive/' . $todo->id); ?>">Archivieren</a> - <a href="<?php echo base_url('admin/todo/edit/' . $todo->id); ?>">Bearbeiten</a> - <a href="<?php echo base_url('admin/todo/delete/' . $todo->id); ?>">Löschen</a></span>
                <span class="details">Autor: <?php echo $todo->author; ?></span>
                <p><?php echo nl2br($todo->content); ?></p>
            </div>
            <?php endforeach; ?>
