<?php /* Template Name: blog */ ?>
<?php get_header(); ?>
<header>
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
                         <a href="https://api.whatsapp.com/send?phone=971506446826&text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20Felis%20Kitchen" class="hover-black">Let's Chat</a>
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
                                <a href="https://api.whatsapp.com/send?phone=971506446826&text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20Felis%20Kitchen" target="_blank" class="hover-black">Let's Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
           </div>
        </header>
        <main>
            <div class="HeroSlider OsBox">
                <div class="owl-carousel owl-theme hero">
                    <div class="item">
                        <div class="HeroContent">
                            <img class="Hero-image" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/products.jpg"/>
                            <div class="Text-Content">
                                <div class="container">
                                    <div class="Txthero1">Blog</div>
                                    <!--<div class="Txthero2">-->
                                    <!--    We know that family time is precious time, so our delicious ready-to-cook meals let you  spend less time in the kitchen and more time around the table.-->
                                    <!--</div>-->
                                    <div class="Txthero3">
                                        <a href="/our-story/" class="heroLink1 hover-black">More About Us</a>
                                        <a href="/contactus/" class="heroLink2 hover-black">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="OurStoryBox">
                <div class="OurStoryBoxMain">
                    <div class="BgTras">
                        <div class="container">
                           <div class="OurProductBox text-center">
                                <div class="OrTxt1 wow slideInUp">Blogs</div>
                                <div class="OrTxt2 wow slideInUp">
                                    Latest Blogs
                                </div>
                                
                           </div>
                           
                           <div class="ProductRow">
                               
                                   
                                
                                <!--<?php wp_get_archives('type=postbypost&limit=1000'); ?>-->
                                <?php 
                                    // wp-query to get all published posts without pagination
                                    $allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                                     
                                    <?php if ( $allPostsWPQuery->have_posts() ) : ?>
                                     
                                    <div class="row" style="margin-top:75px">
                                        
                                         <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
                                            <!--<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><?php the_title(); ?></a></li>-->
                                            <div class="col-md-4 prdGridMc group1 group2">
                                               <div class="ProductItem">
                                                   <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail(); ?>
                                                        <div class="PrdName"><?php the_title(); ?></div>
                                                   </a>
                                               </div>
                                           </div>
                                        <?php endwhile; ?>
                                    </div>
                                         <?php wp_reset_postdata(); ?>
                                     <?php else : ?>
                                        <p><?php _e( 'There no posts to display.' ); ?></p>
                                    <?php endif; ?>
                                
                                
                                
                                
                                
                               
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="OurPartners adjustTop">
                <div class="container">
                    <div class="text-center">
                        <div class="txtwithThmb  wow slideInUp" >Our Partners</div>
                    </div>
                </div>
                <div class="ParnersSlider">
                    <div class="OrTxt1 wow slideInUp align-items-center partCnt justify-content-center">UAE</div>
                    <div class="container">
                        <div class="row align-items-center partPg justify-content-center">
                            <div class="col-md-3 text-center">
                                <a href="http://www.imagine-intl.com" target="_blank"><img class=" wow slideInUp" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/carrefour.jpg" alt=""></a>
                            </div>
                            <div class="col-md-3 text-center">
                                <a href="http://www.alibinali.com/" target="_blank"><img class=" wow slideInUp" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/spinneys.png" alt=""></a>
                            </div>
                            <div class="col-md-3 text-center">
                                <a href="http://www.admirals.ae/" target="_blank"><img class=" wow slideInUp" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/union_coop.jpg" alt=""></a>
                            </div>
                            <div class="col-md-3 text-center">
                                <a href="http://www.almaya.ae/" target="_blank"><img class=" wow slideInUp" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/sharjahcoop.jpg" alt=""></a>
                            </div>
                             <div class="col-md-3 text-center">
                                <a href="http://www.abudawood.com" target="_blank"><img class=" wow slideInUp" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/lulu.png" alt=""></a>
                            </div>
                             <div class="col-md-3 text-center">
                                <a href="http://www.abudawood.com" target="_blank"><img class=" wow slideInUp" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/choithrams.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ParnersSlider">
                    <div class="OrTxt1 wow slideInUp align-items-center partCnt justify-content-center">KSA</div>
                    <div class="container">
                        <div class="row align-items-center partPg justify-content-center">
                            <div class="col-md-3 text-center">
                                <a href="http://www.imagine-intl.com" target="_blank"><img class=" wow slideInUp" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/Danube.png" alt=""></a>
                            </div>
                            <div class="col-md-3 text-center">
                                <a href="http://www.alibinali.com/" target="_blank"><img class=" wow slideInUp" src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/farm.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="InstagramBox">
                <div class="instagramHdr">
                    <div class="container text-center">@feliskitchen on Instagram</div>
                </div>
                <div class="InstaGrid">
                    <div class="row m-0 p-0">
                        <div class="col-md-4 p-0">
                            <img src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/instagram/Screen Shot 2021-11-06 at 7.17.33 PM.jpg" alt="">
                        </div>
                        <div class="col-md-4 p-0">
                            <img src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/instagram/Screen Shot 2021-11-06 at 7.18.45 PM.jpg" alt="">
                        </div>
                        <div class="col-md-4 p-0">
                            <img src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/instagram/Screen Shot 2021-11-06 at 7.19.04 PM.jpg" alt="">
                        </div>
                        <div class="col-md-4 p-0">
                            <img src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/instagram/Screen Shot 2021-11-06 at 7.19.23 PM.jpg" alt="">
                        </div>
                        <div class="col-md-4 p-0">
                            <img src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/instagram/Screen Shot 2021-11-06 at 7.20.03 PM.jpg" alt="">
                        </div>
                        <div class="col-md-4 p-0">
                            <img src="https://mccollinsmediaweb.github.io/felis-kitchen/assets/images/instagram/Screen Shot 2021-11-06 at 7.24.53 PM.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="container text-center  wow slideInUp mb-4">
                    <a href="#" class="PrLinkTp2 hover-black">Visit & Follow Us1</a>
                </div>
            </div>

        </main>
<?php get_footer(); ?>