<div class="archives">
    <!-- <div class="search">
        <input type="text" autocomplete="off" placeholder="输入您的昵称或是被表白方的昵称进行检索" class="search-input"></input>
        <div class="search-box">
            <button type="button" class="search-botton">
                <i class="search-icon fa fa-search"></i>
            </button>
        </div>
    </div> -->
    <div class="container">
        <main class="main">
            <?php
            require_once "../../functions/urlConfig.php";

            /* 使用curl查询返回所所有数据的api */
            if (function_exists('curl_init')) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, siteUrl("localhost" ,false) . "/functions/getConfessions.php");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                $data = curl_exec($ch);
                curl_close($ch);

                $data_array = json_decode($data, true);

                foreach ($data_array as $value) {
                    echo '
                    <div class="archives-confessions">
                        <h2><span class="name">'.$value['sender'].'</span>&nbsp;<span>对</span>&nbsp;<span class="name">'.$value['recipient'].'</span>&nbsp;说</h2>     
                            <svg class="quotation-mark" xmlns="http://www.w3.org/2000/svg" width="87.782" height="35.156" viewBox="0 0 87.782 63.156">
                                <path data-name="“"
                                    d="M572.194,664.747c10.18,0,18.047-5.667,18.341-15.2,0.263-8.5-6.4-16.884-14.644-16.884-8.63,0-10.015.2-10.015-3.673,0-10.022,13.962-19.18,18.983-21.345-0.832-4.565-1.726-6.682-3.477-5.866-17.195,8.007-28.562,23.848-28.562,40.943C552.82,659.073,563.3,664.747,572.194,664.747Zm50.074,0c10.18,0,18.047-5.667,18.341-15.2,0.263-8.5-6.4-16.884-14.644-16.884-8.631,0-10.016.2-10.016-3.673,0-10.022,13.963-19.18,18.984-21.345-0.833-4.565-1.726-6.682-3.478-5.866-17.194,8.007-28.561,23.848-28.561,40.943C602.894,659.073,613.377,664.747,622.268,664.747Z"
                                transform="translate(-552.812 -601.594)"></path>
                            </svg>
                        <p class="content">'.$value['content'].'</p>
                        <p class="time">'. $value['date'] .'</p>
                    </div>
                    ';
                }
            } else {
                echo "请安装curl插件";
            }
            ?>
        </main>
    </div>
</div>

<style>
.archives {
    /* height: 93%; */
    height: 100%;
    line-height: 1.5;
}

.archives-confessions {
    border-bottom: #ddd dashed 1px;
    line-height: 1.3;
    text-align: left;
}

.archives-confessions h2 {
    display: block;
    padding: 1px;
    margin-bottom: 5px;
}

.name {
    padding: 1px;
    cursor: default;
    transition: color .5s;
    border-bottom: #bbb dashed 1px;
}

.name:hover {
    background-color: #f60c3e;
    color: #fff;
    transition: color .2s;
}

.main {
    color: #333;
    text-align: center;
    line-height: 160px;
}

.quotation-mark {
    fill: #ddd;
    width: 20px;
    display: inline-block;
}

.content {
    margin: 0 0 5px 0;
    font-weight: 400;
    font-size: .975rem;
}

.time {
    text-align: right;
    font-size: 14px;
}

/* .search {
    margin-top: 10px;
    margin-bottom: 10px;
    line-height: normal;
    display: inline-table;
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    position: relative;
    font-size: 14px;
}

.search-input {
    border-radius: 0;
    vertical-align: middle;
    display: table-cell;
    border: 1px solid #dcdfe6;
    box-sizing: border-box;
    color: #606266;
    font-size: inherit;
    height: 40px;
    line-height: 40px;
    outline: 0;
    padding: 0 15px;
    transition: border-color .2s cubic-bezier(.645, .045, .335, 1);
    width: 100%;
}

.search-box {
    background-color: #f60c3e;
    color: #fff;
    border-radius: 0;
    vertical-align: middle;
    display: table-cell;
    position: relative;
    border: 1px solid #f60c3e;
    padding: 0 20px;
    width: 1px;
    white-space: nowrap;
}

.search-botton {
    color: inherit;
    border-top: 0;
    border-bottom: 0;
    font-size: inherit;
    display: inline-block;
    margin: -10px -20px;
    line-height: 1;
    white-space: nowrap;
    cursor: pointer;
    background: #f60c3e;
    border: 1px solid #f60c3e;
    text-align: center;
    box-sizing: border-box;
    outline: 0;
    transition: .1s;
    font-weight: 500;
    padding: 12px 20px;
} */
</style>
