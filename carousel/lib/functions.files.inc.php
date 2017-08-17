<?php

function get_files($dir = '.', $ext = '.') {
    $out = array();
    if ($handle = opendir($dir)) {
        while (false !== ($entry = readdir($handle))) {
            if (!is_dir($entry) && $entry != "." && $entry != ".." && strpos($entry, $ext) !== false) {
                array_push($out, $entry);
            }
        }
        closedir($handle);
    }
    return $out;
}

?>
