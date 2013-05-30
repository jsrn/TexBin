var variableReplacement = false;

function sendTeX()
{
	$("#post-tex").val( $("#tex-field").val() );
	if( variableReplacement ){
		$("#post-repl").val( buildReplacementsObject() );
	} else {
		$("#post-repl").val( '' );
	}
	$("#post-form").submit();
}

function toggleVarReplacement()
{
	variableReplacement = !variableReplacement;

	if( variableReplacement )
	{
		$("#var-rep-button").html("VAR REP: ON");
		$("#replacement-fields").slideDown("fast");
	}
	else
	{
		$("#var-rep-button").html("VAR REP: OFF");
		$("#replacement-fields").slideUp("fast");
	}
}

function buildReplacementsObject()
{
	var count = 0;
	var key, val;
	var obj = new Object();
	var array = new Array();

	$("#replacement-fields input").each(function( index ) {
		var v = $(this).val();

		if( v != '')
		{
			switch( count )
			{
				case 0:
					key = v;
					count++;
					break;
				case 1:
					val = v;
					count = 0;
					var obj = new Object();
					obj.key = key;
					obj.val = val;
					array.push(obj);
					break;
			}
		}
	});

	return JSON.stringify(array);
}