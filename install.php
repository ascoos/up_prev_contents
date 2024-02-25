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
 * @subpackage         	: installation file
 * @source             	: /[BLOCKS PATH]/up_prev_contents/install.php
 * @fileNo				: 1
 * @version            	: 1.0.1
 * @created            	: 2012-08-06 20:00:00 UTC+3
 * @updated            	: 2024-02-25 12:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: Freeware
 * @since 				: 24.0.0
 */


defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

global $objInstaller;

// Adjust the installer to work at BLOCK and give the block that will handle
$objInstaller->setExtension('up_prev_contents', INS_BLOCK);

// We adjust the installer so that after installation, to take us or not part of the Block configuration.
$objInstaller->afterSetParams(false);

// If the block is not installed then run the installation.
if (!$objInstaller->isInstalled()) {
	// We create the path of the Block.
	$objInstaller->createPath();
	
	// If the installation files on the Server is successful
	if ( $objInstaller->extractPackage() )
	{
		// We export themes in internal path "fronts". !!!! Not Change for Blocks. !!!!
		$objInstaller->extractThemes('fronts');
		
		// We take the position id, show called "NOTHING".
		$block_pos = $objInstaller->getPosition('NOTHING');

		// We take the sort that will apply to the position.
		$block_order = $objInstaller->getOrderPosition('NOTHING');
	
		// Place the Block in the database.
		$objInstaller->addSQL("INSERT INTO #__blocks VALUES(NULL, '".$objInstaller->name."', '".$objInstaller->name."', '0', '0', '{\"en\":\"Up Previous Contents\",\"el\":\"Πρόταση ανάγνωσης προηγούμενου άρθρου\"}', '', '', '', '', ".$block_pos.", ".$block_order.", '', '0', '0', '0', '0', '{\"count\":1,\"str_length\":250,\"promote\":0,\"theme\":\"default\",\"type\":\"\",\"cat_ids\":\"\",\"except_cat_ids\":\"\",\"animation\":\"fade\",\"corner\":\"right\",\"element\":\"\",\"percent\":75,\"width\":460,\"side\":10,\"target\":0,\"show_btn_close\":0}');");
		
		// pour the settings from the installer.
		$objInstaller->clear();
		
	} else {
		// else otherwise cancel the installation and pour the settings from the installer.
		$objInstaller->cancelInstallation();
	}
} else { // else pour the settings from the installer.
	$objInstaller->clear();
}
?>