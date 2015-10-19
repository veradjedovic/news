<div class="grids">
		<div class="grid box">
			<div class="grid-header">
				<a class="gotosingle" href="singlepage.html"><?php echo $data->article_title; ?>  </a>
				<ul>
				<li><span>Post by<a href="#"> <?php echo $data->article_creator; ?></a> <?php echo $data->article_time; ?> </span></li>
				<li><a href="#">5 comments</a></li>
				</ul>
			</div>
			
			<?php //var_dump($data);?>
			<div class="singlepage">
							<a href="#"><img src="./view/images/<?php echo $data->article_picture; ?>" /></a>
							<p><?php echo $data->article_text; ?><a href="#">...</a></p>
							<div class="clearfix"> </div>
						</div>
			<div class="comments">
			<ul>
				<li><a href="#"><img src="./view/images/views.png" title="view" /></a></li>
				<li><a href="#"><img src="./view/images/likes.png" title="likes" /></a></li>
				<li><a href="#"><img src="./view/images/link.png" title="link" /></a></li>
			</ul>
			</div>
		</div>
	
			<div class="clearfix"> </div>
	</div>