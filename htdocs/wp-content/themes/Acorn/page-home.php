<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>
                        <div id="feature" class="cycle-slideshow"
                             data-cycle-fx="fade"
                             data-cycle-timeout="6000"
                             data-cycle-prev="#prev"
                             data-cycle-next="#next"
                         >
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/Header2.jpg" alt="Home page feature image" />
                            <!--<img src="<?php// echo get_template_directory_uri(); ?>/library/images/test.jpg" alt="Home page feature image" />-->
                        </div>

                        <!--<span id="prev">&lang;</span>
                        <span id="next">&rang;</span>-->

                        <div class="wrap feature-info-holder">
                            <div class="slide_infos cycle-slideshow"
                                data-cycle-fx="slideHorz"
                                data-cycle-timeout="6000"
                                data-cycle-slides=">h1"
                                data-cycle-prev="#prev"
                                data-cycle-next="#next"
                            >
                                <!--<h1>Infrastructure Developments &amp; Engineering</h1>-->
                                <!--<h1>The Majestic Snow Leopard, King Of The Tundra</h1>-->
                            </div>
                            <div class="floating_home_sidebar">
                                <h2>Latest News</h2>
                                <div class='inner_wrap'>
                                    <?php get_latest_news(); ?>

                                    <p><a href="<?php echo site_url('/news/'); ?>" class="btn">More News</a></p>
                                    
                                    <hr />

                                    <?php get_home_feature_page('purpose'); ?>
                                </div>
                            </div>
                        </div>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-1of2 d-2of3 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="home-entry-content entry-content cf" itemprop="articleBody">
                                                                    
                                                                <div class="static_home_sidebar">
                                                                    <h2>Latest News</h2>
                                                                    <div class='inner_wrap'>
                                                                        <?php get_latest_news(); ?>

                                                                        <p><a href="<?php echo site_url('/news/'); ?>" class="btn">More News</a></p>

                                                                        <hr />

                                                                        <?php get_home_feature_page('purpose'); ?>
                                                                    </div>
                                                                </div>
                                                                   
											<?php the_content(); ?>
                                                                    
								</section>

								<footer class="article-footer">
                                                                    
                                                                    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<!-- <?php// comments_template(); ?> -->

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                                                                                        </header>
											<section class="entry-content">
                                                                                            <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                                                                                        </section>
										<footer class="article-footer">
                                                                                    <p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<!-- <?php// get_sidebar(); ?> -->

				</div>

			</div>


<?php get_footer(); ?>
