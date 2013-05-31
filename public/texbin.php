<?php
include '../app/texbin.php';

$texBin = new TeXBin();

if( !$texBin->authenticate() )
{
	die( $texBin->authFailureMessage() );
}

if( isset( $_POST['tex'] ) && $_POST['tex'] != '' )
{
	$texBin->processTeX();
}
else
{
	die( "Error: Post variable 'tex' must contain well formatted TeX markup." );
}

?>