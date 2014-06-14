
$(document).ready(function() {	
	
	
	$( ".btnPrivate" ).click(function() {
		var hash1 = $( "#hash1" ).val();
		console.log(hash1);
		if (checkAllFieldsOk()){
         $.ajax({
	         type: "GET",
	         url:"../php/changeHashtag.php",
	         data: "hash1="+hash1,
	         success: function(msg){
	        	 console.log(msg);
	        	$(".success").show(1000).delay( 5000 );
	        	$(".success").hide(1000);	        	 
	         }
	     });
		}else{
			colorUndefinedValues();
			$(".danger").show(1000).delay( 5000 );
        	$(".danger").hide(1000);
		}
	});
	
	
	$( ".remUser" ).click(function() {
		var userToRemove = $(this).val();
		console.log(userToRemove);
		$.ajax({
	         type: "GET",
	         url:"../php/user.php",
	         data: "userToRemove="+userToRemove,
	         success: function(msg){
	        	 $(".userOnTable").html(msg);
	        	 
	        	$(".success").show(1000).delay( 5000 );
	        	$(".success").hide(1000);
	        	
	         }
	     });
		
	});
	
	
	
	
	
	
	
	
});

function checkAllFieldsOk(){
    if($("#hash1").val() === "" || $("#hash1").val() === "undefined")
            return false;

    return true;
}
function colorUndefinedValues(){
    if($("#hash1").val() === "" || $("#1").val() === "undefined")
            $("#hash1").addClass("borderRed");

}