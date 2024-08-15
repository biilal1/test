<?php
define('mrax',"توكنك");//توكن البوت


$admin = "ايدي";//ايدى مالك البوت
$adminuser = "يوزر";//يوزرك بدون@

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".mrax."/".$method;
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

/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @AX_GB
DEV : @O_1_W
Translator : @AX_GB
/*====================*/
function joinchat($chatid){
    global $name, $cmid;
    $result = bot('getChatMember',[
    'chat_id'=>"@AX_GB", 
    'user_id'=>$chatid
    ])->result->status;
    
        $results = bot('getChatMember',[
    'chat_id'=>"@AX_GB",
    'user_id'=>$chatid
    ])->results->status;
    
    if($result == "creator" or $result == "مالك البوت" or $result == "member" or $results == "creator" or $results == "مالك البوت" or $results == "member"){
        return true;
    } else {
        bot('deleteMessage',[
        'chat_id'=>"@AX_GB",
        'message_id'=>$cmid
        ]); 
        bot('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>"<b>🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه</b>",
         'parse_mode'=>"html",
         'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"➕ محتوي برمجي","url"=>"https://t.me/AX_GB"],],
[["text"=>"✅ تاكيد","callback_data"=>"tekshir"],],
]
]),
]); 
        return false;
    }
}

$mrax= json_decode(file_get_contents('php://input'));
$message = $mrax->message;
$cid = $message->chat->id;
$tx = $message->text;
$from_id = $mrax->message->from->id;
$fid2 = $mrax->callback_query->from->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $mrax->callback_query;
$message = $mrax->message;
$mid = $message->message_id;
$data = $mrax->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $mrax->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $mrax->callback_query->message->chat->id;
$cuid = $mrax->callback_query->message->from->id;
$cqid = $mrax->callback_query->id;

$reply = $message->reply_to_message->text;

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$photo = $mrax->message->photo;
$gif = $mrax->message->animation;
$video = $mrax->message->video;
$music = $mrax->message->audio;
$voice = $mrax->message->voice;
$sticker = $mrax->message->sticker;
$document = $mrax->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $callback->data;
$callid = $callback->id;
$cname = $calback->message->from->first_name;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$cfid = $callback->message->from->id;
$user = $message->from->username;
$botname = bot('getme',['bot'])->result->username;
$inlinequery = $mrax->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;
mkdir("referal");
mkdir("stat");
mkdir("step");
mkdir("user");
mkdir("ban");
mkdir("sher");
if(!file_exists("referal/$fid.txt")){  
    file_put_contents("referal/$fid.txt","0");
}

if(file_get_contents("stat/stat.txt")){
} else{
file_put_contents("stat/stat.txt", "0");
}

$get = file_get_contents("referal/$fid2.txt");
$referalsum = file_get_contents("referal/$fid.txt");
$referalid = file_get_contents("referal/$fid.referal");
$referalcid = file_get_contents("referal/$ccid.referal");
$userstep = file_get_contents("step/$fid.txt");

$soni = file_get_contents("soni/$idi.soni");
if(!$soni) $soni = 0;

$stat = file_get_contents("stat/usid.txt");

$main_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📁ملفات بوتات"],['text'=>"📁ملفات بوتات 2"]],
[['text'=>"💠ملفات بوتات بايثون"]],
[['text'=>"💼محفظتك"],['text'=>"💸 كسب المال"]],
[['text'=>"☎️ فريق الدعم"],['text'=>"🛒ملفات مدفوعة"]],
]
]);


$sher = json_encode([
'inline_keyboard'=>[
[['text'=>"ملف بوت مصنع (20.000$)","callback_data"=>"2"],],
[['text'=>"ملف بوت حماية (45.000 $)","callback_data"=>"4"]],
[['text'=>"ملف بوت مصنع kodi (7.000 $)","callback_data"=>"6"],],
]
]);

$offline = json_encode([
'inline_keyboard'=>[
[['text'=>"👤 مالك البوت",'url'=>"https://t.me/$adminuser"]]
]
]);

$backk = json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ رجوع","callback_data"=>"backk"],],
]
]);


$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ رجوع"]]
]
]);

$getss = file_get_contents("ban/banid.txt");
if(mb_stripos($getss, $tx)!==false){
bot('sendMessage',[
'chat_id' => $cid,
'text' => "⚠️ اسف <b>$name</b> أنت محظورة!",
'parse_mode'=>'html',
]); 
return false;
}


