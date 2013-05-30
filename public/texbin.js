function sendTeX()
{
	var tex = $("#tex-field").val();
	
	$('<form action="controller.php" style="display: none;" method="POST" target="_blank"><textarea name="tex">' + tex + '</textarea></form>').appendTo('body').submit();
}