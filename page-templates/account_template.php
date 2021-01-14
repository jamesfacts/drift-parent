<?php
/* Template name: Account Template Page */
get_header();
$pageID = get_the_id();

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area account-managment">
		<main id="main" class="site-main" role="main">

		<section class="log-in-alert not-logged-in">
			<p style="margin-bottom: 0;">Thank you for subscribing. <a href="<?php echo home_url('/issues/'); ?>">Read our latest issue here</a>.</p>
		</section>

			<?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/page/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End the loop.
            ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<style type="text/css">

	.log-in-alert {
		max-width: 480px;
		margin-left: auto;
		margin-right: auto;
		transition: 0.2s ease;
		background-color: aliceblue;
		padding: 1rem;
		margin-bottom: 3rem;
	}

	.log-in-alert.not-logged-in {
		display: none;
	}
</style>

<script type="text/javascript"> 
 
	jQuery(document).ready(function(){ 

		setTimeout(() =>
		{
			if( jQuery('#wpfs-manage-subscriptions-container').length > 0 ) {
				jQuery('.log-in-alert').removeClass('not-logged-in');
			}
		}, 2000);
	});


</script>

<?php
get_footer();
