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
 * @subpackage         	: Languages - Greek Languages (el, el-GR)
 * @source             	: /[BLOCKS PATH]/up_prev_contents/languages/en.php
 * @fileNo				: 8
 * @version            	: 1.0.1
 * @created            	: 2012-08-06 20:00:00 UTC+3
 * @updated            	: 2024-02-25 12:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: Freeware
 * @since 				: 24.0.0
 * @translator	       	: Kourtidis George
 * @translatorEmail    	:
 * @translatorSite     	: https://www.youtube.com/@DolceVii
 * @translatorCreated  	: 2012-08-06 20:00:00 UTC+2
 * @translatedUpdated  	:
 */

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

class TBlock_up_prev_contents_Language extends \TObject
{
	public $blockname = "Up Previous Contents";
	public $close = "Close";
	public $promote = "The block it is official extension of <a href=\"http://www.ascoos.com\">Ascoos Cms</a>.";
	

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "DROGIDIS CHRISTOS";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT SOFTWARE";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "The section (Block) that displays a frame containing one or more previous articles relative to the current.";

	public $APL_paramgroup_general_label = "▼ &nbsp; General Parameters";
	public $APL_paramgroup_general_label_info = "<strong>GENERAL PARAMETERS</strong><br />--------------------------------------<br /><br />In this context, you can configure the general parameters of the display section";
	public $APL_count_label = "Number of articles";
	public $APL_count_desc = "<strong>NUMBER OF ARTICLES</strong><br />--------------------------------------<br /><br />Here you must select the number of articles that will appear";
	public $APL_str_length_label = "Maximum Text Length";
	public $APL_str_length_desc = "<strong>TEXT LENGTH</strong><br />--------------------------------------<br /><br />Here you must set the maximum length will be the introductory text of each article.";
	public $APL_promote_label = "View";
	public $APL_promote_desc = "<strong>VIEW</strong><br />--------------------------------------<br /><br />Here you can choose whether to be included in the text display of the manufacturer";

	public $APL_theme_label = "Section Theme";
	public $APL_theme_placeholder = "Choose a theme show of section";
	public $APL_theme_desc = "<strong>SECTION THEME</strong><br />--------------------------------------<br /><br />Select the subject of appearance that will be materialised the section &laquo;%s&raquo;.<br /><br />Each module has at least fixed display issue with the name &laquo;Default&raquo;";

	public $APL_paramgroup_categories_label = "▼ &nbsp; Choices of Categories";
	public $APL_paramgroup_categories_label_info = "<strong>CHOICES OF CATEGORIES</strong><br />--------------------------------------<br /><br />In this context, you can configure the contents of the source section";
	public $APL_type_label = "Types of Articles";
	public $APL_type_placeholder = "Select types of articles";
	public $APL_type_desc = "<strong>TYPES OF ARTICLES</strong><br />--------------------------------------<br /><br />What types of articles you want to include? This will result in only the articles that have as type one of them nominated.s";
	public $APL_cat_ids_label = "Categories will be included";
	public $APL_cat_ids_placeholder = "Select Category Articles";
	public $APL_cat_ids_desc = "<strong>CATEGORIES TO BE INCLUDED</strong><br />--------------------------------------<br /><br />What categories you want to include?<br /><br />This will only have as result the articles that have one from this categories of presenting itself in the list of recent articles.";
	public $APL_except_cat_ids_label = "Categories to be excluded";
	public $APL_except_cat_ids_placeholder = "Select Category Articles";
	public $APL_except_cat_ids_desc = "<strong>CATEGORIES TO BE EXCLUDED</strong><br />--------------------------------------<br /><br />Which category you want to exclude?<br /><br />This will lead to sidestep all the articles in these categories.<br /><br />This option negates the category of the above parameter (categories included), if paid in it.";


	public $APL_paramgroup_animation_label = "▼ &nbsp; Parameters details Display Frame";
	public $APL_paramgroup_animation_label_info = "<strong>PARAMETERS DETAILS</strong><br />--------------------------------------<br /><br />In this context, you can configure the appearance of the frame.";
	public $APL_animation_label = "effects Template";
	public $APL_animation_placeholder = " Select an effect show ";
	public $APL_animation_desc = "<strong>EFFECT DISPLAY</strong><br />--------------------------------------<br /><br />Here you must select one of the available display effects of the frame.";
	public $APL_opt_fade = "Slow Show / Off Slow (Fade)";
	public $APL_opt_flyout = "Throw out (FlyOut)";
	
	public $APL_corner_label = "Viewing angle";
	public $APL_corner_desc = "<strong>VIEWING ANGLE</strong><br />--------------------------------------<br /><br />Select the display position of the frame.<br /><br />In this version only supports 2 position options.";
	public $APL_corner_placeholder = " Choose a display angle ";
	public $APL_opt_LeftBottom = "Bottom Left";
	public $APL_opt_RightBottom = "Bottom Right";
	public $APL_element_label = "Opening Displacement Data";
	public $APL_element_desc = "<strong>POSITION OPENING LEMENTS</strong><br />--------------------------------------<br /><br />Here you can select the elements of which will start the appearance of the frame.<br /><br />If you select more than one item then must be separated by commas.<br /><br />To select class should be the front of the dot [.] And the ID [#].";
	public $APL_percent_label = "Percentage of displaced position (%)";
	public $APL_percent_desc = "<strong>RATE POSITION</strong><br />--------------------------------------<br /><br />if you have not then selected in the previous parameter any element, you can here fix the percentage of total height of page whereby they begin to show the context.";
	public $APL_width_label = "Frame Length (pixels)";
	public $APL_width_desc = "<strong>LENGTH FRAME</strong><br />--------------------------------------<br /><br />Here you should give the length of the frame in pixels. It should be just the number without [px]";
	public $APL_side_label = "Distance frame corners (pixels)";
	public $APL_side_desc = "<strong>DISTANCE FROM CORNERS</strong><br />--------------------------------------<br /><br />Here you should give in pixels (only numeric) horizontal and vertical distance from the corners of the window.";
	public $APL_target_label = "Open link in new window?";
	public $APL_target_desc = "<strong>OPENS IN NEW WINDOW</strong><br />--------------------------------------<br /><br />Here you can specify whether you want to open the article in a new window";
	public $APL_show_btn_close_label = "Show icon closing?";
	public $APL_show_btn_close_desc = "<strong>SHOW ICON</strong><br />--------------------------------------<br /><br />Here you can choose to display icon in closing. In each case the frame closes automatically when not fulfilled the conditions you set in these parameters, eg when taken to the top of the page.";
}
?>