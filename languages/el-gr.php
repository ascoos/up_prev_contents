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
 * @source             	: /[BLOCKS PATH]/up_prev_contents/languages/el-GR.php
 * @fileNo				: 7
 * @version            	: 1.0.1
 * @created            	: 2012-08-06 20:00:00 UTC+3
 * @updated            	: 2024-02-25 12:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: Freeware
 * @since 				: 24.0.0
 * @translator	       	:
 * @translatorEmail    	:
 * @translatorSite     	:
 * @translatorCreated  	:
 * @translatedUpdated  	:
 */

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

class TBlock_up_prev_contents_Language extends \TObject
{
	public $blockname = "Πρόταση ανάγνωσης προηγούμενου άρθρου";
	public $close = "Κλείσιμο";
	public $promote = "Το block αυτό, είναι επίσημη επέκταση του <a href=\"http://www.ascoos.com\">Ascoos Cms</a>.";
	

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "ΔΡΟΓΚΙΔΗΣ ΧΡΗΣΤΟΣ";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT ΛΟΓΙΣΜΙΚΟ";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "Η ενότητα (Block) αυτή, εμφανίζει ένα πλαίσιο που περιέχει ένα ή περισσότερα προηγούμε άρθρα σε σχέση με το τρέχων.";

	public $APL_paramgroup_general_label = "▼ &nbsp; Γενικοί Παράμετροι";
	public $APL_paramgroup_general_label_info = "<strong>ΓΕΝΙΚΟΙ ΠΑΡΑΜΕΤΡΟΙ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να διαμορφώσετε τις γενικές παραμέτρους εμφάνισης της ενότητας.";
	public $APL_count_label = "Αριθμός άρθρων";
	public $APL_count_desc = "<strong>ΑΡΙΘΜΟΣ ΑΡΘΡΩΝ</strong><br />--------------------------------------<br /><br />Εδώ πρέπει να επιλέξετε τον αριθμό των άρθρων που θα εμφανιστούν";
	public $APL_str_length_label = "Μέγιστο Μήκος Κειμένου";
	public $APL_str_length_desc = "<strong>ΜΗΚΟΣ ΚΕΙΜΕΝΟΥ</strong><br />--------------------------------------<br /><br />Εδώ πρέπει να ορίσετε το μέγιστο μήκος που θα έχει το εισαγωγικό κείμενο κάθε άρθρου.";
	public $APL_promote_label = "Προβολή";
	public $APL_promote_desc = "<strong>ΠΡΟΒΟΛΗ</strong><br />--------------------------------------<br /><br />Εδώ μπορείτε να επιλέξετε εάν στο πλαίσιο θα συμπεριληφθεί κείμενο προβολής του κατασκευαστή";

	public $APL_theme_label = "Θέμα εμφάνισης Ενότητας";
	public $APL_theme_placeholder = "Επιλέξτε θέμα εμφάνισης της ενότητας";
	public $APL_theme_desc = "<strong>ΘΕΜΑ ΕΜΦΑΝΙΣΗΣ ΕΝΟΤΗΤΑΣ</strong><br />--------------------------------------<br /><br />Επιλέξτε το θέμα εμφάνισης που θα υλοποιηθεί η ενότητα &laquo;%s&raquo;.<br /><br />Κάθε ενότητα έχει τουλάχιστο το προκαθορισμένο θέμα εμφάνισης με την ονομασία &laquo;Default&raquo;";

	public $APL_paramgroup_categories_label = "▼ &nbsp; Επιλογές Κατηγοριών";
	public $APL_paramgroup_categories_label_info = "<strong>ΕΠΙΛΟΓΕΣ ΚΑΤΗΓΟΡΙΩΝ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να διαμορφώσετε τις παραμέτρους προέλευσης των περιεχομένων της ενότητας";
	public $APL_type_label = "Τύποι άρθρων";
	public $APL_type_placeholder = "Επιλέξτε τύπους άρθρων";
	public $APL_type_desc = "<strong>ΤΥΠΟΙ ΑΡΘΡΩΝ</strong><br />--------------------------------------<br /><br />Ποιοι τύποι άρθρων θέλετε να συμπεριληφθούν; Αυτό θα έχει ως αποτέλεσμα την εμφάνιση μόνο των άρθρων που έχουν ώς τύπο έναν από τους οριζόμενους.";
	public $APL_cat_ids_label = "Κατηγορίες που θα περιληφθούν";
	public $APL_cat_ids_placeholder = "Επιλέξτε Κατηγορίες Άρθρων";
	public $APL_cat_ids_desc = "<strong>ΚΑΤΗΓΟΡΙΕΣ ΠΟΥ ΘΑ ΠΕΡΙΛΗΦΘΟΥΝ</strong><br />--------------------------------------<br /><br />Ποιες κατηγορίες θέλετε να περιληφθούν;<br /><br />Αυτό θα έχει ως αποτέλεσμα μόνο τα άρθρα που έχουν μια από τις κατηγορίες αυτές να εμφανιστούν στην λίστα των πρόσφατων άρθρων.";
	public $APL_except_cat_ids_label = "Κατηγορίες που θα εξαιρεθούν";
	public $APL_except_cat_ids_placeholder = "Επιλέξτε Κατηγορίες Άρθρων";
	public $APL_except_cat_ids_desc = "<strong>ΚΑΤΗΓΟΡΙΕΣ ΠΟΥ ΘΑ ΕΞΑΙΡΕΘΟΥΝ</strong><br />--------------------------------------<br /><br />Ποιες κατηγορίες θέλετε να εξαιρεθούν;<br /><br />Αυτό θα έχει ως αποτέλεσμα να παρακαμφθούν όλα τα άρθρα που ανήκουν στις κατηγορίες αυτές.<br /><br />Η επιλογή αυτή αναιρεί την κατηγορία από την παραπάνω παράμετρο (περιλαμβανόμενες κατηγορίες), εάν δοθεί και σε αυτή.";


