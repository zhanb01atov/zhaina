# Используем базовый образ nginx
FROM nginx:alpine

# Копируем содержимое текущей директории в директорию nginx
COPY . /usr/share/nginx/html
