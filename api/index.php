<?php

// Set jalur folder storage Laravel ke direktori /tmp milik Vercel
$storagePath = '/tmp/storage';

// Daftar folder di dalam /tmp yang wajib ada untuk Laravel
$directories = [
    $storagePath . '/app/public',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];

// Otomatis buat folder jika belum ada di /tmp
foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

// Timpa jalur penyimpanan default Laravel
$_ENV['APP_STORAGE'] = $storagePath;
$_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';

// Panggil entry point bawaan Laravel
require __DIR__ . '/../public/index.php';