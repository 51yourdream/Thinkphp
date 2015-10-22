<?php
return array(
	//'配置项'=>'配置值'
	
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'auth',    // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'o123456',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'kxw_',    // 数据库表前缀
    'SHOW_PAGE_TRACE'   =>  true,   //显示页面Trace信息 
    // 'DB_DSN'    => 'mysql:host=localhost;dbname=auth;charset=UTF8',		//如果是pdo连接需要加上这个配置
   'AUTH_CONFIG' =>array(
                    'AUTH_ON'           =>true,                      // 认证开关
                    'AUTH_TYPE'         => 1,                         // 认证方式，1为实时认证；2为登录认证。
                    'AUTH_GROUP'        => 'kxw_auth_group',        // 用户组数据表名
                    'AUTH_GROUP_ACCESS' => 'kxw_auth_group_access', // 用户-用户组关系表
                    'AUTH_RULE'         => 'kxw_auth_rule',         // 权限规则表
                    'AUTH_USER'         => 'kxw_user' ,           // 用户信息表(注意:这里必须加上表前缀
                    ),
);