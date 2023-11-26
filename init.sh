cp ./back-end/.env.example ./back-end/.env

docker-compose up -d --build

docker exec rsp_php-fpm chmod -R 777 storage/ /bin/bash
docker exec rsp_php-fpm php artisan key:generate

# docker exec rsp_php-fpm php artisan migrate --seed