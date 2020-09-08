<?php

$data = file_get_contents('student-send_1.txt'); /*toukou_1.txtを読み込む*/
$element = explode( "\n",$data);/*toukou_1.txtを各行で分割する。*/
$cnt = count( $element ); /*分割した要素の数（行数）をカウントする*/

    for( $i=0;$i<$cnt;$i++ ){ /*行末までループする*/

    $fp = fopen("student-send_2.txt","a"); /*追記モードで開く*/
    $num = count( file('student-send_2.txt')); /*ファイルのデータの行数をかぞえて＄numに代入*/
    $num++; /*投稿番号の取得*/
    $comment = explode(" \n ",$element[$i]); /*各１行を　＜＞　で分割する。*/
    fwrite($fp,$num."　".$comment[0]."\n"); /*パスワード（$youso[0]）以外の情報をファイルに書き込む*/
    fclose($fp);
    }

    header('Location:../php/student.php'); 
    ?>