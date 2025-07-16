<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'gallery');


define('UPLOAD_DIR', __DIR__ . '/../public_html/img/');
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_TYPES', ['image/jpeg', 'image/png', 'image/gif']);


define('BASE_URL', 'http://localhost:8000');
define('IMG_URL', BASE_URL . '/img/');


session_start();