<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package feliskitchen
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	    <div class="container">
                <div class="preloader">
                    <div class="loader">
                        <div class="dot-container">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>  
                        </div>
                        <div class="dot-container">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>  
                        </div>
                        <div class="dot-container">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>  
                        </div>
                    </div>
                </div>
                <div class="Header">
                    <div class="MobChat">
                         <a href="https://api.whatsapp.com/send?phone=971506446826&text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20felis%20kitchen" class="hover-black">Let's Chat</a>
                    </div>
                    <div class="Fl-Logo">
                        <a href="/"><img src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/logo-feliz.svg" alt=""></a>
                    </div>
                    <div class="MenuClick">
                        <div class="MenuIcon">
                            <span>&nbsp;</span>
                            <span>&nbsp;</span>
                            <span>&nbsp;</span>
                        </div>
                    </div>
                    <div class="Fl-menu">
                        <div class="CloseBtn">x</div>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/our-story/">Our Story</a>
                            </li>
                            <li>
                                <a href="/products/" class="active">Our Products</a>
                            </li>
                            <li>
                                <a href="/tips/">Tips</a>
                            </li>
                            <li>
                                <a href="/partners/">Partners</a>
                            </li>
                            <li>
                                <a href="/contactus/">Contact Us</a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=971506446826&text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20felis%20kitchen" target="_blank" class="hover-black">Let's Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
           </div>
           </header>
           
           <div class="TipsHero">
                <div class="container">
                    <div class="Tipt">
                        <div class="text-center">
                            <?php
                        		if ( is_singular() ) :
                        			the_title( '<div class="TiptItem1 wow slideInUp">', '</div>' );
                        		else :
                        			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        		endif;
                        		?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TipBoxY" style="margin-top: -100px;padding-bottom:100px;">
                <div class="container text-center">
                    <div class="TipBoxY2 wow slideInUp">
                        <?php
                    		the_content(
                    			sprintf(
                    				wp_kses(
                    					/* translators: %s: Name of current post. Only visible to screen readers */
                    					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'feliskitchen' ),
                    					array(
                    						'span' => array(
                    							'class' => array(),
                    						),
                    					)
                    				),
                    				wp_kses_post( get_the_title() )
                    			)
                    		);
                    
                    		?>
                    </div>
                </div>
            </div>
           
		<?php

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
		
			</div><!-- .entry-meta -->
		<?php endif; ?>
	<!-- .entry-header -->
	
	<style>
	    .post-navigation,.comments-area,.widget-area {
	        display:none;
	    }
	</style>

	

	<!--<footer class="entry-footer">-->
	<!--	<?php feliskitchen_entry_footer(); ?>-->
	<!--</footer>-->
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
