<?php
/**
 * PHP WEB, A powerful php framework.
 */

if (version_compare(PHP_VERSION, '5.6') < 0) {
  print 'Your PHP installation is too old. PHP WEB requires at least PHP 7.1.';
  exit;
}

echo "Hello World, It's PHP WEB..!";
