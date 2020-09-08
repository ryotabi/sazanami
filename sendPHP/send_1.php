<?php
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $date = date("Y/m/d H:i:s");

    $filename = 'send_1.txt'; /*保存先にファイル名を$filenameに代入*/

    $fp = fopen($filename,'a'); /*ファイルを追記モードで開く*/

    fwrite($fp,$name.' : '.$comment.' 　( '.$date.')'."\n"); /*情報をファイルに書き込む*/

    fclose($fp); /*ファイルを閉じる*/
    unlink('send_2.txt'); /*ここでtoukou_2.txtを削除するコードを入れておく。*/

    header('Location:send_2.php'); 
    ?>