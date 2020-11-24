
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
		("http://newsapi.org/v2/everything?q=$result&from=2020-10-24&sortBy=publishedAt&apiKey=f40e1c479f594c28abc16970483dffc6");
		$newsArray=json_decode($url,true);		
				foreach ($newsArray['articles'] as $news)
					{	
                        if(strpos($news['url'], $result) ||strpos($news['description'], $result)){
			?>
			<div class='news-row'>
                    <div class="news-card-image">
                    <img alt="Image" src="<?php echo $news['urlToImage']?>">   
                    </div>
                    <div class="content">                        
                        <a href="<?php echo substr($news['url'],0,20);?>" target="_blank"><p class="title"><?php echo $news['title']?></p></a>
                        
                        <p><?php echo $description=substr($news['description'],0,80 ); echo"$description.."?></p>
                        <small><?php echo $news['publishedAt']?></small>
                    </div>
			</div>

			<?php
                        }
                }
            }	
			?>
		</div>
		<?php include('footer_structure.php')?>