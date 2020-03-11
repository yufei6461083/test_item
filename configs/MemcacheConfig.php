<?php
namespace App\configs;
//DB配置
class MemCacheConfig{
	//Memcache,支持多个分布式(地址,端口,权重)
	public static $config=[
		[
			[
				'host'=>'127.0.0.1',
			    'port' =>11211,
			    'weight'=>50,
			],
			[
				'host'=>'127.0.0.1',
			    'port' =>11212,
			    'weight'=>50,
			],
		],
		// [
		// 	[
		// 		'host'=>'127.0.0.1',
		// 	    'port' =>11213,
		// 	    'weight'=>50,
		// 	],
		// 	[
		// 		'host'=>'127.0.0.1',
		// 	    'port' =>11214,
		// 	    'weight'=>50,
		// 	],
		// ],
	];
}

