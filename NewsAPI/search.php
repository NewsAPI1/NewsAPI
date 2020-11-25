
<?php include('structure.php')?> 

    <h1>Search</h1>
    <form method="post" action="">
        <div class="input">
            <input type="text" name="search">
            <label >Search a keyword</label>
            <input type="submit" style="display:none" name="submit" value="">
        </div>
    </form>
		<?php
if(isset($_POST["submit"])){
    $search=$_POST["search"];
    $result=urlencode($search);
		$url=file_get_contents
		("https://app.zenserp.com/api/v2/search?apikey=5ac68670-2f08-11eb-ae26-d3a90d9feb80&q=$result&tbm=nws&device=desktop&gl=IN&hl=en&location=New%20Delhi,Delhi,India");
		$newsArray=json_decode($url,true);		
				foreach ($newsArray['news_results'] as $news)
					{	
                        
			?>
			<div class='news-row'>
                    <div class="news-card-image">
                    <img alt="Image" src="<?php echo $news['thumbnail']?>">   
                    </div>
                    <div class="content">                        
                        <a href="<?php echo substr($news['link'],0,20);?>" target="_blank"><p class="title"><?php echo $news['title']?></p></a>
                        
                        <p><?php echo $description=substr($news['description'],0,80 ); echo"$description.."?></p>
                        <small><?php echo $news['date_parsed']?></small>
                    </div>
			</div>

			<?php
                        }
                }
			?>
		</div>
		<?php include('footer_structure.php')?>