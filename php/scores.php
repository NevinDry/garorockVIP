
<?php
require('twitteroauth.php'); // path to twitteroauth library

$consumerkey = 'CW70T03uq8z1eBgKwJ5hXEnfg';
$consumersecret = 'JJrwVgqYZ4Njk4ttBsOFoljqChYVoyn11A6BQ2OSxVrKdMFH2T';
$accesstoken = '283720162-gguI93VLXtam0sXABy23JB4iP6ZHwCu6M4tjwZlL';
$accesstokensecret = '5dhYcGFfdEy5H6uFvXe2VTU51HxpigBB0DjKeuuhN50jS';
$twitter = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);




//        Team 1

$countTeam1 = 0;
$resultTeam1 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%23FiresideGathering&src=typd&count=100');
getTweetsAndCountTeam1($resultTeam1, $twitter);

function getTweetsAndCountTeam1($resultTeam1, $twitter)
{	
	if(!empty($resultTeam1))
	{
		foreach($resultTeam1->statuses as $tweet){		
			global $countTeam1;
			$countTeam1++;
		}
		if($resultTeam1->search_metadata && isset($resultTeam1->search_metadata->next_results))
		{
			$getfield = $resultTeam1->search_metadata->next_results;
			$resultTeam1 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json'.$getfield."&until=2014-06-09");
			getTweetsAndCountTeam1($resultTeam1, $twitter);
		}
	}
	
}   



//             Team 2
   
$countTeam2 = 0;
$resultTeam2 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%23mushetnevin&src=typd&count=100');
getTweetsAndCountTeam2($resultTeam2, $twitter);

function getTweetsAndCountTeam2($resultTeam2, $twitter)
{
	if(!empty($resultTeam2))
	{
		foreach($resultTeam2->statuses as $tweet){
			global $countTeam2;
			$countTeam2++;
		}
		if($resultTeam2->search_metadata && isset($resultTeam2->search_metadata->next_results))
		{
			$getfield = $resultTeam2->search_metadata->next_results;
			$resultTeam2 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json'.$getfield."&until=2014-06-09");
			getTweetsAndCountTeam2($resultTeam2, $twitter);
		}
	}

}

$total = $countTeam1 + $countTeam2;
$widthFirst = ($countTeam1 / $total) * 100;
$widthSecond = ($countTeam2 / $total) * 100;
$arr = array('a' => $widthFirst, 'b' => $widthSecond, 'opt1' => $countTeam1, 'opt2' => $countTeam2);

echo json_encode($arr);



   
   // if(!empty($result))
    //{
        //increases the qty of tweets
        //$count = isset($result->statuses) ? count($result->statuses) : 0;
        //print_r($result->search_metadata);
        //if you have more results, performs the query again                                
      /* if($result->search_metadata && isset($result->search_metadata->next_results))
        {
        	echo $result->search_metadata->next_results;
        	$getfield = $result->search_metadata->next_results;
	        $lol = $twitter->get('https://api.twitter.com/1.1/search/tweets.json'.$getfield."&since_id=223");
	        $count += count($lol->statuses);
        }
        
        While($result->search_metadata && isset($result->search_metadata->next_results))
        {

	        	//print_r($result->search_metadata->next_results);
	            //search parameters of the next result
        	$getfield = $result->search_metadata->next_results;
	        $result = $twitter->get('https://api.twitter.com/1.1/search/tweets.json'.$getfield."&until=2014-06-09");
	        $count += count($result->statuses);
        	         
        }  
                
    }


/*
    $firstScore = $_REQUEST['team1'];
    $secondScore = $_REQUEST['team2'];
    $total = $firstScore + $secondScore;
    $widthFirst = ($firstScore / $total) * 100;
    $widthSecond = ($secondScore / $total) * 100;


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garorock CA</title>
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/half-slider.css" rel="stylesheet">
    <meta name="description" content="">
    <meta name="author" content="">
    <script>
        
        $( document ).ready(function() {
              $("#team1").css("width","<?php echo $widthFirst; ?>%");
              $("#team2").css("width","<?php echo $widthSecond; ?>%");   
        });
    </script>
    <style>
        h2{
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://www.rockurlife.net/img/uploads/2014/02/1911965_712843208761128_1243146983_n.jpg');"></div>
            </div>
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
    
    <div class="section-colored" style="margin-top:50px">
        <div class="container">
            <h2>Team 1 :</h2>
            <div class="progress progress-striped" style="margin-top:20px">
                <div class="progress-bar progress-bar-info" id="team1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                </div>
            </div>
        </div>
        
        <div class="container" style="margin-top:30px;height:150px;">
            <h2>Team 2 :</h2>
            <div class="progress progress-striped" style="margin-top:20px">
                <div class="progress-bar progress-bar-success" id="team2" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
*/?>