<?php
// 导入已经封装函数
require_once "../classes/MySQLDatabaseControl.class.php";
require_once './core/sqlExec.php';

// 初始化数据库操控类服务函数集合对象
$dbc = new MySQLDatabaseControl();

// 连接到数据库
$connection = $dbc->openConnection();

// 合成SQL语句
$command = "SELECT * FROM sol_confessions;";

// 执行SQL语句并返回JSON格式数据
echo sqlExec($connection, $command);

// 关闭SQL连接
$connection->close();
