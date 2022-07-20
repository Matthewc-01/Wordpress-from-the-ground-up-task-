<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>

	<footer id="footer">
        <div class="wrapper">
            <ul>
                <li>New York Restaurant</li>
                <li>3926 Anmoore Road</li>
                <li>New York, NY 10014</li>
                <li>718-749171714</li>
            </ul>
            <ul>
                <li>France Restaurant</li>
                <li>68, rue de la Couronne</li>
                <li>75002 PARIS</li>
                <li>02.94.23.69.56</li>
            </ul>
            <ul>
                <li><a href="">Blog</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul>
                <li>
                    <img src="<?php echo(get_template_directory_uri()); ?>/images/black-resto-logo.png" alt="logo">
                </li>
                <li>
                    &copy; All rights reserve 2022 <?php printf( esc_html__( 'Proudly powered by %s', 'resto' ), 'WordPress' ); ?>
                </li>
            </ul>
        </div>

    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    	jQuery(document).ready(function($) {
    		$("#burger-nav").click(function(event) {
    			$("header nav ul").toggleClass('open');
    		});
    	});
    </script>


</div><!-- #page -->

<?php wp_footer(); ?>