if(isset($message)){
	$us = file_get_contents("stat/usid.txt");
    $uscount = substr_count($us, "
");
    $get = file_get_contents("stat/usid.txt");
    if(mb_stripos($get,$fid)==false){
        file_put_contents("stat/usid.txt", "$get
$fid");
        bot('sendMessage',[
          'chat_id'=>"$admin",
          'text'=>"*🆕 مستخدم جديد!*
الاسم: $name
ايدي: $fid
يوزر: @$username",
          'parse_mode'=>"markdown"
          ]);
    }
}

if($inlineid !== NULL){
bot('answerInlineQuery',[
    'inline_query_id'=>$inline_id,
    'cache_time'=>1,
    'results'=>json_encode([
    ['type'=>'article',
    'id'=>1,
    'title'=>"انقر لإرسال رابط الإحالة الخاص بك",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'MarkDown',
    'message_text'=>"⚡️ احصل على البوت الخاص بك في دقائق!

⬇️ للقيام بذلك، انتقل إلى الروبوت الموضح في الرابط أدناه:
https://t.me/$botname?start=$cid",
    ],
    'reply_markup'=>[
     'inline_keyboard'=>[
     [['text'=>"➡️ تسجيل الدخول إلى البوت",'url'=>"https://t.me/$botname?start=$inlineid"]]
     ]
     ]
     ],
])
]);
}


$on = file_get_contents("on.txt");

if ($on == "off" && $cid = "$admin") {

bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>@$botname يتم تنفيذ العمل الفني، وسأعود إلى الروبوت في غضون ساعات قليلة/start </b>",
	'reply_markup'=>$offline,
        'parse_mode'=>'html',
]);
}
if($text == "❌أيقاف البوت" && $cid == $admin){
file_put_contents("on.txt","off");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Offline.</b>",
        'parse_mode'=>'html',
]);
}

if($text == "✅تم تشغيل البوت" && $cid == $admin){
file_put_contents("on.txt","on");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Online</b>",
        'parse_mode'=>'html',
]);
}


if ($tx == "/start"){
    if(joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b> $name  أنا سعيد لرؤيتك في بوت لدينا. يمكنك العثور على أي ملف (للبوت) من خلال البوت الخاص بنا. ملاحظة: نقوم بنشر ملفات جديدة كل يوم🫡</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$main_menu
    ]);
}
} elseif (mb_stripos($tx, "/start")!==false) {
    if(joinchat($fid)=="true"){
        bot('sendMessage',[
        'chat_id' => $cid,
        'text' => "<b>🖥 القائمة الرئيسية</b>",
        'parse_mode'=>'html',
        'reply_markup'=>$main_menu
        ]);
        
        if(mb_stripos($stat, $fid)==false){
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        $olmos = file_get_contents("referal/$ex[1].txt");
        $olmoslar = $olmos + 1000;
        file_put_contents("referal/$ex[1].txt", $olmoslar);
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"📡<i>تهانينا، لقد قمت بدعوة صديقك إلى البوت الخاص بنا وانضم صديقك إلى قناتنا، ولهذا تم منحك 1000روبل$ </i>!",
        'parse_mode'=>'html'
        ]);
        }
        }

    }else{
        if(mb_stripos($stat, $fid)==false){      
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"📡<i>تهانينا، لقد قمت بدعوة صديقك إلى البوت الخاص بنا وانضم صديقك إلى قناتنا، ولهذا تم منحك 1000روبل$</i>",
        'parse_mode'=>'html'
        ]);
        file_put_contents("referal/$fid.referal", $ex[1]);
    }
    }else{
        unlink("referal/$fid.referal");
    }
    }
}

if($data == "tekshir"){
    if(joinchat($ccid) == "true"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid
        ]); 

        if($referalcid == true){
        $olmos = file_get_contents("referal/$referalcid.txt");
        $olmoslar = $olmos + 1000;
        file_put_contents("referal/$referalcid.txt", $olmoslar);
         bot('sendMessage',[
        'chat_id'=>$referalcid,
        'text'=>"✔️ <i>لقد اشترك صديقك في قناتنا. وحصلت على 1000 دولار</i> ",
        'parse_mode'=>'html'
        ]);
         unlink("referal/$ccid.referal");
     }

        bot('sendMessage',[
        'chat_id'=>$ccid,
        'text'=>"<b>🖥 القائمة الرئيسية</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$main_menu
        ]);
    }else{
        bot("answerCallbackQuery",[
        "callback_query_id"=>$callid,
        "text"=>"⚠️ اشترك في القنوات.",
        "show_alert"=>true,
        ]);
    }
}


