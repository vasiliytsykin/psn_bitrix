<?php

//$url = 'http://91.228.121.2:1234/ExportToSite.svc/AddressList/xml/fd9319b3-ef7a-e411-bba2-005056995954';
$url = 'http://91.228.121.2:1234/ExportToSite.svc/AddressList/xml/34CFCB98-7E85-E611-80F6-005056994571';
//$url = 'http://grinada.webvoskhod.ru/xml/test.php';

include "sync.php";
$sync = new Sync();


?>
<pre>
    <?
    // Создаем дескриптор cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    // Запускаем
    $response = curl_exec($ch);

    // Проверяем наличие ошибок
    $info = curl_getinfo($ch);

    //var_dump($info);
//print_r($response);
    $response = str_replace('a:', '',$response);



    $xmlResp = simplexml_load_string($response);
    $jsonResp = json_encode($xmlResp);
    $arResp = json_decode($jsonResp, true);
//    print_r($arResp);

   if(isset($arResp['XMLAddressListDataResult']['BuildingGroup']['Buildings']['Building'])) {
       foreach($arResp['XMLAddressListDataResult']['BuildingGroup']['Buildings']['Building'] as $arBuild) {
           foreach ($arBuild['Apartments']['Apartment'] as $arApatament) {
               $arSync = $sync->upFlat($arApatament);
               echo "<br/>";
           }
       }
   }

    // Close handle
    curl_close($ch);

?>
</pre>
