<?php

// Copyright © 2005 Frédéric Jaqcuot
// Copyright © 2007-2009 Johan Cwiklinski
//
// This file is part of Galette (http://galette.tuxfamily.org).
//
// Galette is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Galette is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Galette. If not, see <http://www.gnu.org/licenses/>.

/**
 * Affiche une photo de voiture
 *
 * @package    Galette
 *
 * @author     Frédéric Jaqcuot
 * @copyright  2004 Frédéric Jaqcuot
 * @copyright  2007-2008 Johan Cwiklinski
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GPL License 3.0 or (at your option) any later version
 * @version    $Id: picture.php 606 2009-09-20 09:17:50Z trashy $
 * @since      Disponible depuis la Release 0.7
 */

$base_path = '../../';
require_once($base_path . 'includes/galette.inc.php');
require_once('classes/auto_picture.class.php');

if( !$login->isLogged() ){
	header("location: index.php");
	die();
}

if( !$login->isAdmin() ) /** FIXME: these should not be fired when accessing from public pages */
	$id_adh = $login->id;
else
	$id_adh = $_GET['id_adh'];

$picture = new AutoPicture($id_adh);
$picture->display();
?>