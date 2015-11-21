<base href="/news/view/images" />
<div class="grids">
		<div class="grid box">
			<div class="grid-header">
				<a class="gotosingle" href=" "><?php echo $data->article_title; ?>  </a>
				<ul>
				<li><span>Post by <?php echo $data->article_creator. " "; echo $data->article_time; ?> </span></li>
				
				</ul>
			</div>
			
			<?php //var_dump($data);?>
			<div class="singlepage">
							<img src="./view/images/<?php echo $data->article_picture; ?>" />
							<p><?php echo $data->article_text; ?>
							<div class="clearfix"> </div>
						</div>
			
		</div>
	
			<div class="clearfix"> </div>
	</div>