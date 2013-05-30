<?php

class TeXBin
{
	function processTeX()
	{
		$rawTex = $_POST['tex'];

		if( isset($_POST['repl']) && $_POST['repl'] != '')
		{
			$rawTex = $this->processReplacements( $rawTex );
		}

		$filename = time();

		$newTexFile = "$filename.tex"; 

		$texWriter = fopen($newTexFile, 'w') or die("can't open file");

		fwrite($texWriter, $rawTex);

	    fflush($texWriter);

	    fclose($texWriter);

	    exec("C:/Progra~2/miktex~1.9/miktex/bin/pdflatex.exe " . $newTexFile);

	    $pdfFile = "$filename.pdf";

		$this->getPDF( $filename );

	    $this->cleanUp( $filename );
	}

	function processReplacements( $tex )
	{
		$parts = json_decode($_POST['repl']);

		foreach( $parts as $part )
		{
			$tex = str_replace( '$'.$part->key, $part->val, $tex);
		}

		return $tex;
	}

	function getPDF( $filename )
	{
		if( file_exists( "$filename.pdf" ) )
		{
			header( "Content-type: application/pdf" );
	    	echo( file_get_contents( "$filename.pdf" ) );
		}
		else
		{
			$this->getErrorLog( $filename );
		}
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

	function getErrorLog( $filename )
	{
		$lines = file( "$filename.log" );

		foreach ($lines as $line) {
			echo "$line<br>";
		}
	}
}

?>