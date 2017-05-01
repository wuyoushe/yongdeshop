<?php
return array(
  /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop0610',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'qwe2721080',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
    // 'URL_HTML_SUFFIX' =>'xml',
   'SHOW_PAGE_TRACE' =>true,
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'MODULE_ALLOW_LIST'     =>array('Home','Admin'),//定义可供访问的分组列表
   // 'DB_DSN'    => 'mysql:host=localhost;dbname=thinkphp;charset=UTF-8',
    //'配置项'=>'配置值'
     'TMPL_ENGINE_TYPE'      =>  'Smarty', 
    // 'TMPL_ENGINE_CONFIG' =>array(
    //     'left_delimiter'=>'<@@',
    //     'right_delimiter'=>'@@>',
         
    // ), 
    
);
   /* 数据缓存设置 */
   