<?php
/*
 * @Version：Like Girl 5.2.0
 * @Author: Ki.
 * @Date: 2024-11-08 10:00:00
 * @LastEditTime: 2024-11-08
 * @Description: 愿得一人心 白首不相离
 * @Document：https://blog.kikiw.cn/index.php/archives/52/
 * @Copyright (c) 2024 by Ki All Rights Reserved. 
 * @Warning：禁止以任何方式出售本项目 如有发现一切后果自行负责
 * @Warning：禁止以任何方式出售本项目 如有发现一切后果自行负责
 * @Warning：禁止以任何方式出售本项目 如有发现一切后果自行负责
 * @Message：开发不易 版权信息请保留 （删除/更改版权的无耻之人请勿使用 查到一个挂一个）
 * @Message：开发不易 版权信息请保留 （删除/更改版权的无耻之人请勿使用 查到一个挂一个）
 * @Message：开发不易 版权信息请保留 （删除/更改版权的无耻之人请勿使用 查到一个挂一个）
 */

# header("Content-Type:text/html; charset=utf8");

//localhost 为数据库地址 一般使用默认的即可 或（127.0.0.1） $db_address = "localhost";

//数据库用户名 $db_username = "LikeGirlv520";

//数据库密码 $db_password = "LikeGirlDBPw";

//数据库表名 （默认与数据库用户名相同） $db_name = "LikeGirlv520";

//为了保障你的小站安全 请设置一个复杂且独特的安全码 修改敏感信息时需填写 $Like_Code = "LovePHP";

//版本号 $version = 20241108;
header("Content-Type:text/html; charset=utf8");

// 从环境变量获取配置，如果不存在则使用默认值
$db_address = getenv('DB_HOST') ?: "host.docker.internal";
$db_username = getenv('DB_USER') ?: "LikeGirlv520";
$db_password = getenv('DB_PASS') ?: "LikeGirlDBPw";
$db_name = getenv('DB_NAME') ?: "LikeGirlv520";
$Like_Code = getenv('LIKE_CODE') ?: "LovePHP";
$version = getenv('VERSION') ?: 20241108;
