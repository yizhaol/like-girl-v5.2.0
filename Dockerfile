# 使用PHP 7.4版本并附带Apache
FROM php:7.4-apache

# 设置Apache的ServerName来消除警告
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 设置工作目录
WORKDIR /var/www/html

# 复制所有项目文件到容器中
COPY . .

# 安装必要的PHP扩展（根据你的项目需要）
RUN docker-php-ext-install pdo pdo_mysql mysqli

# 启用Apache的rewrite模块（如果你的项目需要URL重写）
RUN a2enmod rewrite

# 更改文件权限（确保Apache可以读写）
RUN chown -R www-data:www-data /var/www/html

# 暴露端口
EXPOSE 80
