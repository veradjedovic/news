    <?php //var_dump($data);?>    
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
                               <?php foreach($data[7] as $slider){
                            echo "<li> <img src='./view/images/{$slider->article_picture_slider}' alt='Paris, France' data-description='Eiffel Tower and Champ de Mars'></li>";
                                }?>
                       </ul>

                           </div> 
						
					</div>	
                                    <div class="clearfix"></div><br>
				<div class="posts">
					<div class="left-posts">
                            <!-- WORLD-->                
                                                <div class="world-news">
							<div class="main-title-head">
								<h3><?php echo $data[0][0]->main_cat_name; ?></h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
                                                            
                                                            
                                                            <?php 
                                                            foreach ($data[0] as $article){
                                                            ?>
								<div class="world-news-grid">
									<img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" />
									<a href="singlepage.html" class="title"><?php echo $article->article_title; ?> </a>
									<p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
									<a href="singlepage.html">Read More</a>
								</div>
                                                            <?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
                                            
                            <!-- POLITICS -->                
                                                <div class="latest-articles">
							<div class="main-title-head">
								<h3><?php echo $data[1][0]->main_cat_name; ?></h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
                                                            
                                                            
                                                            <?php 
                                                            foreach ($data[1] as $article){
                                                            ?>
								<div class="world-news-grid">
									<img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" />
									<a href="singlepage.html" class="title"><?php echo $article->article_title; ?> </a>
									<p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
									<a href="singlepage.html">Read More</a>
								</div>
                                                            <?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
                                            
                            <!-- BUSINESS -->                
                                                <div class="latest-articles">
							<div class="main-title-head">
								<h3><?php echo $data[2][0]->main_cat_name; ?></h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
                                                            
                                                            
                                                            <?php 
                                                            foreach ($data[2] as $article){
                                                            ?>
								<div class="world-news-grid">
									<img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" />
									<a href="singlepage.html" class="title"><?php echo $article->article_title; ?> </a>
									<p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
									<a href="singlepage.html">Read More</a>
								</div>
                                                            <?php } ?>
								<div class="clearfix"></div>
							</div>
						</div>
                          
												
						<div class="tech-news">
							<div class="main-title-head">
								<h3>tech     news</h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>	
							<div class="tech-news-grids">
								<div class="left-tech-news">
									<div class="tech-news-grid span_66">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								<div class="right-tech-news">
									<div class="tech-news-grid span_66">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
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
								<a href="singlepage.html" class="title"><?php echo $article->article_title; ?></a>
								<p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
                                                                <p><a href="singlepage.html">Read More</a><span style="color:#CF0000;"><?php echo $ago;?></span></p>
							</div>
							
                                                            <?php }?>
                                                        
                                                        
							<a class="more" href="singlepage.html">More  +</a>
						</div>
                            <br>
                            <!--- SPORTS --> 
                            
						<div class="editorial">
							<h3><?php echo $data[5][0]->main_cat_name; ?></h3>
                                                        
                                                       <?php 
                                                            foreach ($data[5] as $article){
                                                            ?>   
							<div class="editor">
								<a href="single.html"><img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" /></a>
								<a href="single.html"><?php echo $article->article_title; ?></a>
							</div>
							<?php }?>
						</div>
					</div>
					<div class="clearfix"></div>	
				</div>
				</div>	
				<div class="col-md-3 side-bar">
                                    
                                    <!-- Ticker -->
                                    
					<div class="videos">
                                           <div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
                                            
                                        </div>
                                </div>
                                    <!-- Ticker end -->
					<div class="sign_up text-center">
						<h3>Sign  Up  for    Newsletter</h3>
						<p class="sign">Sign up to receive our free newsletters!</p>
						<form>
							<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
							<input type="submit" value="submit">
						</form>
						<p class="spam">We do not spam. We value your privacy!</p>
					</div>
					<div class="clearfix"></div>
					<div class="popular">
						<div class="main-title-head">
							<h5>popular</h5>
							<h4><?php echo $data[6][0]->main_cat_name; ?></h4>
							<div class="clearfix"></div>
						</div>	
                                            
                                         <!-- HEALTH -->
						<div class="popular-news">
                                                    
                                                     <?php 
                                                            foreach ($data[6] as $article){
                                                            ?>   
							<div class="popular-grid">
                                 
					<i><?php echo $article->article_time; ?></i>
                                                                <p><?php echo $article->article_title; ?><br>  <a href="singlepage.html">Read More</a></p>
							</div>
                                                            <?php }?>
                                                    
                                                    
							<a class="more" href="singlepage.html">More  +</a>
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