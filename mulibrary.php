<?php
/*
Plugin Name: MU Library Shortcodes
Plugin URI: http://www.marshall.edu
Description: Collection of Marshall University library specific shortcodes
Author: Christopher McComas
Version: 1.0
*/

// Shortcode for Slideshow Text
function mu_library_libanswers_chat($atts, $content = null, $code = "")
{
    return '<div id="libchat_4f14fd47cdca1c40b9b0b3565ec5696c"></div><p><script src="https://v2.libanswers.com/load_chat.php?hash=4f14fd47cdca1c40b9b0b3565ec5696c"></script></p>';
}

add_shortcode('mu_lib_chat', 'mu_library_libanswers_chat');

// Shortcode for Summon Database Search
function mu_library_summon($atts, $content = null, $code = "")
{
    $html = '<form name="search" method="GET" action="http://marshall.summon.serialssolutions.com/search" target="_blank" autocomplete="off" accept-charset="utf-8" >';
    $html .= '<input name="hl" type="hidden" value="en"/>';
    $html .= '<input class="text-input w-full"  title="Search MU Summon" maxlength="245" name="s.q"  type="text" id="summon3" value="" placeholder="Search Summon"  />';
    $html .= '<div class="flex justify-between mt-4">';
    $html .= '<input type="submit" name="submit" value="Search" class="btn btn-green mr-2" title="Enter a search term and click \'Search\' to get results."  />';
    $html .= '<a href="http://marshall.summon.serialssolutions.com/advanced#!/advanced">Summon Advanced</a> ';
    $html .= '</div>';
    $html .= '</form>';
    return $html;
}

add_shortcode('mu_lib_summon', 'mu_library_summon');

// Shortcode for Library Catalog Search
function mu_library_catalog($atts, $content = null, $code = "")
{
    $html = '<form action="http://mulibiiidb.marshall.edu/search/" method="GET">';
        $html .= '<select name="searchtype" class="form-select w-full" aria-labelledby="typeofsearch">';
        $html .= '<option value="X" selected="selected">Keyword</option>';
        $html .= '<option value="t">Title</option>';
        $html .= '<option value="a">Author</option>';
        $html .= '<option value="d">Subject Heading</option>';
        $html .= '<option value="r">Reserves</option>';
        $html .= '<option value="c">Call Number</option>';
        $html .= '<option value="i">ISBN/ISSN</option>';
        $html .= '</select>';
        $html .= '<input class="text-input w-full mt-4" id="searchcatalog" type="text" value="" name="searcharg" placeholder="Search Library Catalog" aria-labelledby="searchcatalog" />';
        $html .= '<div class="flex justify-between mt-4">';
        $html .= '<input type="submit" name="submit" value="Search" class="btn btn-green mr-2" title="Enter a search term and click \'Search\' to get results."  />';
        $html .= '<a href="http://mulibiiidb.marshall.edu/search/X">Catalog Advanced</a> ';
        $html .= '</div>';
        $html .= '</form>';
        return $html;
}

add_shortcode('mu_lib_catalog', 'mu_library_catalog');

// Shortcode for Journals Search
function mu_library_journal($atts, $content = null, $code = "")
{
    $html = '<form method="GET" action="http://api.thirdiron.com/v2/libraries/977/external-search">';
    $html .= '<input class="text-input w-full" id="Text1" type="text" maxlength="75" value="" name="query"  placeholder="Search Library E-Journals"  />';
    $html .= '<div class="flex justify-between mt-4">';
    $html .= '<input type="submit" name="submit" value="Search" class="btn btn-green mr-2" title="Enter a search term and click \'Search\' to get results."  />';
    $html .= '<a href="http://ld4qw7em5h.search.serialssolutions.com/">Journal Advanced</a> ';
    $html .= '</div>';
    $html .= '</form>';
    return $html;
}

add_shortcode('mu_lib_journal', 'mu_library_journal');

