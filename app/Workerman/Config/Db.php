<?php
/**
 * mysql配置
 * @author walkor
 */

namespace App\Workerman\Config;

class Db
{
    /**
     * 数据库的一个实例配置，则使用时像下面这样使用
     * $user_array = Db::instance('user')->select('name,age')->from('users')->where('age>12')->query();
     * 等价于
     * $user_array = Db::instance('user')->query('SELECT `name`,`age` FROM `users` WHERE `age`>12');
     * @var array
     */
    public static $homestead = array(
        'host' => '127.0.0.1',
        'port' => '3306',
        'dbname' => 'lara_im',
        'user' => 'root',
        'password' => 'r6phifROprLT5OCh!7aH',
        'charset' => 'utf8',
    );
}