            <h1>Artikel</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/page/new_article'); ?>" class="button">Schreiben</a>
            </div>
            <table class="click-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titel</th>
                        <th>Autor</th>
                        <th>Datum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($articles as $article)
                        {
                            echo '<tr class="clickable-row" data-href="' . base_url('admin/page/show/' . $article->id) . '">';
                            echo '<td>' . $article->id . '</td>';
                            echo '<td>' . $article->title . '</td>';
                            echo '<td>' . $article->author . '</td>';
                            echo '<td>' . date('d.m.Y', strtotime($article->date)) . '</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
