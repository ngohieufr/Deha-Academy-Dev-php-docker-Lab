# Sử dụng PHP với Apache làm base image
FROM php:8.2-apache

# Cài đặt các extension PHP cần thiết
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Sao chép mã nguồn vào thư mục /var/www/html trong container
COPY . /var/www/html/

# Đảm bảo Apache sử dụng quyền của www-data
RUN chown -R www-data:www-data /var/www/html

# Khởi động Apache
CMD ["apache2-foreground"]
