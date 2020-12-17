<?php

class MySQLDatabaseControl
{
    /**
     * Description: 建立并返回数据库连接
     */
    function openConnection()
    {
        /* 数据库设置 */
        $MySQLAccount = array(
            "hostname" => "localhost",
            "username" => "root",
            "password" => "",
            "database" => "sol"
        );

        /* 建立连接 */
        $connection = new mysqli(
            $MySQLAccount["hostname"],
            $MySQLAccount["username"],
            $MySQLAccount["password"],
            $MySQLAccount["database"]
        );

        /* 检查连接 */
        if ($connection->connect_error) {
            die("连接到数据库时出现了问题：" . $connection->connect_error);
        }

        return $connection;
    }
}
