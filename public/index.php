<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

?>
Docker container <?=(int)getenv('COMPOSER_INSTALL') ? 'with' : 'without'; ?>  composer packages install

<?php
$pdo = new PDO('mysql:dbname=example;host=mysql', 'dev', 'dev');

echo 'Success db connect!';

//phpinfo();
