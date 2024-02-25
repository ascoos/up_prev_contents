<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     	: 24.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: Up Previous Contents 
 * @subpackage         	: Parameters manager file (Administration Side only)
 * @source             	: /[BLOCKS PATH]/up_prev_contents/params.php
 * @fileNo				: 4
 * @version            	: 1.0.1
 * @created            	: 2012-08-06 20:00:00 UTC+3
 * @updated            	: 2024-02-25 12:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: Freeware
 * @since 				: 24.0.0
 */

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

global $cms_site, $ASCOOS, $my, $objDatabase, $apps_path;

require_once($apps_path."/articles/languages/".$ASCOOS['alang']->adminfile.".php");
$lngArticleTypes = new TArticleLanguage;


function getCategories()
{
	global $cms_site, $ASCOOS, $my, $objDatabase;

	$where = array();
	$where[] = "owner = 'articles'";
	$where[] = "groupid <= ".$my->groupid;
  	$where[] = "published=1";

	$query = "SELECT cat_id, title"
		. "\nFROM #__categories"
	   	. (count( $where ) ? "\nWHERE " . implode( ' AND ', $where ) : "")
		. "\n ORDER BY cat_id ASC"
	;

	$objDatabase->setSQLQuery( $query );
	$rows = $objDatabase->getObjects();
	unset($where);

	$arr = array();
	foreach ($rows as $row)	$arr[$row->cat_id] = ascoos_langCorrectItem( $row->title, 'topic', true );
	return $arr;
}


$ASCOOS['extraParamFields']['ArticleTypes'] = $lngArticleTypes->article_types;
$ASCOOS['extraParamFields']['ArticleCategories'] = getCategories();
$ASCOOS['extraParamFields']['ArticleExceptCategories'] = getCategories();

unset ($lngArticleTypes);
?>