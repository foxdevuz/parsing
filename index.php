<?php
    // Include the library
    include './simplehtmldom_1_9_1/simple_html_dom.php';

    $video = "https://youtu.be/HxXDpdhAVbY";
    $target = "https://10downloader.com/download?v=".$video."&utm_source=000tube";
    $req = file_get_html($target);

    foreach ($req->find('a[class=downloadBtn]') as $value) {
        // echo "<img style='width:100px;' src=".$value->src."/>";
        // echo '
        //     <video width="320" height="240" controls>
        //         <source src="'.$value->href.'">
        //     </video>
        // ';
        echo $value->href. "<br/> <br/>";
    }

?>
