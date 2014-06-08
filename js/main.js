$(document).ready(function() {
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
