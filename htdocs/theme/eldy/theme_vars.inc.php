<?php
/* Copyright (C) 2004-2017	Laurent Destailleur		<eldy@users.sourceforge.net>
 * Copyright (C) 2006		Rodolphe Quiedeville	<rodolphe@quiedeville.org>
 * Copyright (C) 2007-2017	Regis Houssin			<regis.houssin@inodbox.com>
 * Copyright (C) 2011		Philippe Grand			<philippe.grand@atoo-net.com>
 * Copyright (C) 2012		Juanjo Menent			<jmenent@2byte.es>
 * Copyright (C) 2018       Ferran Marcet           <fmarcet@2byte.es>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FI8TNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 *	\file       htdocs/theme/eldy/theme_vars.inc.php
 *	\brief      File to declare variables of CSS style sheet
 *  \ingroup    core
 *
 *  To include file, do this:
 *              $var_file = DOL_DOCUMENT_ROOT.'/theme/'.$conf->theme.'/theme_vars.inc.php';
 *              if (is_readable($var_file)) include $var_file;
 */

global $theme_bordercolor, $theme_datacolor, $theme_bgcolor, $theme_bgcoloronglet;
$theme_bordercolor = array(235, 235, 224);
$theme_datacolor = array(array(137, 86, 161), array(60, 147, 183), array(250, 190, 80), array(80, 166, 90), array(190, 190, 100), array(91, 115, 247), array(140, 140, 220), array(190, 120, 120), array(115, 125, 150), array(100, 170, 20), array(150, 135, 125), array(85, 135, 150), array(150, 135, 80), array(150, 80, 150));
if (!defined('ISLOADEDBYSTEELSHEET')) {	// File is run after an include of a php page, not by the style sheet, if the constant is not defined.
	if (!empty($conf->global->MAIN_OPTIMIZEFORCOLORBLIND)) { // user is loaded by dolgraph.class.php
		if ($conf->global->MAIN_OPTIMIZEFORCOLORBLIND == 'flashy') {
			$theme_datacolor = array(array(157, 56, 191), array(0, 147, 183), array(250, 190, 30), array(221, 75, 57), array(0, 166, 90), array(140, 140, 220), array(190, 120, 120), array(190, 190, 100), array(115, 125, 150), array(100, 170, 20), array(150, 135, 125), array(85, 135, 150), array(150, 135, 80), array(150, 80, 150));
		} else {
			// for now we use the same configuration for all types of color blind
			$theme_datacolor = array(array(248, 220, 1), array(9, 85, 187), array(42, 208, 255), array(0, 0, 0), array(169, 169, 169), array(253, 102, 136), array(120, 154, 190), array(146, 146, 55), array(0, 52, 251), array(196, 226, 161), array(222, 160, 41), array(85, 135, 150), array(150, 135, 80), array(150, 80, 150));
		}
	}
}

$theme_bgcolor = array(hexdec('F4'), hexdec('F4'), hexdec('F4'));
$theme_bgcoloronglet = array(hexdec('DE'), hexdec('E7'), hexdec('EC'));

// Colors
$colorbackhmenu1 = '38,60,92'; // topmenu
$colorbackvmenu1 = '250,250,250'; // vmenu
$colortopbordertitle1 = '215,215,215'; // top border of title
$colorbacktitle1 = '233,234,237'; // title of tables,list
$colorbacktabcard1 = '255,255,255'; // card
$colorbacktabactive = '234,234,234';
$colorbacklineimpair1 = '255,255,255'; // line impair
$colorbacklineimpair2 = '255,255,255'; // line impair
$colorbacklinepair1 = '250,250,250'; // line pair
$colorbacklinepair2 = '250,250,250'; // line pair
$colorbacklinepairhover = '230,237,244'; // line hover
$colorbacklinepairchecked = '230,237,244'; // line checked
$colorbacklinebreak = '248,247,244'; // line break
$colorbackbody = '255,255,255';
$colorbackmobilemenu = '248,248,248';
$colortexttitlenotab = '35,135,140'; // 150,90,121 140,80,10 or 10,140,80  #875a7b  green=0,123,140, violet: 0,50,120
$colortexttitlenotab2 = '100,0,100'; // 150,90,121 140,80,10 or 10,140,80  #875a7b  green=0,123,140, violet: 0,50,120
$colortexttitle = '40, 40, 60';
$colortexttitlelink = '10, 20, 100';
$colortext = '0,0,0';
$colortextlink = '10, 20, 100';
$listetotal = '136,136,136'; // #888888
$inputbackgroundcolor = '255,255,255'; // #FFF
$inputbordercolor = '0,0,0';  // rgba(0,0,0,.2)
$oddevencolor = '32,32,32';  // #202020
$colorboxstatsborder = '224,224,224';  // #e0e0e0
$dolgraphbg = '255,255,255'; // rgba(255,255,255,0)
$fieldrequiredcolor = '64,0,48'; //#400030
$colortextbacktab = '0,0,0;
$colorboxiconbg = '238,238,238';   //#eee
$refidnocolor = '68,68,68';   //#444
$tableforfieldcolor = '102,102,102';   //#666
$amountremaintopaycolor = '136,0,0';   //#880000
$amountpaymentcomplete = '0,136,0';   //#008800
$amountremaintopaybackcolor = 'none';   //none
$productlinestockod = '0,34,0';   //#002200
$productlinestocktoolow = '136,68,0';   //#884400
$infoboxmoduleenabledbgcolor  = 'linear-gradient(0.4turn, #fff, #fff, #fff, #e4efe8)';
$toolTipBgColor = '255, 255, 255';
$toolTipFontColor = '51,51,51';

