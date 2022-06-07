<?php
# : @tech4faccount 
#  : @samer00s
ob_start();
define('API_KEY','5452548013:AAGJFIxj4xulpcjSEeaYIUTnuPTpizcbo6c');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot5452548013:AAGJFIxj4xulpcjSEeaYIUTnuPTpizcbo6c".API_KEY."/setwebhook?url=https://raw.githubusercontent.com/anmods/InstaAboFlah/main/TestKrop.php".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

if($text=="/start"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"hello",
	]);
	}
