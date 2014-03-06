<?php
    header('Content-Type: text/css');
    $css = `/home/y/bin/lessc cpu7.less`;
    echo $css;
    file_put_contents('cpu7.css', $css);
?>
