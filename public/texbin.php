<?php
include '../app/texbin.php';

if( isset( $_POST['mode'] ) )
{
	switch( $_POST['mode'] )
	{
		case 'internal':
			TeXBin::processTeX();
			break;
	}
}

?>