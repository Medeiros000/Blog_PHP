<?php
// Arquivo de configuração do sistema
// define o fuso horário
date_default_timezone_set("America/Sao_Paulo");

// Host do DB
define('DB_HOST', 'localhost');
define('DB_HOST_DOCKER', 'host.docker.internal');

define('DB_PORT', '3306');
define('DB_NAME', 'blog');
define('DB_USER', 'root');
define('DB_PSSWRD', '');

// informações do sistema
define('SITE_NOME', 'UnSet');
define('SITE_DESCRICAO', 'UnSet - Tecnologia em Sistemas');

// urls do sistema
define('URL_PRODUCAO', 'http://192.168.1.100/blog');
define('URL_DESENVOLVIMENTO', 'http://localhost/blog');

define('URL_SITE', 'blog/');
