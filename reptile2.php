<?php
header("Content-Type: application/json; charset=utf-8");
error_reporting(E_ALL);

//配置
$config = [
    [
        'name'=>'京东超市',
        'url' =>'http://chaoshi.jd.com/',
        'type'=>'限时抢购',
        'funName'=>'jd_chaoshi',
    ]
    
];

function jd_chaoshi($params){
    $out=_getUrl($params['url']);
    $out=preg_replace(array('/<head>([\s\S]+?)<\/head>/i','/<p>/i'),array('<head><meta http-equiv="Content-Type" content="text/html;charset=utf-8"></head>','<br><p>'),$out);
    $xpath = new DOMXPath($dom);

    $nodes=$xpath->query('//div[@id="o-header-2013"]');
    //var_dump($nodes);exit;
    foreach($nodes as $node){
        echo $node->textContent."\n";      
    }

    
}


//主方法
function main($config)
{
    foreach($config as $params){
        call_user_func_array($params['funName'], [$params]);
        sleep(2);
    }
}


main($config);

function _getUrl($url){
   $curl=curl_init();
   $options=array(
        CURLOPT_URL=>$url,
        CURLOPT_RETURNTRANSFER =>1,
        CURLOPT_USERAGENT=>'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36',
        CURLOPT_CONNECTTIMEOUT=>60
        );
   curl_setopt_array($curl,$options);
   $out=curl_exec($curl);
   curl_close($curl);
   return $out;
    }













