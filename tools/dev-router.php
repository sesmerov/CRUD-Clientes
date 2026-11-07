<?php

// El servidor integrado ignora .htaccess: solo publicamos el controlador y web/.
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = is_string($path) ? rawurldecode($path) : '';

if ($path === '' || str_contains($path, "\0") || str_contains($path, '\\') ||
    str_contains($path, ':') || preg_match('~(?:^|/)\.~', $path)) {
    http_response_code(403);
    exit('Forbidden');
}

$projectRoot = dirname(__DIR__);
if ($path === '/' || $path === '/index.php') {
    chdir($projectRoot);
    require $projectRoot . '/index.php';
    return true;
}

if (!str_starts_with($path, '/web/')) {
    http_response_code(403);
    exit('Forbidden');
}

$webRoot = realpath($projectRoot . '/web');
$file = realpath($projectRoot . $path);
if ($webRoot === false || $file === false || !is_file($file)) {
    http_response_code(404);
    exit('Not found');
}

$staticExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'webp', 'woff', 'woff2', 'ttf', 'otf'];
if (!str_starts_with($file, $webRoot . DIRECTORY_SEPARATOR) ||
    !in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), $staticExtensions, true)) {
    http_response_code(403);
    exit('Forbidden');
}

return false;
