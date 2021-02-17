<?php
/**
 * @function sqlExec
 * @time: 2/5/21 3:47 PM
 * @description: 执行数据库命令并返回JSON数据
 * @param $connection mysqli 数据库连接
 * @param $command string 将要执行的命令
 * @return false|int|string 返回JSON数据或状态
 */
function sqlExec($connection, $command) {
    // 执行数据库命令并返回处理结果
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
            return json_encode($confessions);
        } else {
            return "err" . $connection->error;
        }
    }

    // 关闭函数中传入的连接
    mysqli_close($connection);

    // 避免IDE出现语法警告
    return 0;
}