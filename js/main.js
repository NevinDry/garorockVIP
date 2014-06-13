


$(document).ready(function() {
	
	function f() {
	    console.log( "hi" );
	    $.ajax({
	         type: "GET",
	         url:"php/scores.php",
	         success: function(msg){
	        	 console.log(msg);
	        	 var parsedJSON = eval('('+msg+')');
	        	 var teamA=parsedJSON.a;
	        	 var teamB=parsedJSON.b;
	        	 var score1 = parsedJSON.opt1;
	        	 var score2 = parsedJSON.opt2;
	        	 
	        	 console.log('scoreA:'+score1+' teamB:'+score2);
	        	 
	        	 console.log('teamA:'+teamA+' teamB:'+teamB);
	        	 
	        	 $(".score1").width(teamA); 
	             $(".score2").width(teamB);
	             $(".score1").html("Score Equipe 1 : <strong>"+score1+" votes<strong>");
	             $(".score2").html("Score Equipe 2 : <strong>"+score2+" votes<strong>");
	        	 
	             console.log("reussit");
	         }
	     });
	        setTimeout( f, 10000 );
	}
	f();
	
	$( ".btn" ).click(function() {
		var team = $( "input:radio[name=optionsRadios]:checked" ).val();
		console.log(team);
		var nom = $( "#nameUser" ).val();
		console.log(nom);
		var twitName = $("#idTwitter").val();
		console.log(twitName);
		if (checkAllFieldsOk()){
         $.ajax({
	         type: "GET",
	         url:"php/user.php",
	         data: "twitName="+twitName+"&nom="+nom+"&team="+team,
	         success: function(msg){
	        	$(".success").show(1000).delay( 5000 );
	        	$(".success").hide(1000);
	        	 if(team == "team1"){
	        		 $("#team1").append(msg);
	        	 }else{
	        		 $("#team2").append(msg);
	        	 }
	        	 
	             console.log("reussit");
	         }
	     });
		}else{
			colorUndefinedValues();
			$(".danger").show(1000).delay( 5000 );
        	$(".danger").hide(1000);
		}
	});
});

function checkAllFieldsOk(){
    if($("#idTwitter").val() === "" || $("#idTwitter").val() === "undefined")
            return false;
    if($("#nameUser").val() === "" || $("#nameUser").val() === "undefined")
            return false;
    if ($('input[name=optionsRadios]:checked').val() === "undefined")
            return false;

    return true;
}
function colorUndefinedValues(){
    if($("#idTwitter").val() === "" || $("#idTwitter").val() === "undefined")
            $("#idTwitter").addClass("borderRed");

    if($("#nameUser").val() === "" || $("#nameUser").val() === "undefined")
            $("#nameUser").addClass("borderRed");

}

function sleep(millis, callback) {
    setTimeout(function()
            { callback(); }
    , millis);
}

