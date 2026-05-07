<?php
$mix_req=30;
$time_fr=30;
$time_bl=30;
$ip=$_SERVER['REMOTE_ADDR'];
$log_file="../af11503cc9da7b1b5715a264cbd9327b/log.txt";
$ben_file="../af11503cc9da7b1b5715a264cbd9327b/banned_ips.txt";
$now=time();

if(file_exists($ben_file)){
    foreach(file($ben_file,FILE_IGNORE_NEW_LINES)as $banned){
        list($banned_ip,$unblock_time)=explode("|",$banned);
        if($banned_ip===$ip&&$now<(int)$unblock_time){
            header("HTTP/1.1 403 Forbidden");
            readfile("../b.html");
            exit();

        }
    }
}

$requests=file_exists($log_file)? array_filter(file($log_file,FILE_IGNORE_NEW_LINES),function($req)use ($ip,$now,$time_fr){
    list($req_ip ,$timestamp) =explode("|",$req);
    return $req_ip===$ip&& $timestamp>$now-$time_fr;
}):[];
$requests[]="$ip|$now";
file_put_contents($log_file,implode(PHP_EOL,$requests).PHP_EOL);



if(count($requests) > $mix_req){
    file_put_contents($ben_file ,"$ip|".($now+$time_bl).PHP_EOL,FILE_APPEND);
    header("HTTP/1.1 403 Forbidden");
    readfile("../b.html");
    exit();

}
#------------------------------------------------------------------------------
$ip= "\n ip: ".$_SERVER['REMOTE_ADDR'];
$USEER="\n System and Browser:".$_SERVER['HTTP_USER_AGENT'];
$filoo=fopen('../af11503cc9da7b1b5715a264cbd9327b/1.txt','a');
fwrite($filoo,$ip);
fwrite($filoo,$USEER);
fclose($filoo);

$user_agent1=$_SERVER['HTTP_USER_AGENT']??'';
$blocked_agents1=[
    "ahmed" ,"py","python","python3","roby","go","php","php5","rupy","google chrome","googlechrome","perl","parl"
];
foreach($blocked_agents1 as $blocked1){
    if (strpos(strtolower($user_agent1),$blocked1)!== false){
        http_response_code(404);
        exit;
    }
}
#--------------------------------------------------------------------------
$ip= "\n ip: ".$_SERVER['REMOTE_ADDR'];
$USEER="\n System and Browser:".$_SERVER['HTTP_USER_AGENT'];
$filoo=fopen('../af11503cc9da7b1b5715a264cbd9327b/1.txt','a');
fwrite($filoo,$ip);
fwrite($filoo,$USEER);
fclose($filoo);
$blocked_agents =[
    "ahmed" ,"py","python","python3","roby","go","php","php5","rupy","google chrome","googlechrome","perl","parl","curl","nmap","zenmap"
];
$user_agent =strtolower($_SERVER["HTTP_USER_AGENT"]?? '');
foreach($blocked_agents as $agent ){
    if(strpos($user_agent, $agent) !== false){
        die("h11h11hfheikukdjpujeoijioj3iojioerhreuh4ru4h8uinujnuvcnf8ehvu9ierhu8vnh047u4nucn0un94jijmim45ipjv9j4598jvcmgim4ui5nuicv950vhv98c5niu9ng950h1h1hjkhljkdhsjkjbljbdwuweiwehuiehpieu" .htmlspecialchars($user_agent));

    }

#-----------------------------------------------------------
};
$user_agen=$_SERVER['HTTP_USER_AGENT']??'';
$blocked_age=[
    "ahmed" ,"py","python","python3","roby","go","php","php5","rupy","google chrome","googlechrome","perl","parl"
];
foreach($blocked_age as $blocked){
    if(strpos(strtolower($user_agen),$blocked)!==false){
        http_response_code(404);
        exit;
        }
};


?>
<!DOCTYPE html>
<html lang="en">
<head >
    <link rel="icon" href="../1.ico">
    <meta charset="UTF-8">
    <title>R.AT</title>
</head>
<body style="text-align: center;background-color: black; color: cornsilk;">
    <form action="r.at"><button>white</button></form>
    <CEnter>
    <h1>اولاً</h1>
    <h2>حروف مكعب روبيك </h2>
    <h3>_____________________________________________________________</h3>
    <h1>R</h1>
    <img src="1.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <h1>U</h1>
    <img src="2.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>L</H1>
    <img src="3.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>D</H1>
    <img src="4.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>F</H1>
    <img src="5.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>B</H1>
    <img src="6.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>M</H1>
    <img src="7.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>E</H1>
    <img src="8.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>S</H1>
    <img src="9.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <h1>R'</h1>
    <img src="10.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <h1>U'</h1>
    <img src="11.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>L'</H1>
    <img src="12.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>D'</H1>
    <img src="13.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>F'</H1>
    <img src="14.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>B'</H1>
    <img src="15.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>M'</H1>
    <img src="16.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>E'</H1>
    <img src="17.png"width="100%" height="100%" />
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <H1>S'</H1>
    <img src="18.png" width="100%" height="100%"/>
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <h1>السنتر </h1>
    <img src="19.png" alt="" width="100%" height="100%">
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <h1>قطعة مجاورة</h1>
    <img src="20.png" alt="" width="100%" height="100%">
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <h1>زوية</h1>
    <img src="21.png" alt="" width="100%" height="100%">
    <h1>_-_-_-_-_-_-_-_-_</h1>
    <a href="../2/"><h1>اضغط هنا لتبدأ تعلم الحل</h1></a>
</CEnter>
</body>
</html>