if($data == "2"){
	 $get = file_get_contents("referal/$fid2.txt");
 if($get < 10000){
    bot('sendMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
    'text'=>"⚠️ عذرًا، لا توجد أموال كافية في حسابك.",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💸 كسب المال",'callback_data'=>"taklif"]],
    ]
    ])
    ]);
 }else{
 bot('sendMessage',[
    'chat_id'=>$ccid,
'message_id'=>$cmid,
    'text'=>"✓ لديك أموال كافية في حسابك. <code>SehrliRuchkabot</code> kodini olish uchun sonni yuboring: <code>0706</code>",
'parse_mode'=>"markdown",
    'reply_markup'=>$rpl,
    ]);
    }
}
if($reply=="✓ لديك أموال كافية في حسابك. <code>SehrliRuchkabot</code> kodini olish uchun sonni yuboring: <code>0706</code>"){
        bot('SendMessage',[
        'chat_id'=>$admin,
        'text'=>"*🔔 لقد وصل طلب الكود الجديد.
👤 اسم المستخدم: $name
🆔 ايدي المستخدم: $fid
🗄️ لديك: sehrli ruchka *
        
$text

📬 ارسل رسالة:
`/sms $fid` كلمه",
        'parse_mode'=>"markdown",
        ]);
sleep(2);
        bot('SendMessage',[
        'chat_id'=>$cid,
        'text'=>"*✓ Malumot kiritildi. Holat: Muvofaqiyatli.*
_/start buyrugʻi orqali botni yangilang!_",
        'parse_mode'=>"markdown",
        ]);
$gett = file_get_contents("referal/$fid.txt");
$gett -= 10000;
file_put_contents("referal/$fid.txt", $gett);
}

if($data == "4"){
	 $get = file_get_contents("referal/$fid2.txt");
 if($get < 25000){
    bot('sendMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
    'text'=>"⚠️ عذرًا، لا توجد أموال كافية في حسابك.",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💸 كسب المال",'callback_data'=>"taklif"]],
    ]
    ])
    ]);
 }else{
 bot('sendMessage',[
    'chat_id'=>$ccid,
'message_id'=>$cmid,
    'text'=>"✓ لديك أموال كافية في حسابك. أرسل الرقم للحصول على رمز Play sim: <code>0706</code>",
'parse_mode'=>"markdown",
    'reply_markup'=>$rpl,
    ]);
    }
}
if($reply=="✓ لديك أموال كافية في حسابك. أرسل الرقم للحصول على رمز Play sim: <code>0706</code>"){
        bot('SendMessage',[
        'chat_id'=>$admin,
        'text'=>"*🔔 لقد وصل طلب الكود الجديد.
👤 اسم المستخدم: $name
🆔 ايدي المستخدم: $fid
🗄️ لديك: playsim*
        
$text

📬 ارسل رسالة:
`/sms $fid` كلمه",
        'parse_mode'=>"markdown",
        ]);
sleep(2);
        bot('SendMessage',[
        'chat_id'=>$cid,
        'text'=>"*✓ Malumot kiritildi. Holat: Muvofaqiyatli.*
_/start buyrugʻi orqali botni yangilang!_",
        'parse_mode'=>"markdown",
        ]);
$gett = file_get_contents("referal/$fid.txt");
$gett -= 25000;
file_put_contents("referal/$fid.txt", $gett);
}


if($data == "6"){
	 $get = file_get_contents("referal/$fid2.txt");
 if($get < 7000){
    bot('sendMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
    'text'=>"⚠️ عذرًا، لا توجد أموال كافية في حسابك.",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💸 كسب المال",'callback_data'=>"taklif"]],
    ]
    ])
    ]);
 }else{
 bot('sendMessage',[
    'chat_id'=>$ccid,
'message_id'=>$cmid,
    'text'=>"✓ لديك أموال كافية في حسابك. Harfga kodini olish uchun sonni yuboring: <code>0706</code>",
'parse_mode'=>"markdown",
    'reply_markup'=>$rpl,
    ]);
    }
}
if($reply=="✓ لديك أموال كافية في حسابك.Harfga kodini olish uchun sonni yuboring: <code>0706</code>"){
        bot('SendMessage',[
        'chat_id'=>$admin,
        'text'=>"*🔔 لقد وصل طلب الكود الجديد.
👤 اسم المستخدم: $name
🆔 ايدي المستخدم: $fid
🗄️ لديك: الفيديو إلى الرسالة*
        
$text

📬 ارسل رسالة:
`/sms $fid` كلمه",
        'parse_mode'=>"markdown",
        ]);
sleep(2);
        bot('SendMessage',[
        'chat_id'=>$cid,
        'text'=>"*✓ Malumot kiritildi. Holat: Muvofaqiyatli.*
_/start buyrugʻi orqali botni yangilang!_",
        'parse_mode'=>"markdown",
        ]);
$gett = file_get_contents("referal/$fid.txt");
$gett -= 7000;
file_put_contents("referal/$fid.txt", $gett);
}


