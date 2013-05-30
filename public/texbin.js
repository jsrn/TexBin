function sendTeX()
{
	var tex = $("#tex-field").val();
	alert(tex);
	$.post(
		"controller.php",
		{ tex: tex }
		);
}