// Shortcode for Credo Reference Database Search
function mu_library_credo($atts, $content = null, $code = "")
{
    $html = '<form action="javascript:void;" onsubmit="javascript:return credoMultiSearchBasic(document.forms.credoMultiSearchFormBasic);" method="GET" name="credoMultiSearchFormBasic">';
    $html .= '<input type="hidden" name="ubasic" value="https://marshall.idm.oclc.org/login?url=https://search.credoreference.com/search/all/?searchPhrase={0}" />';
    $html .= '<input class="text-input w-full" maxlength="255" name="qbasic"  type="text"  id="Text2" value="" placeholder="Search Credo Reference"  aria-labelledby="Text2" />';
    $html .= '<div class="flex justify-between mt-4">';
    $html .= '<input type="submit" name="submit" value="Search" class="btn btn-green mr-2" title="Enter a search term and click \'Search\' to get results."  />';
    $html .= '<a href="http://search.credoreference.com/search/advanced">Credo Advanced</a> ';
    $html .= '</div>';
    $html .= '<script type="text/javascript">function credoMultiSearchBasic(f){if(f.qbasic.value==\'Search for...\'||f.qbasic.value==\'\'){alert(\'Please enter a search.\');}else{var qbasic=escape(f.qbasic.value);var ubasic=f.ubasic.value.replace("{0}",qbasic);window.open(ubasic,"_blank");}return false;}</script>';
    $html .= '</form>';
    return $html;
}

add_shortcode('mu_lib_credo', 'mu_library_credo');

// Shortcode for Marshall Digital Scolar Search
function mu_library_mds($atts, $content = null, $code = "")
{
    $html = '<form action="http://mds.marshall.edu/do/search/"  method="GET">';
    $html .= '<label for="context" style="display:none;">Select context to search:</label> ';
    $html .= '<select name="fq" id="Select1" class="form-select w-full" aria-labelledby="Select1">';
    $html .= '<option value=\'virtual_ancestor_link:"http://mds.marshall.edu"\'>in Marshall repository</option>';
    $html .= '<option value=\'virtual_ancestor_link:"http:/"\'>across all repositories</option>';
    $html .= '</select>';
    $html .= '<input name="hl" type="hidden" value="en"/>';
    $html .= '<input  class="text-input w-full mt-4" maxlength="50" name="q" type="text" id="Text3" value="" placeholder="Search MDS" aria-labelledby="Text3" />';
    $html .= '<div class="flex justify-between mt-4">';
    $html .= '<input type="submit" name="submit" value="Search" class="btn btn-green mr-2" title="Enter a search term and click \'Search\' to get results."  />';
    $html .= '<a href="http://mds.marshall.edu/">MDS Advanced</a> ';
    $html .= '</div>';
    $html .= '</form>';
    return $html;
}

add_shortcode('mu_lib_mds', 'mu_library_mds');

// Shortcode for Google Scholar
function mu_library_google($atts, $content = null, $code = "")
{
    $html = '<form action="http://scholar.google.com/scholar"  method="GET">';
    $html .= '<input name="hl" type="hidden" value="en"/>';
    $html .= '<input  class="text-input w-full" maxlength="255" name="q" type="text" id="Text4" value="" placeholder="Search Google Scholar" aria-labelledby="Text4" />';
    $html .= '<div class="flex justify-between mt-4">';
    $html .= '<input type="submit" name="submit" value="Search" class="btn btn-green mr-2" title="Enter a search term and click \'Search\' to get results."  />';
    $html .= '<a href="http://scholar.google.com/advanced_scholar_search?hl=en&as_sdt=0,49">GS Advanced</a> ';
    $html .= '</div>';
    $html .= '</form>';
    return $html;
}

add_shortcode('mu_lib_google', 'mu_library_google');

function mu_library_lending($atts)
{
    $html = '<form action="https://libids.marshall.edu/lending/illiadlending.dll" method="post" name="LendingLogon" class="f-wrap-1">';
    $html .= '<input type="hidden" name="ILLiadForm" value="LendingLogon">';
    $html .= '<div id="logonform" class="flex flex-col">';
    $html .= '<div class="font-semibold mb-3">Login For Non-OCLC Libraries</div>';
    $html .= '<label for="username">';
    $html .= 'Username';
    $html .= '</label>';
    $html .= '<input id="username" name="Username" type="text" class="text-input mt-1" tabindex="1" />';
    $html .= '<label for="password" class="mt-4">';
    $html .= 'Password';
    $html .= '</label>';
    $html .= '<input id="password" name="Password" type="password" class="text-input mt-1" tabindex="2" />';
    $html .= '<div class="mt-4">';
    $html .= '<input type="submit" name="SubmitButton" value="Login ILLiad" class="btn btn-green" tabindex="3" />';
    $html .= '<div class="mt-3 flex">';
    $html .= '<div class="mr-2"><a href="https://libids.marshall.edu/lending/illiadlending.dll?Action=10&Form=84">Forgot Password?</a></div>';
    $html .= '<div class="ml-1"><a href="http://www.marshall.edu/library/libids/lending_firsttime.asp">First-Time Registration?</a></div>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</form>';
    return $html;
}
add_shortcode('mu_lib_lending', 'mu_library_lending');

