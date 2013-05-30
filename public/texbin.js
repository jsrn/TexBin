function sendTeX()
{
	var tex = $("#tex-field").val();
	$.post(
		"controller.php",
		{ tex: tex }
		);
}