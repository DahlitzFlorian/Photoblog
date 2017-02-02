            <h1>Nutzer</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/user/new_user'); ?>" class="button">Hinzufügen</a>
            </div>
            <?php foreach($user_map as $group_desc => $users):?>
            <?php if($users != NULL): ?>
            <h2><?php echo $group_desc; ?></h2>
            <table class="click-table">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Nutzername</th>
                        <th>Zuletzt angemeldet</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($users as $user)
                        {
                            echo '<tr class="clickable-row" data-href="' . base_url('admin/user/show/' . $user->id) . '">';
                            echo '<td>' . (($user->active == 1) ? '<span class="green">aktiv</span>' : '<span class="red">inaktiv</span>') . '</td>';
                            echo '<td>' . $user->username . '</td>';
                            echo '<td>' . date('d.m.Y - H:i', $user->last_login) . '</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            <?php endif; ?>
            <?php endforeach; ?>
