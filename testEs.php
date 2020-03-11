<?php

require "autoLoad.php";

function getChar($num)  // $num为生成汉字的数量
{

   $b = '';

   for ($i=0; $i<$num; $i++) {

       // 使用chr()函数拼接双字节汉字，前一个chr()为高位字节，后一个为低位字节

       $a = chr(mt_rand(0xB0,0xD0)).chr(mt_rand(0xA1, 0xF0));

       // 转码

       $b .= iconv('GB2312', 'UTF-8', $a);

   }

   return $b;

}

$es = new MyElasticSearch();

//$r = $es->delete_index();

   // $r = $es->create_index();

   // $r = $es->create_mappings();

   // $r = $es->get_mapping();
   // print_r($r);exit;
 

// $docs = [];
// $docs[] = ['id'=>1,'title'=>'苹果手机','content'=>'苹果手机，很好很强大。','price'=>1000];
// $docs[] = ['id'=>2,'title'=>'华为手环','content'=>'荣耀手环，你值得拥有。','price'=>300];
// $docs[] = ['id'=>3,'title'=>'小度音响','content'=>'智能生活，快乐每一天。','price'=>100];
// $docs[] = ['id'=>4,'title'=>'王者荣耀','content'=>'游戏就玩王者荣耀，快乐生活，很好很强大。','price'=>998];
// $docs[] = ['id'=>5,'title'=>'小汪糕点','content'=>'糕点就吃小汪，好吃看得见。','price'=>98];
// $docs[] = ['id'=>6,'title'=>'小米手环3','content'=>'秒杀限量，快来。','price'=>998];
// $docs[] = ['id'=>7,'title'=>'iPad','content'=>'iPad，不一样的电脑。','price'=>2998];
// $docs[] = ['id'=>8,'title'=>'中华人民共和国','content'=>'中华人民共和国，伟大的国家。','price'=>19999];

for ($i = 1; $i < 1000000; $i++) { 

	$docs = [
		'id'=>$i,
		'title'=> getChar(mt_rand(5, 8)),
		'content'=> getChar(mt_rand(10, 20)),
		'price'=>mt_rand(10000, 20000)
	];
	$r = $es->add_doc($i, $docs);
	if($i % 1000 == 0){
		print_r($r);
	}
	//print_r($r);
}

	//usleep(200000);
	echo '=====================================';
//var_dump($docs);exit;
// foreach ($docs as $k => $v) {
//     $r = $es->add_doc($v['id'],$v);
//     print_r($r);
// }
