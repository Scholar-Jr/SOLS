![banner](screenshots/banner.png)

## 源码示意图

```
.
├── assets	「静态资源文件夹」
├── classes	「PHP类资源文件夹」
├── components	「基础控件文件夹」
├── functions	「功能文件」
├── scripts	「Js脚本」
├── screenshots	「截图」
├── styles	「网站样式」
├── templates	「路由页面模板」
├── index.php
└── readme.md

```



## 网站数据表

```
CREATE TABLE `sol_confessions` (
  `cid` int unsigned NOT NULL AUTO_INCREMENT,
  `sender` varchar(40) NOT NULL,
  `recipient` varchar(40) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

其中已经限定了数据库名称为sol，如果你需要对其作出更改，请修改MySQL配置文件```classes/MySQLDatabaseControl.class.php```。

如果你需要修改表名，请修改所有与数据库查询有关文件中的命令。



## 设计灵感

[Anyway.FM](https://anyway.fm)
