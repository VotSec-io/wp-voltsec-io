<?php
/*
Template Name: WP Voltsec.io Template One
*/

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>

                <?php
                // Display secure message function from public-functions.php
                wp_voltsec_io_display_secure_message();
                ?>
            </div>
        </article>
    </main>
</div>

<?php
get_footer();