if($text=="🛒ملفات مدفوعة"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"*🛒ملفات مدفوعة* مرحبا بك في
🎁قم بشراء ملفات باستخدام العملات المعدنية التي كسبتها.",
	'parse_mode'=>"markdown",
	'reply_markup'=>$sher,
]);
}

if($tx == "◀️ رجوع" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🏠 القائمة الرئيسية",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu
    ]);
}

if($tx == "◀️ رجوع" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"لقد عدت الى القائمه الرئسية",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu,
    ]);
    unlink("step/$fid.txt");
}


if($tx == "📁ملفات بوتات" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"اختر ملفات التي تحتاجها😉",
     'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
        [['text'=>"📁ملف بوت ارقام",'callback_data'=>"qorovulphp"]],
        [['text'=>"📁ملف ويب هوك",'callback_data'=>"webhookphp"]],
        [['text'=>"📁ملف بوت العاب",'callback_data'=>"uzgramphp"]],
        [['text'=>"📁ملف بوت صيغ",'callback_data'=>"ramazonphp"]],
        [['text'=>"📁ملف بوت قبول انضام",'callback_data'=>"telbozorphp"]],
        [['text'=>"📁ملف بوت ملحظات",'callback_data'=>"konspektphp"]],
        [['text'=>"📁ملف بوت رشق مشهدات",'callback_data'=>"logomakerphp"]],
        [['text'=>"📁ملف بوت لعبة ",'callback_data'=>"nikphp"]],
        [['text'=>"📁ملف بوت يكتب لك على صوره",'callback_data'=>"konvertorphp"]],
        [['text'=>"📁ملف بوت ملصقات",'callback_data'=>"elonphp"]],
        [['text'=>"📁ملف بوت تواصل",'callback_data'=>"pulphp"]],
            ] 
 
        ])
]);
}
if($data == "qorovulphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2122",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}


if($data == "webhookphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/185",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "uzgramphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2107",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "ramazonphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2234",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "telbozorphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2144",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "konspektphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2163",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "logomakerphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2237",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "nikphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2161",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "konvertorphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2143",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "elonphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2141",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}
if($data == "pulphp"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/2081",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}




if($tx == "📁ملفات بوتات 2" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"أهلا ومرحبا بكم في القسم الثاني من ملفات بوتات",
     'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
        [['text'=>"📁ملف بوت حماية",'callback_data'=>"vkmphp2"]],
        [['text'=>"📁ملف بوت متجر",'callback_data'=>"wpseenphp2"]],
        [['text'=>"📁ملف بوت كتابة اسمك",'callback_data'=>"TGmakerphp2"]],
        [['text'=>"📁ملف بوت نشر",'callback_data'=>"aloqaphp2"]],
        [['text'=>"📁ملف بوت حظر المشرفي",'callback_data'=>"Musiqaphp2"]],
        [['text'=>"📁ملف بوت الصيد المحدث",'callback_data'=>"axchapulphp2"]],
        [['text'=>"📁ملف بوت مصنع",'callback_data'=>"harfvideophp2"]],
            ] 
 
        ])
]);
}
if($data == "vkmphp2"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/976?single",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}
if($data == "wpseenphp2"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/1314",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}
if($data == "TGmakerphp2"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/1280",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}


if($data == "aloqaphp2"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/1200",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "Musiqaphp2"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/1109",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}


if($data == "axchapulphp2"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/1105",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "harfvideophp2"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/1060",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}





if($tx == "💠ملفات بوتات بايثون" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"اختر ملفات بايثون التي تحتاجها😉",
     'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
        [['text'=>"💠ملف بوت زغرفا",'callback_data'=>"sharepostpy"]], 
        [['text'=>"💠ملف بوت ترجمة",'callback_data'=>"vikipediyapy"]],
        [['text'=>"💠ملف بوت تحميل من ساوند كلاود",'callback_data'=>"calendarpy"]],
            ] 
 
        ])
]);
}

