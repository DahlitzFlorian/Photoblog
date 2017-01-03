        <section id="main">
            <h2><?php echo $article->title; ?></h2>
            <article><?php echo nl2br($article->content); ?></article>
            <p><span class="left">von <?php echo $article->author; ?></span><span class="right"><?php echo $article->date; ?></span></p>
        </section>
