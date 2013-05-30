<?php

class TeXBin
{
	function processTeX()
	{
		$rawTex = $_POST['tex'];

		$filename = time();

		$newTexFile = "$filename.tex"; 

		$texWriter = fopen($newTexFile, 'w') or die("can't open file");

		fwrite($texWriter, $rawTex);

	    fflush($texWriter);

	    fclose($texWriter);

	    exec("C:/Progra~2/miktex~1.9/miktex/bin/pdflatex.exe " . $newTexFile);

	    $pdfFile = "$filename.pdf";

	    TeXBin::cleanUp( $filename );
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

	function cleanUp( $filename )
	{
		unlink( "$filename.log" );
		unlink( "$filename.aux" );
		unlink( "$filename.tex" );
	}
}

?>