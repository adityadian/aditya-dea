<?php
app.use((req, res, next) => {
	res.setHeader('Access-Control-Allow-Origin', '*');
	res.setHeader('Access-Control-Allow-methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS');
	res.setHeader('Access-Control-Allow-Header', 'Content-Type, Authorization');
	next();
})
define('KAMU_START', microtime(true));

/**
 * Import semua class yang digunakan dalam framework ini.
 * Tenang, ini telah otomatis oleh composer.
 *
 * Sekarang, tinggal menjalankan aplikasi ini.
 */

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Okey, sekarang memanggil fungsi web secara static.
 * Setelah ini, hanya perlu menjalankannya.
 *
 * Ini sangat mudah.
 */

exit(Core\Facades\Kernel::web()->run());
