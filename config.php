<?php

	$page = (isset($_GET['page']))? $_GET['page'] : '';

	switch($page){
		case 'barang':
			include "page/barang/list.php";
		break;

		case 'barang-tambah':
			include "page/barang/tambah.php";
		break;

		case 'barang-detail':
			include "page/barang/detail.php";
		break;

		case 'barang-edit':
			include "page/barang/edit.php";
		break;
		
		default:
			include "page/dashboard.php";
		break;
	}

?>

