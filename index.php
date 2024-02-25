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
 * @subpackage         	: Main file
 * @source             	: /[BLOCKS PATH]/up_prev_contents/index.php
 * @fileNo				: 5
 * @version            	: 1.0.1
 * @created            	: 2012-08-06 20:00:00 UTC+3
 * @updated            	: 2024-02-25 12:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: Freeware
 * @since 				: 24.0.0
 */


defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

global $cms_site, $objDatabase, $objLang, $ASCOOS, $app, $my, $option, $task, $aid, $objDual;

if ( ($option == 'articles') && ($task == 'view') )
{
	// ID of the current article
	$article_id 	= $aid;

	// Get Block Parameters
	$count 			= $block->getParam('int', 'count', 1 );					// Number of articles
	$strLength 		= $block->getParam('int', 'str_length', 250 );			// Maximum text length
	$promote		= $block->getParam('bool', 'promote', false );			// Promotion. Text display of the manufacturer
	$theme			= $block->getParam('lstr', 'theme','default' );			// Section Theme
	$type 			= $block->getParam('lstr', 'type', '');					// Types of Articles
	$cat_ids 		= $block->getParam('lstr', 'cat_ids', '' );				// Categories will be included
	$except_cat_ids = $block->getParam('lstr', 'except_cat_ids', '' ); 		// Categories to be excluded
	$animation		= $block->getParam('lstr', 'animation','fade' );		// Effects Template
	$corner 		= $block->getParam('lstr', 'corner', 'right' );			// Viewing angle
	$element		= $block->getParam('str', 'element', '' );				// Opening Displacement Data
	$percent 		= $block->getParam('int', 'percent', 75 );				// Percentage of displaced position (%)
	$width 			= $block->getParam('int', 'width', 460 );				// Frame Length (pixels)
	$side 			= $block->getParam('int', 'side', 10 );					// Distance frame corners (pixels)
	$target			= $block->getParam('int', 'target', 0 );				// Open link in new window?
	$show_btn_close	= $block->getParam('bool', 'show_btn_close', false );	// Show icon closing?

	
	// Load Block Theme
	$block->loadTheme($theme);
	
	/**
	 * Get current article in the current language
	 */
	$query = "SELECT id, article_id, created FROM #__articles WHERE article_id=".$article_id." AND lang_id = ".$ASCOOS['lang']->id." LIMIT 1";
	$objDatabase->setSQLQuery( $query );
	$current_article = $objDatabase->getAssoc();
	unset($query);


	/**
	 * Get Previous Articles in the current language
	 */
	if ($type != '') $where[] = "type IN (".$type.")";
	if ($cat_ids != '') $where[] = "cat_id IN (".$cat_ids.")";
	if ($except_cat_ids != '') $where[] = "cat_id NOT IN (".$except_cat_ids.")";
	$where[] = "lang_id = ".$ASCOOS['lang']->id;
	$where[] = "published = 1";
	$where[] = "groupid <= ".$my->groupid;
	$where[] = "id < ".$current_article['id'];
	$where[] = "created <= ".$current_article['created'];
	
	$query = "SELECT article_id, title, intro_doc, access, groupid, created, created_by"
		. "\nFROM #__articles"
		. (count( $where ) ? "\nWHERE " . implode( ' AND ', $where ) : "")
		. "\nORDER BY created DESC, article_id DESC"
		. "\nLIMIT ".$count;
	$objDatabase->setSQLQuery( $query );
	$prev_articles = $objDatabase->getAssocs();
	unset($query);
		

	/**
	 * If exists articles
	 */
	if (count($prev_articles) > 0)
	{		
		$app->addScriptFromFile($cms_site."/themes/blocks/fronts/up_prev_contents/script.js", true);		
		$arr = array();
		$script = "";
		
		$arr[] = "'display':'".($animation == 'flyout'? 'block':'none')."'";		
		$arr[] = "'bottom':'".($side + 10)."px'";
		$arr[] = "'width':'".($width)."px'";

		if ( $animation == 'flyout' ) {
			$arr[] = "'".$corner."':'".-($width + $side + 50)."px'";
		} elseif ( $animation == 'fade' ) {
			$arr[] = "'right':'".($side + 10)."px'";		
		}
		$css = implode(', ', $arr);
		unset($arr);


		$script .= "jQuery('.block-up-prev-content-".$theme."').css({".$css."}).upPrevContent({ thisID: '.block-up-prev-content-".$theme."', animation: '".$animation."', corner: '".$corner."', percent: ".$percent.", element: '".$element."', width: ".$width.", side: ".$side.", target: ".$target."});";		
		$app->addJAScript($script); // Insert Inline Javascript
	?>
<div class="block-up-prev-content-<?php echo $theme; ?>">
	<?php if ($block->getVar('show_title')) { ?>
	<div class="header">
		<h2><?php echo $block->getTitle(); ?></h2>
        <?php if ($show_btn_close) echo "<h3 class=\"close\">".$block->getLangVar('close')."</h3>"; ?>
    </div>
    <div class="clear"></div>
    <?php } ?>

	<div class="text">
    <?php
		foreach ($prev_articles as $prev)
		{
			// If we have access right to read the article
			if ($objDual->checkAccess($prev))
			{
				echo "<div class=\"prev-article\">";
				echo "<h4><a href=\"".asc2seo($cms_site."/p=articles&amp;t=view&amp;id=".$prev['article_id'])."\" rel=\"prev\">".$prev['title']."</a></h4>";
       			echo ($utf8->strlen($prev['intro_doc']) > $strLength) ? $utf8->substr(ascoos_clearText($prev['intro_doc']), 0 , $strLength).'...' : ascoos_clearText($prev['intro_doc']);
				echo "</div>";
			}
		}
	?>
    </div>   
    <div class="clear"></div>
	<?php if ($promote) echo "<div class=\"promote\"><small>".$block->getLangVar('promote')."</small></div>"; ?>
</div>

	<?php 
	} 
}
?>