function mu_library_hours()
{
    $html = '<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
    $html .= '<script src="https://api3.libcal.com/js/hours_today.js"></script> ';
    $html .= '<div id="s_lc_tdh_3239_0"></div> ';
    $html .= '<script>';
    $html .= '$(function(){ ';
    $html .= 'var s_lc_tdh_3239_0 = new $.LibCalTodayHours( $("#s_lc_tdh_3239_0"), { iid: 3239, lid: 0, key: "5a1f79012208b63da67ca021793bed6e" }); ';
    $html .= '})';
    $html .= '</script> ';

    $html .= '<!-- Please note: The following styles are optional, feel free to modify! //-->';
    $html .= '<style>';
    $html .= '.s-lc-w-today { border-spacing: 0; border-collapse: collapse; width: 100%; }.s-lc-w-today td, .s-lc-w-today th { padding: 8px 5px; }';
    $html .= '.s-lc-w-head { text-align: center; border-bottom: 1px solid #ddd; }';
    $html .= '.s-lc-w-loading { margin-top: 80px; text-align: center; }';
    $html .= '.s-lc-w-sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0, 0, 0, 0); border: 0; }';
    $html .= '.s-lc-w-btn { line-height: 1.5; border-radius: 3px; display: inline-block; padding: 3px 6px; margin-bottom: 0; font-size: 12px; font-weight: 400; text-align: center; white-space: nowrap; vertical-align: middle; touch-action: manipulation; cursor: pointer; user-select: none; border: 1px solid #ccc; color: #333; background-color: #fff; }';
    $html .= '.s-lc-w-btn:active, .s-lc-w-btn:hover { color: #333; background-color: #d4d4d4; border-color: #8c8c8c; }';
    $html .= '.s-lc-w-previous { float: left;}';
    $html .= '.s-lc-w-next { float: right; }';
    $html .= '.s-lc-w-location td { font-weight: bold; }';
    $html .= '.s-lc-w-department .s-lc-w-name { padding-left: 20px; }';
    $html .= '.s-lc-w-times { border-bottom: 1px solid #ddd; }';
    $html .= '.s-lc-w-today-view-link { text-decoration: none; }';
    $html .= '.s-lc-w-today-view-all { padding: 8px 5px; }';
    $html .= '</style>';
    return $html;
}
add_shortcode('mu_library_hours', 'mu_library_hours');

function mu_library_news()
{
    $html = '<script type="text/javascript" src="//lgapi-us.libapps.com/web/jquery/js/1.12.1_jquery.min.js"></script>';
    $html .= '<script src="//lgapi-us.libapps.com/sa.php?site_id=776" onload="jQuery(window).on(\'load\', function() {springSpace.springTrack.init({_st_site_id: \'776\'});});"></script>';
    $html .= '<script>springSpace.Common = springSpace.Common || { };';
    $html .= 'springSpace.Common.constant = { PROCESSING: { ACTION_DISPLAY_POLL: 159}};';
    $html .= 'springSpace.Common.baseURL = "//lgapi-us.libapps.com/";';
    $html .= 'springSpace.Common.apiLoad = true;</script><script>';
    $html .= 'springshare_widget_config_1532711872440 = { path: \'boxes/19485882\' };';
    $html .= '</script>';
    $html .= '<div id="s-lg-widget-1532711872440"></div>';
    $html .= '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://lgapi-us.libapps.com/widgets.php?site_id=776&widget_type=8&output_format=1&widget_title=Library+News&widget_height=&widget_width=&widget_embed_type=1&guide_id=849428&box_id=19485882&map_id=22861257&content_only=0&config_id=1532711872440";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","s-lg-widget-script-1532711872440");</script>';
    return $html;

}
add_shortcode('mu_library_news', 'mu_library_news');

function mu_libchat( $atts, $content = null )
{

    $data = shortcode_atts( array(
		'class' => '',
		'div_id' => '',
		'script_src' => '',
	), $atts );

    $html = '<div id="' . esc_attr( $data['div_id'] ) . '"></div>';
    $html .= '<script src="' . esc_url( $data['script_src'] ) . '"></script>';
    $html .= '<div class="hidden">' . $data['script_src'] . '</div>';
    return $html;

}
add_shortcode('mu_libchat', 'mu_libchat');