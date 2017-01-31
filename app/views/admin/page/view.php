            <h1>Artikel > Details</h1>
            <div class="buttons">
                <a href="<?php echo base_url('admin/page'); ?>" class="button">Zurück</a>
                <a href="<?php echo base_url('admin/page/edit/' . $article->id); ?>" class="button">Bearbeiten</a>
            </div>
            <div class="box">
                <h4 class="bg-lightblue">Artikel Details</h4>
                <p>
                    ID: <?php echo $article->id; ?><br>
                    Titel: <?php echo $article->title; ?><br>
                    Autor: <?php echo $article->author; ?><br>
                    Pfad: <?php echo $article->path; ?><br>
                    Datum: <?php echo date('d.m.Y', strtotime($article->date)); ?><br>
                    Kategorie: <?php echo $category; ?><br>
                    Typ: <?php echo $article->type; ?>
                </p>
            </div>
