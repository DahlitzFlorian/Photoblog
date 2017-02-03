            <h1>Todo-Liste > Archiv</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/todo'); ?>" class="button">Zurück</a>
                <a href="<?php echo base_url('admin/todo/delete_archive'); ?>" class="button">Archiv leeren</a>
            </div>
            <?php if($todos != NULL): ?>
            <table class="click-table">
                <thead>
                    <tr>
                        <th>Todo</th>
                        <th>Aktion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($todos as $todo)
                        {
                            echo '<tr>';
                            echo '<td>' . anchor(base_url('admin/todo/show/' . $todo->id), $todo->title) . '</td>';
                            echo '<td>' . anchor(base_url('admin/todo/delete/' . $todo->id), 'Löschen') . '</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            <?php endif; ?>
