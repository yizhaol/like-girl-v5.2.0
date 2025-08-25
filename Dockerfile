# 使用PHP 7.4版本并附带Apache
FROM php:7.4-apache

# 设置Apache的ServerName来消除警告
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 设置工作目录
WORKDIR /var/www/html

# 复制所有项目文件到容器中
COPY . .

# 安装必要的PHP扩展
RUN docker-php-ext-install pdo pdo_mysql mysqli

# 启用Apache的rewrite模块
RUN a2enmod rewrite

# 更改文件权限
RUN chown -R www-data:www-data /var/www/html

# 设置环境变量（可选，也可以在运行时设置）
ENV DB_HOST="host.docker.internal"
ENV DB_USER="LikeGirlv520"
ENV DB_PASS="LikeGirlDBPw"
ENV DB_NAME="LikeGirlv520"
ENV LIKE_CODE="LovePHP"
ENV VERSION=20241108

# 暴露端口
EXPOSE 80

# 启动Apache（默认CMD已经存在，这里只是明确指定）
CMD ["apache2-foreground"]
