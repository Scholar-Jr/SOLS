<?php

/**
 * Class: MySQLDatabaseControl
 * Description: MySQL数据库控制器
 */
class MySQLDatabaseControl
{
    /**
     * @function: openConnection
     * @time: 2/5/21 3:40 PM
     * @description: 建立并返回数据库连接
     * @return mysqli 数据库连接
     */
    function openConnection()
    {
        // 数据库连接设置
        $MySQLAccount = array(
            "hostname" => "localhost",
            "username" => "root",
            "password" => "qq840819",
            "database" => "sol"
        );

        // 使用mysqli与数据库建立连接
        $connection = new mysqli(
            $MySQLAccount["hostname"],
            $MySQLAccount["username"],
            $MySQLAccount["password"],
            $MySQLAccount["database"]
        );

        // 检查连接是否存在错误
        if ($connection->connect_error) {
            die("连接到数据库时出现了问题：" . $connection->connect_error);
        }

        // 修改数据库连接编码方案
        mysqli_set_charset($connection, "utf8");

        // 返回连接
        return $connection;
    }
}