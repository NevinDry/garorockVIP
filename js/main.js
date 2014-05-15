$(document).ready(function() {
	$( ".btn" ).click(function() {
		console.log("tamere");
		var team = $( "input:radio[name=optionsRadios]:checked" ).val();
		console.log(team);
		var nom = $( "#nom" ).val();
		console.log(nom);
		var mail = $("#mail").val();
		console.log(mail);
         $.ajax({
	         type: "GET",
	         url:"php/user.php",
	         data: "mail="+mail+"&nom="+nom+"&team="+team,
	         success: function(msg){
	        	 $(".response").append(msg);
	             console.log("reussit");
	         }
	     });
	});
});