	public $APL_paramgroup_animation_label = "▼ &nbsp; Παράμετροι Λεπτομερειών Εμφάνισης Πλαισίου";
	public $APL_paramgroup_animation_label_info = "<strong>ΠΑΡΑΜΕΤΡΟΙ ΛΕΠΤΟΜΕΡΕΙΩΝ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να διαμορφώσετε τις παραμέτρους εμφάνισης του πλαισίου.";
	public $APL_animation_label = "Εφέ Εμφάνισης";
	public $APL_animation_placeholder = " Επιλέξτε ένα εφέ εμφάνισης ";
	public $APL_animation_desc = "<strong>ΕΦΕ ΕΜΦΑΝΙΣΗΣ</strong><br />--------------------------------------<br /><br />Εδώ πρέπει να επιλέξετε ένα από τα διαθέσιμα εφέ εμφάνισης του πλαισίου.";
	public $APL_opt_fade = "Αργή Εμφάνιση / Αργό Σβήσιμο (Fade)";
	public $APL_opt_flyout = "Πέταγμα προς τα έξω (FlyOut)";
	
	public $APL_corner_label = "Γωνία Εμφάνισης";
	public $APL_corner_desc = "<strong>ΓΩΝΙΑ ΕΜΦΑΝΙΣΗΣ</strong><br />--------------------------------------<br /><br />Επιλέξτε την θέση εμφάνισης του πλαισίου.<br /><br />Στην παρούσα έκδοση υποστηρίζονται μόνο 2 επιλογές θέσης.";
	public $APL_corner_placeholder = " Επιλέξτε μια γωνία εμφάνισης ";
	public $APL_opt_LeftBottom = "Κάτω Αριστερά";
	public $APL_opt_RightBottom = "Κάτω Δεξιά";
	public $APL_element_label = "Στοιχεία Μετατόπισης Έναρξης";
	public $APL_element_desc = "<strong>ΣΤΟΙΧΕΙΑ ΜΕΤΑΤΟΠΙΣΗΣ ΕΝΑΡΞΗΣ</strong><br />--------------------------------------<br /><br />Εδώ μπορείτε να επιλέξετε τα στοιχεία από τα οποία θα ξεκινήσει η εμφάνιση του πλαισίου.<br /><br />Εάν επιλέξετε πάνω από ένα στοιχείο τότε θα πρέπει να χωρίζονται με κόμμα.<br /><br />Για επιλογή κλάσης θα πρέπει να υπάρχει μπροστά η τελεία [.] και για ID το [#].";
	public $APL_percent_label = "Ποσοστό μετατοπισμένης θέσης έναρξης (%)";
	public $APL_percent_desc = "<strong>ΠΟΣΟΣΤΟ ΜΕΤΑΤΟΠΙΣΗΣ</strong><br />--------------------------------------<br /><br />Εάν δεν έχετε επιλέξει στην προηγούμενη παράμετρο κάποιο στοιχείο, τότε μπορείτε εδώ να ορίσετε το ποσοστό του συνολικού ύψους της σελίδας βάσει του οποίου θα αρχίσει να εμφανίζεται το πλαίσιο.";
	public $APL_width_label = "Μήκος Πλαισίου (pixels)";
	public $APL_width_desc = "<strong>ΜΗΚΟΣ ΠΛΑΙΣΙΟΥ</strong><br />--------------------------------------<br /><br />Εδώ θα πρέπει να δώσετε το μήκος του πλαισίου σε pixels. Θα πρέπει να είναι μόνο ο αριθμός χωρίς το [px]";
	public $APL_side_label = "Απόσταση πλαισίου από τις γωνίες (pixels)";
	public $APL_side_desc = "<strong>ΑΠΟΣΤΑΣΗ ΑΠΟ ΓΩΝΙΕΣ</strong><br />--------------------------------------<br /><br />Εδώ θα πρέπει να δώσετε σε pixels (μόνο αριθμητικά) την οριζόντια και κάθετη απόσταση από τις γωνίες του παραθύρου.";
	public $APL_target_label = "Άνοιγμα συνδέσμου σε νέο παράθυρο;";
	public $APL_target_desc = "<strong>ΑΝΟΙΓΜΑ ΣΕ ΝΕΟ ΠΑΡΑΘΥΡΟ</strong><br />--------------------------------------<br /><br />Εδώ μπορείτε εάν θέλετε να ορίσετε να ανοίγει το άρθρο σε νέο παράθυρο";
	public $APL_show_btn_close_label = "Εμφάνιση εικονιδίου κλεισίματος;";
	public $APL_show_btn_close_desc = "<strong>ΕΜΦΑΝΙΣΗ ΕΙΚΟΝΙΔΙΟΥ</strong><br />--------------------------------------<br /><br />Εδώ μπορείτε να επιλέξετε την εμφάνιση εικονιδίου κλεισίματος στο πλαίσιο. Σε κάθε περίπτωση το πλαίσιο κλείνει αυτόματα όταν δεν συντρέχουν οι όροι που έχετε ορίσει στις παρούσες παραμέτρους, π.χ. όταν μεταφέρεστε στην κορυφή της σελίδας.";
}
?>