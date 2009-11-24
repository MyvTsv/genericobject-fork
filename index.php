<?php
/*
 * @version $Id: HEADER 7762 2009-01-06 18:30:32Z moyo $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2009 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Original Author of file:
// Purpose of file:
// ----------------------------------------------------------------------

define('GLPI_ROOT', '../..'); 
include (GLPI_ROOT . "/inc/includes.php"); 

commonHeader($LANG['genericobject']['title'][1],$_SERVER['PHP_SELF'],"plugins","genericobject");

echo "<table class='tab_cadre_fixe'>";
echo "<tr class='tab_bg_2'><th>" . $LANG["genericobject"]["title"][1]."</th></tr>";

$datas = plugin_genericobject_getAllTypes();
	  	
foreach($datas as $ID => $value)
{
	if (plugin_genericobject_haveRight($value["name"],'r'))
		echo "<tr class='tab_bg_1'><td align='center'><a href=\"./front/plugin_genericobject.search.php?device_type=".$value["device_type"]."\">".plugin_genericobject_getObjectLabel($value["name"])."</a></td></tr>";
}
	

echo "</table></div>";

commonFooter();
?>
