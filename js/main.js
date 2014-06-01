$(document).ready(function() {
	$( ".btn" ).click(function() {
		var team = $( "input:radio[name=optionsRadios]:checked" ).val();
		console.log(team);
		var nom = $( "#nameUser" ).val();
		console.log(nom);
		var twitName = $("#idTwitter").val();
		console.log(twitName);
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
	});
});
