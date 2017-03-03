<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("CRM Test");
$APPLICATION->AddHeadScript("https://secure.aadcdn.microsoftonline-p.com/lib/1.0.14/js/adal.min.js");
?>
    <script>

        var authContext = new AuthenticationContext({
            tenant: "tsykin.onmicrosoft.com",
            clientId: "d180f810-0470-45ca-932e-b6a3f0ebe747",
            navigateToLoginRequestUrl: false
        });

        function ping() {

            var resourseURL = 'http://grin.webvoskhod.ru/crm_test.php',
                organizationURI = 'https://tsykin.crm4.dynamics.com';

            login();

            authContext.acquireToken(resourseURL, getUserId);

            console.log(authContext);

            function getUserId(error,token) {

                if(error || !token){
                    console.log(error);
                    console.log(token);
                }
                else{

                    var req = new XMLHttpRequest;

                    console.log(token);

                    req.open("GET", encodeURI(organizationURI + "/api/data/v8.2/WhoAmI"), true);

                    req.onreadystatechange = function () {

                        if (req.readyState == 4 && req.status == 200) {

                            var whoAmIResponse = JSON.parse(req.responseText);

                            console.log(whoAmIResponse);

                        }

                    };

                    req.setRequestHeader("OData-MaxVersion", "4.0");

                    req.setRequestHeader("OData-Version", "4.0");

                    req.setRequestHeader("Accept", "application/json");

                    req.setRequestHeader("Authorization", "Bearer " + token);

                    req.send();

                }



            }
        }
        
        function login() {
            var user = authContext.getCachedUser();
            if (!user) {
                authContext.login();
            }
        }


//        function createNewCase() {
//
//            console.log('click');

//            var req = new XMLHttpRequest(),
//                clientURL = 'http://91.228.121.2:2016/TESTPSN';
//
//            req.open("GET",encodeURI(clientURL + "/api/data/v8.0/"), true);
//            req.setRequestHeader("Accept", "application/json");
//            req.setRequestHeader("Content-Type", "application/json; charset=utf-8");
//            req.setRequestHeader("OData-MaxVersion", "4.0");
//            req.setRequestHeader("OData-Version", "4.0");
//            req.onreadystatechange = function () {
//                if (this.readyState == 4 /* complete */) {
//                    console.log('complete');
//                    req.onreadystatechange = null;
//                    if (this.status == 204) {
//                        console.log('ok');
//                        var accountUri = this.getResponseHeader("OData-EntityId");
//                        console.log("Created account with URI: "+ accountUri)
//                    }
//                    else {
//                        console.log('error');
//                        var error = JSON.parse(this.response).error;
//                        console.log(error.message);
//                    }
//                }
//            };
//            req.send(JSON.stringify({
//                name: "New account"
//            }));


//            var url = 'http://91.228.121.2:2016/TESTPSN/api/data/v8.0/';
//            var myUrl = 'http://tsykin.crm4.dynamics.com/api/data/v8.2/';
//
//            $.ajax({
//                url: url,
//                type: "GET",
//                crossDomain: true,
//                dataType: "json",
//                contentType: "application/json; charset=utf-8",
//                headrs: {
//                    "OData-MaxVersion": "4.0",
//                    "OData-Version": "4.0"
//                },
//                success: function(response){
//
//                    console.log(response);
//                },
//                error: function (jqXHR, textStatus, errorThrown) {
//
//                    console.log(textStatus);
//                    console.log(errorThrown);
//
//                }
//            });
//
//
//        }
    </script>
    <button onclick="ping();">Отправить</button>
    <button onclick="login();">login</button>
<?

//$ch = curl_init('http://91.228.121.2:2016/TESTPSN/api/data/v8.0/');
//$ch = curl_init('https://tsykin.crm4.dynamics.com/api/data/v8.2/');
//curl_exec($ch);
//curl_close($ch);


?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>