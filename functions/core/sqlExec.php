<?php
function sqlExec($connection, $command) {
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
    mysqli_close($connection);
}