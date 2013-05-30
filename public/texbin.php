<?php
include '../app/texbin.php';

if( isset( $_POST['tex'] ) && $_POST['tex'] != '' )
{
	TeXBin::processTeX();
}
else
{
	die( "Error: Post variable 'tex' must contain well formatted TeX markup." );
}

?>