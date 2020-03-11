<?php
header("Content-Type: application/json; charset=utf-8");
error_reporting(E_ALL);

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

/**
 * Desc: php操作抓取类
 * Author yufei
 * Date: 2017/11/03
 */
class capture{
    protected $dbConfig = []; //数据库配置
    protected $captureConfig = []; //抓取配置

    /**
     * 初始化类
     * @param array
     */
    public function __construct() 
    {
        class_exists('phpQuery') or die("phpQuery: class not exists.");
        class_exists('MMysql') or die("phpQuery: class not exists.");
        
        $this->dbConfig = DBConfig::$config; //加载数据库配置
        $this->mysqlObj = new MMysql([
            'host'=>$this->dbConfig['host'],
            'port'=>$this->dbConfig['port'],
            'user'=>$this->dbConfig['user'],
            'passwd'=>$this->dbConfig['passwd'],
            'dbname'=>$this->dbConfig['dbname'],
        ]);
        $this->captureConfig = CaptureConfig::$config; //加载抓取配置

    }

    //脚本运行方法
    public function cronRun($obj)
    {
        if(empty($this->captureConfig)){
            die("抓取配置为空!");
        }
        foreach($this->captureConfig as $params){
            call_user_func_array([$obj, $params['funName']], [$params]);
            sleep(2);
        }
    }

    //抓取数据插入
    public function insertData($data)
    {
        $data = array_merge($data,['create_at'=>time()]);
        $this->mysqlObj->insert('capture',$data);
    }

    //抓取方法
    public function youxin_2car($params)
    {
        phpQuery::newDocumentFile($params['url']);
        $firstCate = pq(".caritem .pad");
        foreach($firstCate as $first){
            $title = pq($first)->find(".tit")->html();
            $price = pq($first)->find("p em")->text();
            $otherInfo = pq($first)->find("span")->text();
            $this->insertData([ //插入表
                'site_name'   =>$params['name'],
                'type_name'   =>$params['type'],
                'capture_url' =>$params['url'],
                'product_data'=>json_encode([
                    'title'=>$title,
                    'price'=>$price,
                    'otherInfo'=>$otherInfo,
                ],JSON_UNESCAPED_UNICODE),
            ]);
        }
    }
}

$obj = new capture();
$obj->cronRun($obj);
















