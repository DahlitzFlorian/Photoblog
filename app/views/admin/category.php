            <h1>Kategorien</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/category/new_category'); ?>" class="button">Erstellen</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Kategorie</th>
                        <th>Aktion</th>
                        <th>Aktion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($categories as $category)
                        {
                            echo '<tr>';
                            echo '<td>' . $category->name . '</td>';
                            echo '<td>' . anchor(base_url('admin/category/edit/' . $category->id), 'Bearbeiten') . '</td>';
                            echo '<td>' . anchor(base_url('admin/category/delete/' . $category->id), 'Löschen') . '</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
