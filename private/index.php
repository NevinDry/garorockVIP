<!DOCTYPE html>
<html lang="en">
<?php 
	include "../php/user.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garorock CA</title>
    
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    
    <link href="../css/half-slider.css" rel="stylesheet">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../js/mainPrivate.js"></script>


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
        <div class="section-colored" style="margin-top:30px">
        <div class="container">
            	<div class="col-xs-6">
            		<label>Hashtag (sans le # ni ponctuation) :</label><input type="text" id="hash1" class="form-control" placeholder="Hashtag du concours">
        			<input class="btnPrivate" type="submit" value="Changer">
        		</div>
        </div>
        </div>

            <div style="display : none" class="success">
            	<span class="label label-success">Changement Resussit !</span><br/>
            </div>
            <div style="display : none" class="danger">
            	<span class="label label-danger"> Erreur lors du changement ! </span><br/>
            </div>
    
    <div class="section-colored" style="margin-top:80px">
        <div class="container">
            <div class="row">
                    <table class="table table-striped">
                        <thead> 
                            <tr>
                                <th>Equipe</th>
                                <th>Nom</th>
                                <th>ID Twitter</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="userOnTable">
                        <?php
                            drawTable();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
	</div>
	
</body>

</html>