if($data == "sharepostpy"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/790",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "vikipediyapy"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/249",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}

if($data == "calendarpy"){
    bot('sendDocument',[
    'chat_id'=>$ccid,
     'document'=>"https://t.me/AX_GB/248",
        'caption'=>"ملف تابع لى قناه مستر اكس @AX_GB ✅",
]);
}
if($tx == "💼محفظتك" and joinchat($fid)=="true"){
    $get = file_get_contents("referal/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🗄 مرحبا بك فى قسم المحفظة</b>

<b>💵رصيدك:</b> <b>$get UZS</b>
<b>👥عدد اصدقائك :</b> <b>$soni ta</b>

ملاحظة: اضغط على الزر  /start لى تحديث البوت❗️
",
     'parse_mode'=>"html",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
        [['text'=>"💸 كسب المال",'callback_data'=>"taklif"]],
            ]
        ])
]);
}


if($tx == "💸 كسب المال"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"📑 اختر واحد من ما يلي:",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"👥 رابط الدعوة",'callback_data'=>"taklif"]],
]
])
   ]);
}



if($data == "رجوع"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
]);

bot('SendMessage',[
'chat_id'=>$ccid,
	'text'=>"📑 اختر واحد من ما يلي:",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"👥 رابط الدعوة",'callback_data'=>"taklif"]],
]
        ])
]);
}

if($data == "taklif"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
     'message_id'=>$cmid,
]);

bot('SendMessage',[
'chat_id'=>$ccid,
	'text'=>"👥<b> روابط الإحالة الخاصة بك:</b>

<code>https://t.me/$botname?start=$ccid</code>

<code>tg://resolve?domain=$botname&start=$ccid</code>

<b>عدد اشخاص مدعون z: $soni شخص</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"↗️مشاركة",'url'=>"https://t.me/share/url?url=https://t.me/$botname?start=$ccid"]],
	        [['text'=>"◀️ رجوع",'callback_data'=>"رجوع"]],
        ]
        ])
]);
}


if($data == "backk"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
     'message_id'=>$cmid,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
'text'=>"رجوع qaytdik.",
]);
unlink("step/$fid.txt");
exit();
}

if($text == "☎️ فريق الدعم"){
	file_put_contents("step/$fid.txt","xabar");
  bot('sendMessage',[
  'chat_id'=>$cid,
  'message_id'=>$mid,
  'text'=>"أدخل رسالتك!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($userstep=="xabar"){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"🔏 تم استلام الطلب.

👤 اسم المرسل :  <a href = 'tg://user?id=$uid'>$name</a>
🌐 يوزر: @$user
🆔 ايدي المرسل : <a href = 'tg://user?id=$uid'>$uid</a>
➖➖➖➖➖➖➖➖

$text

➖➖➖➖➖➖➖➖

ارسل رسالة:
<code>/sms $uid</code> كلمه",
'parse_mode'=>'html',
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*📨 لقد تم إرسال طلبك إلى المشرف. يمكنك الحصول على حظر بسبب شكوى خاطئة ⛔️*
*• 12 سوف تحصل على الجواب في غضون ساعة √*",
'parse_mode'=>"markdown",
'reply_markup'=>$main_menu,
]);
unlink("step/$fid.txt");
exit();
}

//لوحة الادارةi(/panel) 

if(($tx == "/panel" or $tx == "⬅️ لوحة الادارة") and $cid == $admin){
    bot('SendMessage',['chat_id'=>$cid,'message_id'=>$mid]);
    bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"مرحبا بكم في لوحة الإدارة يا صديقي",
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"↗️ قسم الاذاعة"],['text'=>"📋 رسالة إلى المستخدم"]],
    [['text'=>"📊 إحصائيات"],['text'=>"📂سحب نسخه البوت"]],
    [['text'=>"❌أيقاف البوت"],['text'=>"✅تم تشغيل البوت"]],
    [['text'=>"◀️ رجوع"]]
    ]
    ])
    ]);
}

