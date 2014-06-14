<?php
require('twitteroauth.php'); // path to twitteroauth library

$consumerkey = 'CW70T03uq8z1eBgKwJ5hXEnfg';
$consumersecret = 'JJrwVgqYZ4Njk4ttBsOFoljqChYVoyn11A6BQ2OSxVrKdMFH2T';
$accesstoken = '283720162-gguI93VLXtam0sXABy23JB4iP6ZHwCu6M4tjwZlL';
$accesstokensecret = '5dhYcGFfdEy5H6uFvXe2VTU51HxpigBB0DjKeuuhN50jS';
$twitter = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);


if (($handle = fopen("../php/users.csv", "r")) !== FALSE) {
	$row = 0;
	while (($data = fgetcsv($handle, 1000, ";")) !== FALSE){
		$users[$row][0] = $data[1];
		$users[$row][1] = $data[2];
		$row++;
	}
	fclose($handle);
}



$countTeam1 = 1;
$countTeam2 = 1;
$resultTeam1 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%23Hearthstone&src=typd&count=100');

getTweetsAndCountTeam1($resultTeam1, $twitter);

function getTweetsAndCountTeam1($resultTeam1, $twitter)
{	
	foreach($resultTeam1->statuses as $tweet){		
		global $countTeam1,$countTeam2, $users, $row;
		for($i = 0; $i<$row; $i++){
			//print_r($tweet->user->screen_name);
			if($tweet->user->screen_name == $users[$i][0]){
				if($users[$i][1] == "team1"){
					$countTeam1++;
				}else{
					$countTeam2++;
				}
			}
		}
	}
	if($resultTeam1->search_metadata && isset($resultTeam1->search_metadata->next_results))
	{
		$getfield = $resultTeam1->search_metadata->next_results;
		$resultTeam1 = $twitter->get('https://api.twitter.com/1.1/search/tweets.json'.$getfield."&until=2014-06-09");
		getTweetsAndCountTeam1($resultTeam1, $twitter);
	}
	
}   



//             Team 2
   

   
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

    */ 