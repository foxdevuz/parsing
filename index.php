<?php
    // Include the library
    include './simplehtmldom_1_9_1/simple_html_dom.php';

    $target = "https://store.steampowered.com/";
    $req = file_get_html($target);

    foreach ($req->find('img') as $value) {
        // echo "<img style='width:100px;' src=".$value->src."/>";
        echo $value->src . "<br/>";
    }
?>
