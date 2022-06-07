<?php
header('Content-Type: UTF-8');
ob_start();
define('API_KEY',"5452548013:AAGJFIxj4xulpcjSEeaYIUTnuPTpizcbo6c");
echo "https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?".http_build_query($datas);
return json_decode(file_get_contents($url));
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$TOKEN =""; 
if($text&&$from_id==$admin){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".$TOKEN."/getChatMember?chat_id=@mroan1235&user_id=".$from_id);
$join2 = file_get_contents("https://api.telegram.org/bot".$TOKEN."/getChatMember?chat_id=@c_941&user_id=".$from_id);
$join3 = file_get_contents("https://api.telegram.org/bot".$TOKEN."/getChatMember?chat_id=@php88&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join2,'"status":"left"') or strpos($join3,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false&& $chat_id=="$admin"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- اهلا بك عزيزي 🔱 -
- ليمكنك استخدام البوت ✅ -
- عليك الاشتراك في القناة 🔽 -
- @php88⚜️     
 <a href='https://t.me/php88'>اضغط للاشتراك🔕</a>
-@c_941            
  <a href='https://t.me/c_941'>ااضغط للاشتراك🔕</a>
-@mroan1235 
 <a href='https://t.me/mroan1235'>اضغط للاشتراك 🔕</a>
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"HTML",
]);return false;}
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->$message_id,
]);
}

//download 
$dd=file_get_contents("https://api.online-downloader.com/DL/dd.php?videourl=$text");
$d=explode('Video_2_Url',$dd);
$cm=explode ('"',$d[1]);
$url1=str_replace ("\\",'',$cm[2]);
$image=explode ('Video_Image',$dd);
$x=explode ('"',$image[1]);
$e=str_replace ("\\",'',$x[2]);
$message_id = $update->message_id;
$msgid = $message->message_id;
if($text ){
bot('sendAudio', [
'chat_id' =>$chat_id,
'audio' =>$url1,
'caption' =>"@php88",
'parse_mode' =>"MarkDown",
'disable_notification' => false,
]);
}
$dd=file_get_contents("https://api.online-downloader.com/DL/dd.php?videourl=$text");
$d=explode('Video_1_Url',$dd);
$cm=explode ('"',$d[1]);
$url11=str_replace ("\\",'',$cm[2]);
$image=explode ('Video_Image',$dd);
$x=explode ('"',$image[1]);
$e=str_replace ("\\",'',$x[2]);

$r=file_get_contents ("$text");
$s=explode ('<title>',$r);
$t=explode('| Free Listening on SoundCloud',$s[1]);
$title =$t[0];
$ee=explode ('meta property="twitter:image" content=',$r);
$ex_=explode ('"',$ee[1]);
$im=$ex_[1];
if($text ){
bot('sendAudio', [
'chat_id' =>$chat_id,
'audio' =>$url11,
'caption' =>"[$title]($text)",
'parse_mode' =>"MarkDown",
'disable_notification' => false,
'title' =>$title,
'thumb' =>$im,
]);
}
 
 
$r=file_get_contents ("$text");
$s=explode ('<title>',$r);
$t=explode('| Free Listening on SoundCloud',$s[1]);
$title =$t[0];
$ee=explode ('meta property="twitter:image" content=',$r);
$ex_=explode ('"',$ee[1]);
$image=$ex_[1];
$ii=explode('comment_count',$r);
$tt=explode ('"',$ii[1]);
$comment=str_replace (':','',$tt[1]);
$comment=str_replace (',','',$comment);
$description=$tt[8];
$dedcription=str_replace ('\\n','',$description);
$created=$tt[4];
$ot=explode('label_name',$r);
$hh=explode('"likes_count',$ot[1]);
$bg=explode('"',$hh[1]);
$likes= str_replace (':','',$bg[1]); 
$likes=str_replace (',','',$likes);
if($text  && $likes !=null){
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$image,
'caption'=>"
$description
[قناه البوت](https://t.me/php88)",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الاسم",'callback_data'=>'##48'],['text'=>"$title ",'callback_data'=>'##48']], 
[['text'=>"تعليقات ",'callback_data'=>'#k#48'],['text'=>"$comment ",'callback_data'=>'##48']], 
[['text'=>"تاريخ النشر ",'callback_data'=>'##g48'],['text'=>"$created ",'callback_data'=>'##48']], 
[['text'=>"لايكات",'callback_data'=>'##248'],['text'=>"$likes",'callback_data'=>'##48']],  
]])]);
}

//search
$inline = $update->inline_query->query;
$url=file_get_contents("https://iuytiuyt.000webhostapp.com/xnxx/Search.php?search=$inline");
$yts = json_decode($url);
$title = $yts->ok[0]->title;
$url = $yts->ok[0]->url;
$image = $yts->ok[0]->image;

if($text == '/start'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
•🀄️مرحبا[$name](t.me/php88) في بوت، 
•🃏البحث والتحميل من soundcloud ،
•🀄️استخدام  للغة الانجليزية للبحث في البوت،
•🃏مثال `SaifNabeel`دون مسافات `EmyHetari`،
•🀄️او قم بأرسال رابط من التطبيق  مباشر، 
`https://soundcloud.com/user-937646115/saif-nabeel-ghaly-anta`
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=> true ,
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[["text"=>"مطور البوت💗",'url'=>'t.me/mroan8 ']],
[['text'=>"تابعنا - Follow us🌿'",'url'=>"t.me/php88"]],   ] ])
]);
}elseif($inline){
    bot('answerInlineQuery', [
	'inline_query_id' => $update->inline_query->id,
	'results' => json_encode([[
	'type' => 'article',
	'id' => base64_encode(rand(5,555)),
	'thumb_url'=>$image,
	'title' =>$title,
	'description'=>"BY=>Mroan",
	'input_message_content'=>[
	'parse_mode' => 'MarkDown', 
	'message_text' => "$url"]
	],
	])
	]);

}


if ($text != '/start'and $url1==null or$url11==null  ){
$inline = $update->inline_query->query;
$url=file_get_contents("https://iuytiuyt.000webhostapp.com/xnxx/Search.php?search=$text");
$yts = json_decode($url);

    for ($i = 0; $i < count($yts->ok); $i++)
      {
$title = $yts->ok[$i]->title;
$url = $yts->ok[$i]->url;
$image = $yts->ok[$i]->image; 
$neam=$yts->ok[$i]->name;
      $res['inline_keyboard'][] = [['text' => $title, 'switch_inline_query' => $url]];
      }

    bot('sendMessage', ['chat_id' => $chat_id, 'text' => '🔎| من فضلك اختر احد الروابط للتحميل : ', 'reply_markup' => json_encode($res) ]);
    }
  
  bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>$update->inline_query->query,
                'description'=>'👁‍🗨 By : @php88',
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>$update->inline_query->query],
 ]])
        ]);
$from_id = $message->from->id;
$username = $update->message->from->username;
$reply = $message->reply_to_message->message_id;
$list = file_get_contents("blocklist.txt");
$rep = $message->reply_to_message->forward_from; 
$iid = $rep->id; 
$admin=175279237;
if($text && $from_id !== $admin ){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'parse_mode'=>"markdown",
'text'=>$text,
]);
}

if ($message->reply_to_message ) {  
bot('sendmessage',[
'chat_id'=>$iid,
'parse_mode'=>"markdown",
'text'=>"$text",
]);
}
  

