<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require_once $_SERVER["DOCUMENT_ROOT"]."/mpdf/mpdf.php";


CModule::IncludeModule( "iblock" );

$flatId = $_GET['flat'];
//$create_file = false;

//if($flatId > 0){
//
//    $res = CIBlockElement::GetByID($flatId);
//
//    if($flat = $res->GetNext()){
//        $VALUES = array();
//        $filename = __DIR__.'/flat-'.$flatId.'.pdf';
//
//        if (file_exists($filename)) {
//            $date_up = filemtime($filename);
//           // echo "В последний раз файл $filename был изменен: " . $date_up ;
//            if($date_up < $flat['TIMESTAMP_X']){
//                $create_file = true;
//            }
//        }else{
//            $create_file = true;
//        }
//        if($create_file){
//
//            $mpdf = new mPDF('utf-8', 'A4-L', 16, 'geometria');
//            $html = file_get_contents('http://'.$_SERVER['SERVER_NAME']."/pdf/pdf_tmp.php?flat_id=".$flatId);
//            $mpdf->WriteHTML($html, 0, true, true);
//            $mpdf->Output();
//
////            echo $html;
//
////            echo 'Создать файл';
////            echo "<pre>";
////            print_r($flat);
////            echo "</pre>";
//
//        }
//
//    }
//
//}

if($flatId > 0){

    $res = CIBlockElement::GetByID($flatId);

    if($flat = $res->GetNext()){


        $fileName = 'flat-'.$flatId.'.pdf';
        $filePath = __DIR__.'/'.$fileName;

        if (!file_exists($filePath) || filemtime($filePath) < $flat['TIMESTAMP_X']) {

            $phone = '';

            if(isset($_GET['phone']))
                $phone = '&phone='.urlencode($_GET['phone']);

            $url =  'http://'.$_SERVER['SERVER_NAME']."/pdf/pdf_tmp.php?flat_id=".$flatId.$phone;

            $data = array(
                'url'=>$url,
                '-O'=>'Landscape',
                '-s'=>'A4',
                '-B'=>'0',
                '-L'=>'0',
                '-R'=>'0',
                '-T'=>'0',
            );

            $converterUrl = 'http://impdf.com/';
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'GET',
                    'content' => http_build_query($data),
                ),
            );

            $context  = stream_context_create($options);
            $result = file_get_contents($converterUrl.'?'.$options['http']['content']);
            file_put_contents($filePath, $result);

        }

        LocalRedirect($fileName);

    }

}