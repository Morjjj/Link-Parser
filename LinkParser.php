<?php

function getLinks($url){
    $text = implode("",file($url));
    preg_match_all("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $text, $matches);
    return $matches[0];
}
print_r(getLinks("http://php.su/"));
?>