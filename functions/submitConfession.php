<?php
/* 导入已经封装函数 */
require_once "../classes/MySQLDatabaseControl.class.php";

/* 初始化数据库操控类服务函数集合对象 */
$dbc = new MySQLDatabaseControl();

/* 获取通过POST提交的数据 */
$sender = htmlspecialchars($_POST['sender']);
$recipient = htmlspecialchars($_POST['recipient']);
$content = htmlspecialchars($_POST['content']);

/* 合成Sql语句 */
$command = "INSERT INTO `sol_confessions` (sender, recipient, content, date) VALUES ('$sender', '$recipient', '$content', NOW());";

/* 连接到数据库 */
$connection = $dbc->openConnection();

/* 执行Sql语句 */
if ($connection->query($command) === true) {
    echo '
    {
        "statue": "suc",
        "data": [
            {"sender": "$sender"},
            {"recipient": "$recipient"},
            {"content": "$content"}
        ]
    }
    ';
} else {
    echo "err" . $connection->error;
}

/* 关闭Sql连接 */
$connection->close();