$fontsize = '0.90em';
$fontsizesmaller = '0.75em';
$topMenuFontSize = '1.1em';

// text color
$textSuccess   = '#28a745';
$colorblind_deuteranopes_textSuccess = '#37de5d';
$textWarning   = '#bc9526'; // See $badgeWarning
$textDanger    = '#af4705'; // See $badgeDanger
$colorblind_deuteranopes_textWarning = $textWarning; // currently not tested with a color blind people so use default color


// Badges colors
$badgePrimary   = '#007bff';
$badgeSecondary = '#aaaabb';
$badgeInfo      = '#aaaabb';
$badgeSuccess   = '#55a580';
$badgeWarning   = '#bc9526'; // See $textWarning bc9526
$badgeDanger    = '#af4705'; // See $textDanger
$badgeDark      = '#343a40';
$badgeLight     = '#f8f9fa';

// badge color ajustement for color blind
$colorblind_deuteranopes_badgeSuccess   = '#37de5d'; //! text color black
$colorblind_deuteranopes_badgeSuccess_textColor7 = '#000';
$colorblind_deuteranopes_badgeWarning   = '#e4e411';
$colorblind_deuteranopes_badgeDanger    = $badgeDanger; // currently not tested with a color blind people so use default color

/* default color for status : After a quick check, somme status can have oposite function according to objects
*  So this badges status uses default value according to theme eldy status img
*  TODO: use color definition vars above for define badges color status X -> exemple $badgeStatusValidate, $badgeStatusClosed, $badgeStatusActive ....
*/
$badgeStatus0 = '#cbd3d3'; // draft
$badgeStatus1 = '#bc9526'; // validated
$badgeStatus1b = '#bc9526'; // validated
$badgeStatus2 = '#9c9c26'; // approved
$badgeStatus3 = '#bca52b';
$badgeStatus4 = '#25a580'; // Color ok
$badgeStatus4b = '#25a580'; // Color ok
$badgeStatus5 = '#cad2d2';
$badgeStatus6 = '#cad2d2';
$badgeStatus7 = '#25a580';
$badgeStatus8 = '#993013';
$badgeStatus9 = '#e7f0f0';
$badgeStatus10 = '#993013';
$badgeStatus11 = '#15a540';

// status color ajustement for color blind
$colorblind_deuteranopes_badgeStatus4 = $colorblind_deuteranopes_badgeStatus7 = $colorblind_deuteranopes_badgeSuccess; //! text color black
$colorblind_deuteranopes_badgeStatus_textColor4 = $colorblind_deuteranopes_badgeStatus_textColor7 = '#000';
$colorblind_deuteranopes_badgeStatus1 = $colorblind_deuteranopes_badgeWarning;
$colorblind_deuteranopes_badgeStatus_textColor1 = '#000';

if (!empty($_GET['darkmode']) || (!empty($conf->global->THEME_DARKMODEENABLED) && $conf->global->THEME_DARKMODEENABLED == 2)){
    $colorbackhmenu1 = '29,30,32'; // topmenu
    $colorbackvmenu1 = '43,44,46'; // vmenu
    $colortopbordertitle1 = '40,40,40'; // top border of title
    $colorbacktitle1 = '43,45,47'; // title of tables,list
    $colorbacktabcard1 = '29,30,32'; // card
    $colorbacktabactive = '220,220,220';
    $colorbacklineimpair1 = '56,57,61'; // line impair
    $colorbacklineimpair2 = '43,45,47'; // line impair
    $colorbacklinepair1 = '56,57,61'; // line pair
    $colorbacklinepair2 = '43,45,47'; // line pair
    $colorbacklinepairhover = '43,45,47'; // line hover
    $colorbacklinepairchecked = '14,92,205'; // line checked
    $colorbacklinebreak = '16,16,16'; // line break
    $colorbackbody = $colorbacktabcard1; /* colorbacktabcard1 m ust be same than colorbackbody */
    $colorbackmobilemenu = '8,8,8';
    $colortexttitlenotab = '220,220,220'; // 150,90,121 140,80,10 or 10,140,80  #875a7b  green=0,123,140, violet: 0,50,120
    $colortexttitlenotab2 = '220,220,220'; // 150,90,121 140,80,10 or 10,140,80  #875a7b  green=0,123,140, violet: 0,50,120
    $colortexttitle = '200,255,255';
    $colortexttitlelink = '67,144,220';
    $colortext = '220,220,220';
    $colortextlink = '67,144,220';
    $toolTipBgColor = '#2b2d2f'; //'43,45,47';
    $toolTipFontColor = '#dcdcdc'; // '220,220,220';
    $listetotal = '245, 83, 158';
    $inputbackgroundcolor = '43,45,47'; // #2b2d2f;
    $inputbordercolor = '220,220,220';
    $oddevencolor = '220,220,220';
    $colorboxstatsborder = '65,100,138';
    $dolgraphbg = '29,30,32'; // #1d1e20;
    $fieldrequiredcolor = '250,183,59';
    $colortextbacktab = '220,220,220';
    $colorboxiconbg = '36,38,39';
    $refidnocolor = '220,220,220';
    $tableforfieldcolor = '220,220,220';
    $amountremaintopaycolor = '252,84,91';
    $amountpaymentcomplete = '101,184,77';
    $amountremaintopaybackcolor = '245,130,46';
    $infoboxmoduleenabledbgcolor = 'linear-gradient(0.4turn, #000, #000, #000, #274231)';
        
}
