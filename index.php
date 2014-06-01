<!DOCTYPE html>
<html lang="en">
<?php 
	include"php/showUser.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garorock CA</title>
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    
    <link href="css/half-slider.css" rel="stylesheet">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
            .leftmain{
                    position: relative;
                    float: left;
                    margin-right: 40px;
                    margin-top: 20px;
            }
            .rightmain{
                    position: relative;
                    float: right;
                    margin-left: 40px;
                    margin-top: 20px;
            }
            b{
                    color: rgb(7, 197, 197);
            }
            .borderRed{
                    border-color:rgb(156, 79, 79) !important;
            }
    </style>
    <script>
        
    </script>

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
    
	<div class="section-colored" style="margin-top:120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>La guerre des Twitts !</h2>
                    <ul>
                        <li>Twittez autant que vous le pouvez pendant un <b>concert</b></li>
                        <li><b>Partagez</b> votre experience avec vos amis</li>
                        <li>Suivez vos scores <b>en direct</b></li>
                        <li>Participez aux concerts dans le <b>carré VIP</b></li>
                        <li>Ne repartez <b>pas</b> chez vous <b>les mains vides</b></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="http://2.bp.blogspot.com/-X023pC0v-hI/UgEaQjH7vQI/AAAAAAAAB5o/9v5-TUjyXNw/s200/Twitter.com_astuces_test_comparaison_sites_echange_followers_tweets_retweets_LikesAnnuaire.png">
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    
	<div class="section-colored" style="margin-top:120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="img/ca.jpg">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Crédit Agricole</h2><br>
					Le crédit agricole vous propose de twitter votre experience au festival Garorock.<br>
					Chaque twitt vous permettra d'amasser des points pour votre équipe, et les équipes gagnantes de chaque soirs seront récompensées.<br>
					Plus le contenu est conséquent, plus vous gagnez de points :
					<ul> 
						<li>Twitt simple : 1 point</li>
						<li>Photo : 2 point</li>
						<li>Vidéo : 3 point</li>	
					</ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

    <div class="section-colored" style="margin-top:120px">
        <div class="container">
            <div class="row">
            	<div class="col-xs-6">
            		<label>Votre Nom :</label><input type="text" id="nameUser" class="form-control">
        		</div>
            	<div class="col-xs-6">
            		<label>Votre @ Twitter :</label><input type="text" id="idTwitter" class="form-control">
        		</div>
            </div>
            
            <div class="row" style="margin-top: 50px;">
            	<div class="col-xs-6" style="text-align:center;">
                	<label >Team 1 </label><br><input type="radio" name="optionsRadios" id="optionsRadios2" value="team1">
            	</div>
            	<div class="col-xs-6" style="text-align:center;">
            		<label >Team 2 </label><br><input type="radio" name="optionsRadios" id="optionsRadios2" value="team2">
        		</div>
            </div>
            <div class="row" style="margin-top: 50px;">
            	<div class="col-xs-12" style="text-align:center;">
            		<input class="btn" type="submit" value="Inscription"">
            	</div>
            </div>
            <div style="display : none" class="success">
            	<span class="label label-success">Inscription Reussie !</span><br/>
            </div>
            
            <div style="border:1px solid #ccc;width: 80%;margin-left:10%;margin-top:100px;"></div>
            
            <div class="row" style="margin-top: 100px;">
            	<div class="col-xs-6">
                	<label style="margin-left:45%;" >Team 1 </label><br>
						<ul style="height:200px;" id="team1">
							<?php getUsers(1); ?>
						</ul>
            	</div>
            	<div class="col-xs-6">
                	<label style="margin-left:45%;" >Team 2 </label><br>
						<ul id="team2">
							<?php getUsers(2); ?>
						</ul>
        		</div>
            </div>
        </div>
    </div>
</body>

</html>
