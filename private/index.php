<!DOCTYPE html>
<html lang="en">
<?php 
	include "../php/showUser.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garorock CA</title>
    
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/main.js"></script>
    
    <link href="../css/half-slider.css" rel="stylesheet">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <?php
        echo '<script> var MyUsers = "'.getAllUsers().'" </script>';
    ?>
    <script>
        
        var csv= {
            usersInCSV : Array(),
            getAllUsers:function(){
                var finalUsers = new Array();
                var userLine = new Array();
                
                userLine = MyUsers.split('NEWLINE');
                for(var i = 0; i < userLine.length; i++){
                    finalUsers[i] = userLine[i].split(';');
                }
                csv.usersInCSV = finalUsers;
            },
            kickThisOne:function(e){
                var copy = csv.usersInCSV;
                var cpt = 0;
                for(var i = 0; i < csv.usersInCSV.length; i++){
                    if( csv.usersInCSV[i][1] != e){
                        copy[cpt] = csv.usersInCSV[i];
                        cpt++;
                    }
                }
                csv.usersInCSV = copy;
            },
            writeInFile:function(){
                var cleaner = new XMLHttpRequest();
                cleaner.open('POST', '../php/csvCleaner.php');
                var form = new FormData();
                cleaner.upload.onprogress = function(event) {
                    if (event.lengthComputable) {
                    }
                }

                cleaner.onreadystatechange = function() {
                    if (cleaner.readyState == 4) {
                            // state OK
                    }
                }
                cleaner.send(form);
                
                console.log(csv.usersInCSV)
                for(var i = 0; i < (csv.usersInCSV.length - 2); i++){
                    if (csv.usersInCSV[i][0] === "team1" || csv.usersInCSV[i][0] === "team2" ){
                        console.log('utilisateur '+ i );
                        console.log(csv.usersInCSV[i]);
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', '../php/csvWriter.php');
                        var form = new FormData();

                        var idtwitter = csv.usersInCSV[i][1];
                        var name = csv.usersInCSV[i][2];;
                        var team = csv.usersInCSV[i][0];;
                        form.append('idtwitter', idtwitter);
                        form.append('name', name);
                        form.append('team', team);

                        xhr.upload.onprogress = function(event) {
                            if (event.lengthComputable) {
                            }
                        }

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState == 4) {
                                    // state OK
                            }
                        }
                        xhr.send(form);
                    }
                    else{
                        i++;
                    }
                }
                location.reload();
            },
            view:function(){

            },
            kickSomeOne:function(e){
                csv.getAllUsers();
                csv.kickThisOne(e);
                csv.writeInFile();
                csv.view();
            }
        }
        
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
                    <table class="table table-striped">
                        <thead> 
                            <tr>
                                <th>Equipe</th>
                                <th>Nom</th>
                                <th>ID Twitter</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
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
