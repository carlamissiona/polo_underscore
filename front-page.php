  <?php get_header(); ?>     
   
    <div class="slider">
                 <!-- .slider -->
                 <div class="container">
                   <div class="row">
                     <div class="col-xs-12">
                       <div class="slide-show">
                          	<div class="sliderify-container">
                                <div class="sliderify-wrapper" draggable="true">
                                    <div class="sliderify-slide"><h1></h1>Slide One</div>
                                    <div class="sliderify-slide">Slide Two</div>
                                    <div class="sliderify-slide">Slide Three</div>
                                    <div class="sliderify-slide">Slide Four</div>
                                    <div class="sliderify-slide">Slide Five</div>
                                    <div class="sliderify-slide">Slide Six</div>
                                </div>

                                <div class="sliderify-prev"></div>
                                <div class="sliderify-next"></div>

                                <div class="sliderify-pagination"></div>
                            </div> 
                       </div>  
                      </div>                                         
                   </div>
                </div>
            </div>
            <div class="site-desc">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit </h3>
                        </div>
                    </div>
                </div>                
            </div>
            
            <div class="home-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                     
                            
                            <?php 
                                        $args = array( 'post_type' => 'news_update', 'posts_per_page' => 3 );
                                        $loop = new WP_Query( $args );
                                        while ( $loop->have_posts() ) : $loop->the_post();
                                        
                             ?>
                                     <div class="gallery-item col-md-4">
                                      
                                            
                                        <h4><?php  the_title(); ?></h4>
                                        <span class="gallery-desc">Add a custom field here for home product gallery.</span>
                                        <img src="images/perfect-logic.png" alt="" class="gallery-image">
                                        
                                        <div class="gallery-summary">
                                            <?php   the_excerpt(); ?>
                                        </div>
                                        <button class="gallery-btn gallery-learn-more">Learn More</button>
                                    </div> 
                                 
                                    
                          <?php   endwhile;   ?>  
                            
                 
                            
                       

                            <div class="gallery-item col-md-4">
                                <h4>Complete Solution</h4>
                                <span class="gallery-desc">A tool anything and everything you can think</span>
                                <img src="images/complete-solution.png" class="gallery-image">
                                <div class="gallery-summary">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciun tdolore magnam aliquam quaerat voluptatem.</div>
                                <button class="button gallery-btn gallery-learn-more">Learn More</button>
                            </div> 

                            <div class="gallery-item col-md-4">
                                <h4>Uber Culture</h4>
                                <span class="gallery-desc">Fresh. Modern and ready for future</span>
                                <img src="images/uber-culture.png" alt="" class="gallery-image">
                                <div class="gallery-summary">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                                <button class="button gallery-btn gallery-learn-more">Learn More</button>
                            </div> 
                         </div> 
                    </div>
                </div>   
                
            </div>
            
            <div class="site-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4 widget social-connection">
                              <h4>Social Connection</h4>  
                               <div class="social-connection-paragraph">
                                   At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                               </div>
                                <div class="social-btns">
                                    <img src="images/social-feed.png" alt="" class="social-feed-icon">
                                    
                                    <img src="images/social-fb.png" alt="" class="social-fb-icon">
                                    
                                    <img src="images/social-linkd.png" alt="" class="social-linkd">
                                    
                                    <img src="images/social-youtube.png" alt="" class="social-youtube">
                                    
                                    <img src="images/social-twitter.png" alt="" class="social-twitter">
                                    
                                </div>
                                <div class="social-newsletter form-group">
                                    <h5>Newsletter</h5>
                                    <div class="social-newsletter-paragraph">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</div>
                                    <form action="">
                                        <input type="text" class="form-control newsletter-email" placeholder="your email address">
                                         <button class="button subscribe-btn">Subscribe</button>
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 widget form-group contact-us">
                                   <h4>Contact</h4>  
                                   <form action="">
                                       <input type="text" class="form-control" name="contact-us-email">
                                       <input type="text" class="form-control" name="contact-us-address">
                                       <textarea name="contact-us-msg" class="form-control" cols="30" rows="10"></textarea>
                                       <button class="button contact-us-btn">Send it</button>
                                   </form>                                    
                               
                            </div>
                            <div class="col-md-4 widget news-updates">
                                    <h4>News Updates</h4>  
                                    <div class="update-item">
                                      
                                        <div class="text-left pull-right updates-desc">
                                           <img src="images/news-img-1.png" alt="" class="news-img"> 
                                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                    <div class="update-item"> 
                                       
                                        
                                        <div class="text-left pull-right updates-desc">
                                          <img src="images/news-img-2.png" alt="" class="news-img">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</div>
                                    </div>
                                    <div class="update-item">
                                                                    
                                        <div class="text-left pull-right updates-desc">
                                        <img src="images/news-img-3.png" alt="" class="news-img">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</div>
                                    </div>
                                      <button class="button news-updates-btn">Visit our Blog</button>
                                
                            </div>
                        
                         
                    </div>
                </div>
             </div>
          </div>
       
<?php get_footer(); ?>        