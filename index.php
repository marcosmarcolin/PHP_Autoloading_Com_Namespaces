<?php

/**
 * Autoloading de Classes com Namespaces
 * @author Marcos Marcolin
 * @link https://github.com/marcosmarcolin/PHP_Autoloading_Com_Namespaces
 */

define(DS, DIRECTORY_SEPARATOR);
define(DIR_APP, __DIR__);

/* Criando um autoload de Classes */

use Helper\ExemploHelper;
use Service\ExemploService;

require 'autoload.php';

$ExemploService = new ExemploService();
$ExemploHelper = new ExemploHelper();