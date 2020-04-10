<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

?>
Docker container <?=(int)getenv('COMPOSER_INSTALL') ? 'with' : 'without'; ?>  composer packages install

<?=phpinfo(); ?>
