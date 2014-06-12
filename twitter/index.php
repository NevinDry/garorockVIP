<?php
require('twitteroauth.php'); // path to twitteroauth library

$consumerkey = 'CW70T03uq8z1eBgKwJ5hXEnfg';
$consumersecret = 'JJrwVgqYZ4Njk4ttBsOFoljqChYVoyn11A6BQ2OSxVrKdMFH2T';
$accesstoken = '283720162-gguI93VLXtam0sXABy23JB4iP6ZHwCu6M4tjwZlL';
$accesstokensecret = '5dhYcGFfdEy5H6uFvXe2VTU51HxpigBB0DjKeuuhN50jS';

$twitter = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$result = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=hearthstone&count=100');
    if(!empty($result))
    {
        //increases the qty of tweets
        $count = isset($result->statuses) ? count($result->statuses) : 0;
        //print_r($result->search_metadata);
        //if you have more results, performs the query again                                
      /* if($result->search_metadata && isset($result->search_metadata->next_results))
        {
        	echo $result->search_metadata->next_results;
        	$getfield = $result->search_metadata->next_results;
	        $lol = $twitter->get('https://api.twitter.com/1.1/search/tweets.json'.$getfield."&since_id=223");
	        $count += count($lol->statuses);
        }
         */ 
        While($result->search_metadata && isset($result->search_metadata->next_results))
        {

	        	//print_r($result->search_metadata->next_results);
	            //search parameters of the next result
        	$getfield = $result->search_metadata->next_results;
	        $result = $twitter->get('https://api.twitter.com/1.1/search/tweets.json'.$getfield."&until=2014-06-09");
	        $count += count($result->statuses);
        	         
        }         
    }

    
    echo "Counter: ".$count;
