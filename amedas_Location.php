<?php
$url = "https://jjwd.info/api/v2/stations/";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json,true);

if ($arr === NULL) {
        return;
}else{
    $json_count = count($arr["stations"]);
    for($i=$json_count-1;$i>=0;$i--){
    echo ("\n".$arr["stations"][$i]["lat"]."\n\n");
    echo ("\n".$arr["stations"][$i]["lng"]."\n\n");
    }
}