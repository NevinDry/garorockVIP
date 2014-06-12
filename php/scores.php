
<?php 
	$firstScore = 126;
	$secondScore = 42;
	$total = $firstScore + $secondScore;
	$widthFirst = ($firstScore / $total) * 100;
	$widthSecond = ($secondScore / $total) * 100;


	$arr = array('a' => $widthFirst, 'b' => $widthSecond);

    echo json_encode($arr);
?>


<?php
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