<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * configures general layout
 * for detailed layout configuration please refer to the css files
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

/**
 * navi frame
 */
// navi frame width
$GLOBALS['cfg']['NaviWidth']                = 240;

// foreground (text) color for the navi frame
$GLOBALS['cfg']['NaviColor']                = '#fff';

// background for the navi frame
$GLOBALS['cfg']['NaviBackground']           = '#0F0F12';

// foreground (text) color of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerColor']         = '#fff';

// background of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerBackground']    = '#4D29DB';

/**
 * main frame
 */
// foreground (text) color for the main frame
$GLOBALS['cfg']['MainColor']                = '#fff';

// background for the main frame
$GLOBALS['cfg']['MainBackground']           = '#000';

// foreground (text) color of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerColor']       = '#fff';

// background of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerBackground']  = '#AA2AF9';

// foreground (text) color of the marker (visually marks row by clicking on it)
// in browse mode
$GLOBALS['cfg']['BrowseMarkerColor']        = '#fff';

// background of the marker (visually marks row by clicking on it) in browse mode
$GLOBALS['cfg']['BrowseMarkerBackground']   = '#8D57C6';

/**
 * fonts
 */
/**
 * the font family as a valid css font family value,
 * if not set the browser default will be used
 * (depending on browser, DTD and system settings)
 */
$GLOBALS['cfg']['FontFamily']           = 'sans-serif';
/**
 * fixed width font family, used in textarea
 */
$GLOBALS['cfg']['FontFamilyFixed']      = 'monospace';

/**
 * tables
 */
// border
$GLOBALS['cfg']['Border']               = 0;
// table header and footer color
$GLOBALS['cfg']['ThBackground']         = '#2E1F35';
// table header and footer background
$GLOBALS['cfg']['ThColor']              = '#fff';
// table data row background
$GLOBALS['cfg']['BgOne']                = '#2B0060';
// table data row background, alternate
$GLOBALS['cfg']['BgTwo']                = '#2B0042';