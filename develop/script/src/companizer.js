$(document).ready(function() {
	$("#saveprofil, #pwdgroup, #pwdreplygroup").hide();
$("#editprofil").click(function(){
	if($(document).find("input").prop('disabled')){
	$(document).find("input").prop('disabled', false);
	$("#editprofil").text("Abbrechen");
	$("#saveprofil, #pwdgroup, #pwdreplygroup").show();
	}
	
	else{
		$(document).find("input").prop('disabled', true);
		$("#editprofil").text("Bearbeiten");
		$("#saveprofil, #pwdgroup, #pwdreplygroup").hide();
		
	}
})
});