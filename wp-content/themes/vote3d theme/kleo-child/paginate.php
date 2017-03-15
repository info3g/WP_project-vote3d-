<?php
/*--------------------------------------------------------------------------------------------
|    @desc:         pagination 
|    @author:       Aravind Buddha
|    @url:          http://www.techumber.com
|    @date:         12 August 2012
|    @email         aravind@techumber.com
|    @license:      Free!, to Share,copy, distribute and transmit , 
|                   but i'll be glad if i my name listed in the credits'
---------------------------------------------------------------------------------------------*/
function paginate($reload, $page, $tpages) {
    $adjacents = $tpages;
    $prevlabel = "&lsaquo;";
    $nextlabel = "&rsaquo;";
    $out = "";

    // previous
    if ($page == 1) {
        $out.= "<li class='next_disable'>" . $prevlabel . "</li>\n";
    } elseif ($page == '') {
        $out.= "<li class='next_disable'>" . $prevlabel . "</li>\n";
    } elseif ($page == 2) {
        $out.= "<li><a  href=\"" . $reload . "\">" . $prevlabel . "</a>\n</li>";
    } else {
        $out.= "<li><a  href=\"" . $reload . "&amp;pagi=" . ($page - 1) . "\">" . $prevlabel . "</a>\n</li>";
    }
  
    $pmin = ($page > $adjacents) ? ($page - $adjacents) : 1;
    $pmax = ($page < ($tpages - $adjacents)) ? ($page + $adjacents) : $tpages;
    for ($i = $pmin; $i <= $pmax; $i++) {
        if ($i == $page) {
            $out.= "<li class='active'><a href=''>" . $i . "</a></li>\n";
        } elseif ($i == 1) {
            $out.= "<li><a  href=\"" . $reload . "&amp;pagi=" . $i . "\">" . $i . "</a>\n</li>";
        } else {
            $out.= "<li><a  href=\"" . $reload . "&amp;pagi=" . $i . "\">" . $i . "</a>\n</li>";
        }
    }
    
    if ($page < ($tpages - $adjacents)) {
        $out.= "<li><a href=\"" . $reload . "&amp;pagi=" . $tpages . "\">" . $tpages . "</a>\n</li>";
    }
    if ($page < $tpages) {
        $out.= "<li><a  href=\"" . $reload . "&amp;pagi=" . ($page + 1) . "\">" . $nextlabel . "</a>\n</li>";
    } else {
        $out.= "<li class='next_disable'>" . $nextlabel . "</li>\n";
    }
    $out.= "";
    return $out;
}
?>