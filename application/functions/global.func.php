<?php
/* Global functions */

// Function: http://jecas.cz/preklad
$l = array();
function l($text, $argumenty = array()) {
    global $l;
    if (isset($l[$text])) {
        $text = $l[$text];
    }
    if (!empty($argumenty)) {
        $text = vsprintf($text, $argumenty);
    }
    return $text;
}
?>