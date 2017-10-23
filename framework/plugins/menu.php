<?php
	require_once("base/php/menu/menu.php");
	
	require "base/sql/menu/bdmenu.php";
	$classedb = "bdmenu";
	$instdb = new $classedb($classes['db']);
	$classes['sql'] = $instdb;
	
	$menu = new menu($classes);
	$smarty->assign('menu',$menu->montaMenu());
?>