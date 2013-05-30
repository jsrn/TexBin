<?php
include '../app/texbin.php';

if( isset( $_POST['tex'] ) && $_POST['tex'] != '' )
{
	$texBin = new TeXBin();
	$texBin->processTeX();
}
else
{
	die( "Error: Post variable 'tex' must contain well formatted TeX markup." );
}

?>