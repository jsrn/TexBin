<?php

function getPDF( $filename )
{
	header( "Content-type: application/pdf" );
    echo( file_get_contents( "$filename.pdf" ) );
}

function deletePDF( $filename )
{
	unlink("$filename.pdf");
}

?>