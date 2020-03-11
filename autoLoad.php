<?php

/**
 * Desc: 加载文件类
 * Author yufei
 * Date: 2017/11/03
 */
class autoload{
    public static function loadFile($class)
    {
        $file = $class.".php";
        require_once($file);
    }
}

/** 定义根目录 */
define('_ROOT_DIR_', dirname(__FILE__));
/** 定义工具类目录(相对路径) */
define('_TOOLS_DIR_', '/tools');
/** 定义配置文件目录(相对路径) */
define('_CONFIGS_DIR_', '/configs');
/** 设置包含路径 */
@set_include_path(get_include_path() . PATH_SEPARATOR . 
_ROOT_DIR_. PATH_SEPARATOR . 
_ROOT_DIR_._TOOLS_DIR_. PATH_SEPARATOR . 
_ROOT_DIR_._CONFIGS_DIR_);
//echo ini_get('include_path');exit;
spl_autoload_register(  array('autoload','loadFile')  );