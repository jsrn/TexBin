<?php

class TeXBin
{
	function processTeX()
	{
		$rawTex = $_POST['tex'];
		$newTexFile = time() . '.tex'; 
		$texWriter = fopen($newTexFile, 'w') or die("can't open file");

		fwrite($texWriter, $rawTex);
	    fflush($texWriter);
	}

	function getPDF( $filename )
	{
		header( "Content-type: application/pdf" );
	    echo( file_get_contents( "$filename.pdf" ) );
	}

	function deletePDF( $filename )
	{
		unlink("$filename.pdf");
	}
}

?>