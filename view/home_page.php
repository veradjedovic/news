    <?php //var_dump($data); ?>
<br>
<div class="main-content">		
				<div class="col-md-9 total-news">
					<div class="">
                                          <!--Slider link  http://pgwjs.com/pgwslider  -->
                                          
						<script src="./view/slider/pgwslider.js"></script>
                                               <link href="./view/slider/pgwslider.css" rel="stylesheet" type="text/css"/>
						 <script>
							$(document).ready(function() {
                              $('.pgwSlider').pgwSlider();
                                                    });
						</script>
                            <div class="conference-slider">

                           <ul class="pgwSlider">
                               <?php foreach($data[7] as $slider){ ?>
                            <li> <img src="./view/images/<?php echo $slider->article_picture_slider; ?>" alt="<?php echo "<a href='index.php?controller=News&method=index&id={$slider->article_id}'>".$slider->article_title."</a>";?>"></li>
                             <?php   }?>
                       </ul>

                           </div> 
						
					</div>	
                                    <div class="clearfix"></div><br>
                                    <div class="clearfix"></div><br>
				<div class="posts">
					<div class="left-posts">
                            <!-- WORLD-->                
                                                <div class="world-news">
							<div class="main-title-head">
								<h3><?php echo $data[0][0]->main_cat_name; ?></h3>
								<a href="index.php?controller=Home&method=World">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
                                                            
                                                            
                                                            <?php 
                                                            foreach ($data[0] as $article){
                                                            ?>
								<div class="world-news-grid">
                                                                    <a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>"><img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" /></a>
									<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>" class="title"><?php echo $article->article_title; ?> </a>
									<p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
									<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>">Read More</a>
								</div>
                                                            <?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
                                            
                            <!-- POLITICS -->                
                                                <div class="latest-articles">
							<div class="main-title-head">
								<h3><?php echo $data[1][0]->main_cat_name; ?></h3>
								<a href="index.php?controller=Home&method=Politics">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
                                                            
                                                            
                                                            <?php 
                                                            foreach ($data[1] as $article){
                                                            ?>
								<div class="world-news-grid">
                                                                    <a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>"><img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" /></a>
									<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>" class="title"><?php echo $article->article_title; ?> </a>
									<p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
									<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>">Read More</a>
								</div>
                                                            <?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
                                            
                            <!-- BUSINESS -->                
                                                <div class="latest-articles">
							<div class="main-title-head">
								<h3><?php echo $data[2][0]->main_cat_name; ?></h3>
								<a href="index.php?controller=Home&method=Business">more +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
                                                            
                                                            
                                                            <?php 
                                                            foreach ($data[2] as $article){
                                                            ?>
								<div class="world-news-grid">
                                                                    <a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>"><img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" /></a>
									<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>" class="title"><?php echo $article->article_title; ?> </a>
									<p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
									<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>">Read More</a>
								</div>
                                                            <?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
                          
				<!-- TECH -->								
						<div class="tech-news">
							<div class="main-title-head">
								<h3>tech     news</h3>
								<a href="index.php?controller=Home&method=Tech">More  +</a>
								<div class="clearfix"></div>
							</div>	
							<div class="tech-news-grids">
								<div class="left-tech-news">
									<div class="tech-news-grid span_66">
										<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								<div class="right-tech-news">
									<div class="tech-news-grid span_66">
										<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="right-posts">
                                            
                            <!--- CULTURE -->   
						<div class="desk-grid">
							<h3><?php echo $data[3][0]->main_cat_name; ?></h3>
                                                        
                                                        <?php 
                                                            foreach ($data[3] as $article){
                                                        $date1 = new DateTime($article->article_time); 
                                                        $date2 = new DateTime("now");
                                                        //print_r($date2);
                                                        $interval = $date1->diff($date2); 
                                                        $years = $interval->format('%y'); 
                                                        $months = $interval->format('%m'); 
                                                        $days = $interval->format('%d');
                                                        $hour = $interval->format('%h');
                                                        $min = $interval->format('%i');
                                                        if($years!=0){ 
                                                            $ago = $years.' year(s) ago'; 
                                                        } else if($months!=0){ 
                                                            $ago = $months.' month(s) ago'; 
                                                        } else if($days!=0){
                                                            $ago = $days .' day(s) ago';
                                                        }else if($hour!=0){
                                                            $ago = $hour .' hour(s) ago';
                                                        }else{
                                                            $ago = $min. ' min(s) ago';
                                                        }
                                                         
                                       
                                                            ?>
                                                      
							<div class="desk">
								<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>" class="title"><?php echo $article->article_title; ?></a>
								<p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
                                                                <p><a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>">Read More</a><span style="color:#CF0000;"><?php echo $ago;?></span></p>
							</div>
							
                                                            <?php }?>
                                                        
                                                        
							<a class="more" href="index.php?controller=Home&method=Culture">More  +</a>
						</div>
                            <br>
                            <!--- SPORTS --> 
                            
						<div class="editorial">
							<h3><?php echo $data[5][0]->main_cat_name; ?></h3>
                                                        
                                                       <?php 
                                                            foreach ($data[5] as $article){
                                                            ?>   
							<div class="editor">
								<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>"><img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" /></a>
								<a href="index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>"><?php echo $article->article_title; ?></a>
							</div>
							<?php }?>
						</div>
                            <a class="more" href="index.php?controller=Home&method=Sports">More  +</a>
					</div>
					<div class="clearfix"></div>	
				</div>
                                    
				</div>	
    
    <!-- RIGHT SIDEBAR -->
    
				<div class="col-md-3 side-bar">
					<div class="videos">
						<div class="video-grid">
							<div class="video">
								<a href="#"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="#"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="#"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="#"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="#">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<a class="more1" href="#">More  +</a>
						<div class="clearfix"></div>
					</div>
					<div class="sign_up text-center">
						<h3>Sign  Up  for    Newsletter</h3>
						<p class="sign">Sign up to receive our free newsletters!</p>
						<form action="./view/newsletter.php" method="POST" class="ajax">
							<input type="text" class="text" name="subscriber_name" placeholder="Name">
							<input type="text" class="text" name="subscriber_email" placeholder="Email Address">
							<input type="submit" value="submit">
						</form>
						<p class="spam">We do not spam. We value your privacy!</p>
									<!-- LINK AJAX and AJAX REQUEST NEWSLETTER -->

<script src="./view/js/newsletter_ajax.js"></script>
					</div>
					<div class="clearfix"></div>
					<div class="popular">
						<div class="main-title-head">
							<h5>popular</h5>
							<h4> Most    read</h4>
							<div class="clearfix"></div>
						</div>		
						<div class="popular-news">
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="#">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="#">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="#">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="#">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="#">Read More</a></p>
							</div>
							<a class="more" href="#">More  +</a>
						</div>
					</div>
					<div class="subscribe-now">
						<div class="discount">
							<a href="#">
								<div class="save">
									<p>Save</p>
									<p>upto</p>
								</div>
								<div class="percent">
									<h2>50%</h2>
								</div>
								<div class="clearfix"></div>
						</div>						
						<h3 class="sn">subscribe     now</h3>
							</a>
					</div>
					<div class="clearfix"></div>
				</div>	
    
				<div class="clearfix"></div>
                                </div>
		