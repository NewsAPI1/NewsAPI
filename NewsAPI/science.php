<?php include('structure.php')?>
        <h1>Science Headlines</h1>
		<?php
		$url=file_get_contents
		("http://newsapi.org/v2/top-headlines?country=in&category=science&apiKey=f40e1c479f594c28abc16970483dffc6");
		$newsArray=json_decode($url,true);		
				foreach ($newsArray['articles'] as $news)
					{					
			?>
			<div class='news-row'>
                    <div class="news-card-image">
                    <img alt="Image" src="<?php echo $news['urlToImage']?>">   
                    </div>
                    <div class="content">                        
                        <a href="<?php echo $news['url']?>" target="_blank"><p class="title"><?php echo $news['title']?></p></a>
                        <p><?php echo $news['description']?></p>
                        <small><?php echo $news['publishedAt']?></small>
                    </div>
			</div>

			<?php
				
                }
					
			?>
		</div>
        <?php include('footer_structure.php')?>