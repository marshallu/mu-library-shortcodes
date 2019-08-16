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