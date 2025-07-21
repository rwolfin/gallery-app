# 🖼️ Галерея изображений с комментариями

Проект представляет собой веб-галерею с возможностью загрузки изображений и добавления комментариев.

## 🔁 Альтернатива (Парадигма ООП - MVC)

Если вы хотите посмотреть на ту же самую галерею, но написанную не **процедурном стиле, через парадигму ООП**, вы можете найти этот проект здесь: [github.com/rwolfin/gallery-mvc](https://github.com/rwolfin/gallery-mvc)


## 🚀 Функционал

✅ Авторизация пользователей  
✅ Загрузка изображений (для авторизованных пользователей)  
✅ Просмотр галереи (для всех)  
✅ Добавление комментариев (для авторизованных)  
✅ Удаление своих комментариев  
✅ Удаление изображений (с каскадным удалением комментариев)  

## Технологии

- PHP
- MySQL
- Bootstrap 5
- jQuery

## Для базы данных

```SQL
CREATE DATABASE gallery;
USE gallery;

CREATE TABLE images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_id INT NOT NULL,
    author VARCHAR(100) NOT NULL,
    text TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (image_id) REFERENCES images(id) ON DELETE CASCADE
);
```