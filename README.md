# LikeGirl v5.2.0
## 原作者项目文档地址： https://blog.kikiw.cn/index.php/archives/52/
## 原作者演示地址： https://lovey.kikiw.cn

------------
# 使用方法
## 方法一：一键部署
1. 配置数据库
2. 按照docker后，部署好数据库，将下面代码配置项替换成自己的参数，直接运行代码即可
>docker run -d \
>  --name likegirl_web \
>  -p 8080:80 \
>  -e DB_HOST=host.docker.internal \
>  -e DB_USER=LikeGirlv520 \
>  -e DB_PASS=LikeGirlDBPw \
>  -e DB_NAME=LikeGirlv520 \
>  -e LIKE_CODE=LovePHP \
>  -e VERSION=20241108 \
>  yourname/likegirl:latest
## 方法二：
1. 配置数据库
2. 拉取github项目后修改docker-compose.yml为自己的配置参数运行docker-compose.yml
> 最基本的前台启动（用于调试，Ctrl+C 可停止）

>docker-compose up

>更常用的方式：后台启动（守护进程模式)

>docker-compose up -d



