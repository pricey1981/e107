<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Plugin - Banner
 *
*/
if (!defined('e107_INIT')) { exit; }
if (!e107::isInstalled('banner')) 
{
	return;
}

include_lan(e_PLUGIN.'banner/languages/'.e_LANGUAGE.'admin_banner.php');
$ns->tablerender(BNRLAN_HELP_01, BNRLAN_HELP_02);

?>
