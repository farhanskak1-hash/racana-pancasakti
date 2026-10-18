<?php

// Arahkan storage & view compiled ke direktori /tmp Vercel yang writable
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

// Buat struktur folder di /tmp jika belum ada
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0755, true);
}

if (!is_dir('/tmp/storage/logs')) {
    mkdir('/tmp/storage/logs', 0755, true);
}

require __DIR__ . '/../public/index.php';