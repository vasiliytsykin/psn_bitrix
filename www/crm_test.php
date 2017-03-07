<?

$data = array(
        "Name" => "Иван",
        "Phone" => "89127673457483",
        "Email" => "иван@ghjg.ru",
        "Comments" => "",
        "ArticleId" => "543",
        "WebSiteId" => "1",
        "LeadSourceId" => "3"
);
$data_str = json_encode($data);
$ch = curl_init('http://91.228.121.2:4043/api/LeadRequests');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_str);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_str))
);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