if($tx == "⬅️ رجوع"){
    unlink("step/admin.txt");
    bot('sendMessage',[
        'text'=>"<b>تم الغاء الاذاعة</b>استخدم القائمة أدناه: ",
        'chat_id'=>$admin,
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"↗️ قسم الاذاعة"],['text'=>"📋 رسالة إلى المستخدم"]],
    [['text'=>"📊 إحصائيات"],['text'=>"📂سحب نسخه البوت"]],
    [['text'=>"❌أيقاف البوت"],['text'=>"✅تم تشغيل البوت"]],
    [['text'=>"◀️ رجوع"]]
    ]
    ])
    ]);
}

if(mb_stripos($tx, "تبرع بى مال")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅للتبرع بالمال، اكتب هكذا: سطر واحد لأسفل، اكتب رقم الهوية، وسطر آخر، اكتب الماسة! على سبيل المثال:</b>
<code>/plus
$admin
1000</code>",
'parse_mode' => 'html',
'reply_markup'=>$bajsjs,
]);
}elseif(mb_stripos($tx, "/plus")!==false){
if($cid == $admin){
$id = explode("
", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos+$id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>🛠 لقد تم ملء الحساب.
🆔 ايدي المرسل : $id1
💳 مكتمل : $id2 الماس</b>",
'parse_mode' => 'html',
'reply_markup'=>$panel,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*🛠 لقد تم $id2 olmos ga مكتمل.*",
'parse_mode'=>'Markdown',
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>يمكن لأصحاب الروبوتات فقط استخدام هذا القسم!</b>",
'parse_mode'=>'Markdown',
]);
}
}


if(mb_stripos($tx, "💸 Pul ayirish")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅اتبع الأمر أدناه لسحب الأموال! انزل سطرًا واحدًا واكتب رقم الهوية، وانزل سطرًا آخر واكتب الماسة! على سبيل المثال:
/minus
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($tx, "/minus")!==false){
if($cid == $admin){
$id = explode("n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos - $id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>🛠 خصم من الحساب.
🆔 ايدي المرسل : $id1
💳 تم حلة : $id2 UZS</b>",
'parse_mode' => 'html',
'reply_markup'=>$menu,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*🛠 لقد تم خصم $id2 من حسابك.*",
'parse_mode'=>'Markdown',
]);
}else{
 bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>يمكن لأصحاب الروبوتات فقط استخدام هذا القسم!</b>",
'parse_mode'=>'Markdown',
]);
}
}
/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @AX_GB
DEV : @O_1_W
Translator : @AX_GB
/*====================*/

if($tx == "📂سحب نسخه البوت" and $cid == $admin){
    bot('sendDocument',[
    'chat_id'=>$admin,
    'document'=>new CURLFile(__FILE__),
    'caption'=>"@$botname kodi",
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
        'keyboard'=>[
        [['text'=>"⬅️ لوحة الادارة"]],
        ]
        ])
    ]);
}


if($tx == "📊 إحصائيات" and joinchat($fid)=="true"){
    $us = file_get_contents("stat/usid.txt");
    $uscount = substr_count($us, "
");
    bot('sendMessage',[
    'chat_id' => $cid,
    'text'=>"📊 إحصائيات
👤عدد أعضاء البوت: *$uscount* شخص ",
    'parse_mode'=>"markdown",
    'reply_markup'=>$back_menu
    ]);
}

if($text == "📋 رسالة إلى المستخدم"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"✔ استخدم الامر التالي لإرسال رسالة للمستخدم.
/sms 🆔️ رسالة",
'reply_markup'=>$back,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*⚠️ فقط لدي هذه الميزة @$adminuser استطيع ان استخدم.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨*رسالة جديدة من المشرف*

*📬 رسالة:$sms
☎️ مالك البوت: @$adminuser*",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"👤 تم ارسال رسالتك. الحالة: ناجحة.",
'parse_mode'=>"markdown", 
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*⚠️ فقط لدي هذه الميزة @$adminuser استطيع ان استخدم.*",
'parse_mode'=>'Markdown',
]);
}
}


$xabar = file_get_contents("send.txt");
if($text == "↗️ قسم الاذاعة"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*أدخل نص الرسالة المراد إرسالها للمستخدمين! لالغاء /cancel انقر على.*
نوع الرسالة: Markdown",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*⚠️ فقط لدي هذه الميزة @$adminuser استطيع ان استخدم.*",
'parse_mode'=>'Markdown',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"تم الغاء الاذاعة",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("stat/usid.txt");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'markdown'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"<b>✓ تم إرسالها إلى جميع المستخدمين</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]); unlink("send.txt");
}

?>

/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @AX_GB
DEV : @O_1_W
Translator : @AX_GB
/*====================*/