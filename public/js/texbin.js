var variableReplacement = false;

function sendTeX()
{
	var tex = $("#tex-field").val();
	
	$('<form action="texbin.php" style="display: none;" method="POST" target="_blank">'
		+'<textarea name="tex">' + tex + '</textarea>'
		+'</form>').appendTo('body').submit();
}

function toggleVarReplacement()
{
	variableReplacement = !variableReplacement;

	if( variableReplacement )
	{
		$("#var-rep-button").html("VAR REP: ON");
	}
	else
	{
		$("#var-rep-button").html("VAR REP: OFF");
	}
}