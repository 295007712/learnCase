<?php
/**
 * User: czz
 * DateTime: 2018/1/30 11:12
 * Description:
 * Tips:
 */
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = 'classes'.DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;

    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    var_dump($fileName);exit;
    require $fileName;
}

spl_autoload_register('autoload');