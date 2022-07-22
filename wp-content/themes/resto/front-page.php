<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package resto
 */

get_header();
?>

	<main id="primary" class="site-main">
<!-- START HOME PAGE content -->
<div id="main-banner">
        <img src="<?php echo(get_template_directory_uri()); ?>/images/banner.jpg" alt="Welcom to Resto banner">
    </div>
    <div class="wrapper"> 
    <section id="home-menu">
        
        <h2>Menu</h2>
        <ul>
            <li>
                <span class="dish">Coluptate Cillum fugiat</span>
                <span class="price">$30</span>
                <span class="description">Cheese, tomato, mushrooms, onions</span>
            </li>
            <li>
                <span class="dish">Coluptate Cillum fugiat</span>
                <span class="price">$30</span>
                <span class="description">Cheese, tomato, mushrooms, onions</span>
            </li>
            <li>
                <span class="dish">Coluptate Cillum fugiat</span>
                <span class="price">$30</span>
                <span class="description">Cheese, tomato, mushrooms, onions</span>
            </li>
            <li>
                <span class="dish">Coluptate Cillum fugiat</span>
                <span class="price">$30</span>
                <span class="description">Cheese, tomato, mushrooms, onions</span>
            </li>
            <li>
                <span class="dish">Coluptate Cillum fugiat</span>
                <span class="price">$30</span>
                <span class="description">Cheese, tomato, mushrooms, onions</span>
            </li>
            <li>
                <span class="dish">Coluptate Cillum fugiat</span>
                <span class="price">$30</span>
                <span class="description">Cheese, tomato, mushrooms, onions</span>
            </li>
            <li>
                <span class="dish">Coluptate Cillum fugiat</span>
                <span class="price">$30</span>
                <span class="description">Cheese, tomato, mushrooms, onions</span>
            </li>
            <li>
                <span class="dish">Coluptate Cillum fugiat</span>
                <span class="price">$30</span>
                <span class="description">Cheese, tomato, mushrooms, onions</span>
            </li>
        </ul>
    </section>
    
    <section id="featured">
        <h1>FEATURED DISHES</h1>
        <ul>
            
            <?php 
            $myQuery = new WP_Query('category_name=Menu-items&posts_per_page=4');
            while ( $myQuery->have_posts() ) : $myQuery->the_post();
            ?>
            <li>
            <?php the_post_thumbnail();?>
            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            <span><?php echo get_post_meta($post->ID,'price',true); ?></span>
            <span class="star-<?php echo get_post_meta($post->ID,'rating',true);?> rating"></span>
            </li>
            <?php
			endwhile;
            ?>
            
        </ul>
    
    </section>
    <section class="image-wrap" id="gallery">
        <h1>THE GALLERY</h1>
        <div class="image-masonry">
            <div class="card card-tall " style="background-image: url('<?php echo(get_template_directory_uri()); ?>/images/gallery-1.jpg')"></div>
            <div class="card" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/images/gallery-2.jpg')"></div>
            <div class="card" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/images/gallery-3.jpg')"></div>
            <div class="card" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/images/gallery-4.jpg')"></div>
            <div class="card" style="background-image: url('<?php echo(get_template_directory_uri()); ?>/images/gallery-5.jpg')"></div>
        </div>
        </section>
</div>
    <!-- END HOMPAGE content -->
		

	</main><!-- #main -->

<?php
get_footer();
