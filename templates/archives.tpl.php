<div class="archives">
    <div class="search">
        <label>
            <input type="text" autocomplete="off" placeholder="🔭 输入您的昵称或是被表白方的昵称进行检索" class="search-input" id="keyword"/>
        </label>
        <div class="search-box">
            <button type="button" class="search-button"
                    onclick="searchAndPutConfessions(document.getElementById('keyword').value)">
                <i class="search-icon fa fa-search"></i>
            </button>
        </div>
    </div>

    <div class="container">
        <main class="main" id="confessions-area">
            <?php
            /**
             * @description: 考虑到curl插件对所有服务器的兼容性，sols采用直接连接到数据库这种更原始的方法请求数据。
             */
            require_once "../classes/MySQLDatabaseControl.class.php";
            require_once "../functions/core/sqlExec.php";

            $dbc = new MySQLDatabaseControl();
            $connection = $dbc->openConnection();
            $command = "SELECT sender,recipient,content,date FROM sol_confessions;";

            // 执行sqlExec并获得其返回数据
            $data = sqlExec($connection, $command);

            // JSON解码
            $data_array = json_decode($data, true);

            // 遍历数组并渲染
            foreach ($data_array as $value) {
                echo '
                    <div class="archives-confessions">
                        <h2><span class="confession-name">' . $value['sender'] . '</span>&nbsp;<span>对</span>&nbsp;<span class="confession-name">' . $value['recipient'] . '</span>&nbsp;说</h2>
                            <svg class="quotation-mark" xmlns="http://www.w3.org/2000/svg" width="87.782" height="35.156" viewBox="0 0 87.782 63.156">
                                <path data-name="“"
                                    d="M572.194,664.747c10.18,0,18.047-5.667,18.341-15.2,0.263-8.5-6.4-16.884-14.644-16.884-8.63,0-10.015.2-10.015-3.673,0-10.022,13.962-19.18,18.983-21.345-0.832-4.565-1.726-6.682-3.477-5.866-17.195,8.007-28.562,23.848-28.562,40.943C552.82,659.073,563.3,664.747,572.194,664.747Zm50.074,0c10.18,0,18.047-5.667,18.341-15.2,0.263-8.5-6.4-16.884-14.644-16.884-8.631,0-10.016.2-10.016-3.673,0-10.022,13.963-19.18,18.984-21.345-0.833-4.565-1.726-6.682-3.478-5.866-17.194,8.007-28.561,23.848-28.561,40.943C602.894,659.073,613.377,664.747,622.268,664.747Z"
                                transform="translate(-552.812 -601.594)"></path>
                            </svg>
                        <p class="confession-content">' . $value['content'] . '</p>
                        <p class="confession-time">' . $value['date'] . '</p>
                    </div>
                    ';
            }
            ?>
        </main>
    </div>
</div>