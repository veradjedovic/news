<?php //var_dump($data); ?>
<div class="clearfix"></div>
<div class="main-content">		
        <div class="col-md-9 total-news">
               <div class="live-market">
                        <h3><span><?php echo $_GET['method']; ?></span> </h3>
                        <div class="clearfix"></div>
                </div>
                <div class="technology">
                        <div class="tech-main">
							<?php foreach($data[3] as $article){?>
                                <div class="col-md-4 tech">
                                        <a href="#"><img src="./view/images/<?php echo $article->article_picture; ?>" alt="" /></a>
                                        <a class="power" href="#"><?php echo $article->article_title;?></a>
                                </div>
							<?php } ?>
						
                                <div class="clearfix"></div>
                        </div>
                </div>
               
        <div class="posts">
                <div class="left-posts">
                    <div class="latest-articles">
                                <div class="main-title-head">
                                        <h3><?php echo $data[0][0]->cat_name;?></h3>
                                        <a href="#">More  +</a>
                                        <div class="clearfix"></div>
                                </div>
                                <div class="world-news-grids">
								<?php foreach($data[0] as $article) {?>
                                        <div class="world-news-grid">
                                                <img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" />
                                                <a href="#" class="title"><?php echo $article->article_title; ?></a>
                                                <p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
                                                <a href="#">Read More</a>
                                        </div>
								<?php }?>
                                        <div class="clearfix"></div>
                                </div>
                        </div>
						
						<div class="latest-articles">
                                <div class="main-title-head">
                                        <h3><?php echo $data[1][0]->cat_name;?></h3>
                                        <a href="#">More  +</a>
                                        <div class="clearfix"></div>
                                </div>
                                <div class="world-news-grids">
								<?php foreach($data[1] as $article) {?>
                                        <div class="world-news-grid">
                                                <img src="./view/images/<?php echo $article->article_picture_small; ?>" alt="" />
                                                <a href="#" class="title"><?php echo $article->article_title; ?></a>
                                                <p><?php echo substr($article->article_intro_text,0,100); ?>...</p>
                                                <a href="#">Read More</a>
                                        </div>
								<?php }?>
                                        <div class="clearfix"></div>
                                </div>
                        </div>
                        

                </div>
				<br>
                <div class="right-posts">
                        <div class="editorial">
                                <h3><?php echo $data[2][0]->cat_name;?></h3>
								<?php foreach($data[2] as $article){?>
                                <div class="editor" style="margin:0 0 30px 0;">
                                        <a href="#"><img src="./view/images/<?php echo $article->article_picture;?>" alt="" /></a>
                                        <a href="#"><?php echo $article->article_title;?></a>
                                </div>
						
								<?php }?>
                        </div>
                </div>
                <div class="clearfix"></div>	
        </div>
        </div>	
    <br>
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