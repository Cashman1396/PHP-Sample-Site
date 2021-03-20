<?php include_once ('functions.php') ?>
<?php include ('post-data.php') ?>
<?php include ('header.php') ?>


    <div id="main">

<?php foreach( $posts as$id => $post ) : ?>
        <section id="intro">
            <header class="major">
                <h2><?php echo $post['title'] ?></h2>
            </header>
        <p>
        <?php echo get_excerpt( $post['content'] )  ?>
        <p>
            <ul>
                <li>
                    <a href="post.php?post_id=<?php echo $id ?>" class="button">Click Here</a>
                </li>
             </ul>
    </section>

    <?php endforeach ?>

</div> 
    
<?php include ('footer.php') ?>