<?php /* Template Name: contactus */ ?>
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
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-feliz.svg" alt=""></a>
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
                                <a href="/products/">Our Products</a>
                            </li>
                            <li>
                                <a href="/tips/">Tips</a>
                            </li>
                            <li>
                                <a href="/partners/">Partners</a>
                            </li>
                            <li>
                                <a href="/contactus/" class="active">Contact Us</a>
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
            <div class="ContactUsBlk MargToCont">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ContactLeft">
                            <div class="ContactLeftCnt">
                                <div class="C1Txt1 wow slideInUp">Contact Us</div>
                                <!-- <div class="ContactRow1 wow slideInUp">
                                    <div class="ContactRow1Cnt">
                                        <div class="ContactRow1CntLeft">
                                            <span class="IconBox">&nbsp;</span>
                                        </div>
                                        <div class="ContactRow1CntRight">
                                            <div class="AbtTxt101">OPENING HOURS</div>
                                            <div class="AbtTxt102">Weekdays: 9:00am - 5.00pm</div>
                                            <div class="AbtTxt102">Weekends: 9:00am - 12:00pm</div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="ContactRow1 wow slideInUp">
                                    <div class="ContactRow1Cnt">
                                        <div class="ContactRow1CntLeft">
                                            <span class="IconBox tel">&nbsp;</span>
                                        </div>
                                        <div class="ContactRow1CntRight">
                                            <div class="AbtTxt101">Telephone</div>
                                            <div class="AbtTxt102">+971 506446826</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ContactRow1 wow slideInUp">
                                    <div class="ContactRow1Cnt">
                                        <div class="ContactRow1CntLeft">
                                            <span class="IconBox mail">&nbsp;</span>
                                        </div>
                                        <div class="ContactRow1CntRight">
                                            <div class="AbtTxt101">Email</div>
                                            <div class="AbtTxt102">feli@feliskitchen.com</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ContactRow1 wow slideInUp cnt-packet-prnt">
                                    <img src="/wp-content/themes/feliskitchen/assets/images/felis-packets-min-min-new-1.jpg" class="cnt-packet" alt="packets">
                                    <!-- <div class="ContactRow1Cnt">
                                        <div class="ContactRow1CntLeft">
                                            <span class="IconBox address">&nbsp;</span>
                                        </div>
                                        <div class="ContactRow1CntRight">
                                            <div class="AbtTxt101 adMb-Adg">Address</div>
                                            <div class="AbtTxt101">KSA</div>
                                            <div class="AbtTxt102">Street Name, State Name, PO Box 1234</div>
                                            <div class="AbtTxt102 adMb-Adg">Riyadh, Kingdom of Saudi</div>
                                            <div class="AbtTxt101">UAE</div>
                                            <div class="AbtTxt102">Street Name, State Name, PO Box 1234</div>
                                            <div class="AbtTxt102">Dubai, United Arab Emirates</div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ContactRight">
                            <div class="ContactRightCnt">
                                <?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Location">
                <div class="LctTxt1  wow slideInUp">Where You Can Find Us</div>
                <a href="#">
                    <img class="width100  wow slideInUp" src="<?php echo get_template_directory_uri(); ?>/assets/css/afterimages/Map11-01.jpg" alt="">
                </a>
            </div>
        </main>
<?php get_footer(); ?>