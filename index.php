<?php
// Lädt den Kopfbereich
get_header();
?>

<main>
    <?php
    // Start der WordPress Loop
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <div>
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p>Keine Inhalte gefunden.</p>
    <?php
    endif;
    ?>
</main>

<?php
// Lädt den Fußbereich
get_footer();
?>
