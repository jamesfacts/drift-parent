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
                the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('account-page'); ?>>
				<header class="entry-header">
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
					<?php twentyseventeen_edit_link(get_the_ID()); ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php
                        the_content();
            
                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
                                'after'  => '</div>',
                            )
                        );
                        ?>
				</div><!-- .entry-content -->
			</article><!-- #post
			
			<?php the_ID();
        
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

	.account-page {
		padding-left: 2rem;
		padding-right: 2rem;
	}

	.account-page .entry-title {
		padding-left: 1rem;
		font-family: 'Adobe-Caslon';
		font-weight: bolder;
		margin-bottom: 2rem;
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
