<?php
/* 导入已经封装函数 */
require_once "../classes/MySQLDatabaseControl.class.php";

/* 初始化数据库操控类服务函数集合对象 */
$dbc = new MySQLDatabaseControl();

/* 连接到数据库 */
$connection = $dbc->openConnection();

/* 合成SQL语句 */
$command = "SELECT * FROM sol_confessions;";

/* 执行SQL语句并返回JSON格式数据 */
if ($result = $connection->query($command)) {
    if ($result->num_rows > 0) {
        $confessions = array();
        while ($row = $result->fetch_assoc()) {
            $count = count($row);
            for ($i = 0; $i < $count; $i++) {
                unset($row[$i]);
            }
            array_push($confessions, $row);
        }
        $json = json_encode($confessions);
        echo $json;
    } else {
        echo "err" . $connection->error;
    }
}


/* 关闭Sql连接 */
$connection->close();
