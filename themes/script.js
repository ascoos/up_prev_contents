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
 * @subpackage         	: $ - ASCOOS CMS jQuery Plugin - Up Previous Contents
 * @source             	: /themes/blocks/fronts/up_prev_contents/script.js
 * @fileNo				: 9
 * @version            	: 1.0.1
 * @created            	: 2012-08-06 20:00:00 UTC+3
 * @updated            	: 2024-02-25 12:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: Freeware
 * @since 				: 24.0.0
 */
(function($){$.fn.upPrevContent=function(options){var defaults={animation:'fade',corner:'right',percent:75,element:'',width:380,side:10,target:0,closeButtonClass:'.header h3',thisID:'.block-up-prev-contents-default'};var opts=$.extend(defaults,options);var closeButton=opts.thisID+' '+opts.closeButtonClass;$(window).bind('scroll',function(e){show_prev_contents_box();});if($(window).height()==$(document).height()){show_prev_contents_box();}
function show_prev_contents_box(){if(opts.element){if($(opts.element).length>0){slideIn=($(this).scrollTop()>($(opts.element).offset().top)),$bs=$(opts.thisID);}else{slideIn=($(this).scrollTop()>($('body').height()-$(window).height()-($(window).height()*opts.percent/100))),$bs=$(opts.thisID);}}else{slideIn=($(this).scrollTop()>($('body').height()-$(window).height()-($(window).height()*opts.percent/100))),$bs=$(opts.thisID);}
if(slideIn){if(opts.animation=="fade"){$bs.fadeIn("slow");}else if(opts.animation=="flyout"){if(opts.corner=='left'){$bs.not(':animated').stop(true,false).animate({'left':(opts.side+10)},300);}else{$bs.not(':animated').stop(true,false).animate({'right':(opts.side+10)},300);}}}else{if(opts.animation=="fade"){$bs.fadeOut("slow");}else if(opts.animation=="flyout"){if(opts.corner=='left'){$bs.not(':animated').stop(true,false).animate({'left':-($bs.width()-(opts.side-50))},300);}else{$bs.not(':animated').stop(true,false).animate({'right':-($bs.width()-(opts.side-50))},300);}}}};$(closeButton).click(function(){if(opts.animation=="fade"){$(opts.thisID).fadeOut("slow");}else if(opts.corner=='left'){$(opts.thisID).stop().animate({left:"-"+(opts.width+50)+"px"});}else{$(opts.thisID).stop().animate({right:"-"+(opts.width+50)+"px"});}
return false;});if(opts.target==1){$(opts.thisID+'.text h4 a').click(function(){if(opts.target==1){window.open($(this).attr('href'));}
if(opts.target==1){return false;}});}}})(jQuery);