        <section id="main">
            <section class="thumbnails">
                <?php 
                $article_place = 0;
                foreach($latestArticles as $article)
                {
                    if($article_place == 0)
                    {
                        echo '<div>';
                        echo '<a href="' . base_url('article/show/') . $article->path . '">';
                        echo '<img src="' . article_pics_url() . $article->path . '/thumbnail.jpg' . '" alt="" />';
                        echo '<h4>' . $article->title . '</h4>';
                        echo '</a>';
                        $article_place = 1;
                    }
                    else
                    {
                        echo '<a href="' . base_url('article/show/') . $article->path . '">';
                        echo '<img src="' . article_pics_url() . $article->path . '/thumbnail.jpg' . '" alt="" />';
                        echo '<h4>' . $article->title . '</h4>';
                        echo '</a>';
                        echo '</div>';
                        $article_place = 0;
                    }
                }
                ?>
            </section>
        </section>
        
