<?php
class Loader{
	//映射路径
	private static $vendorMap = [
		'App'=>__DIR__,
	];

	//自动加载
   	public static function autoload($class)
   	{
   		$file = self::findFile($class);

   		if(file_exists($file)){
   			self::includeFile($file);
   		}
   	}

	//解析路径
	public static function findFile($class)
	{
		$vendor = substr($class, 0, strpos($class, '\\')); //顶级命名空间
		$vendorDir = self::$vendorMap[$vendor]; //文件基目录
		$filePath = substr($class, strlen($vendor)).'.php'; //文件相对路径
		return strtr($vendorDir.$filePath, '\\', DIRECTORY_SEPARATOR); //文件标准路径
	}

	//引入文件
	private static function includeFile($file)
	{
		if(is_file($file)){
			include($file);
		}else{
			die('文件不存在!');
		}
	} 
}