function sendTeX()
{
	var tex = $("#tex-field").val();
	
	$('<form action="texbin.php" style="display: none;" method="POST" target="_blank">'
		+'<textarea name="tex">' + tex + '</textarea>'
		+'<input name="mode" value="internal">'
		+'</form>').appendTo('body').submit();
}