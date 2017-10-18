<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2016 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

/*
 * Run this script only from magento root directory
 */

set_time_limit(0);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

define('ROOT_PATH',dirname(__FILE__) . '/');
define('DS',DIRECTORY_SEPARATOR);

function deleteFolder($path)
{
    if (is_file($path)) {

        unlink($path);

    } else if (is_dir($path)) {

        $folderItems = scandir($path);

        foreach ($folderItems as $folderItem) {
            if ($folderItem == '.' || $folderItem == '..') {
                continue;
            }
            deleteFolder($path.DS.$folderItem);
        }

        rmdir($path);
    }
}

$items = array(
    'app/code/Ess'
);

foreach ($items as $item) {
    deleteFolder(ROOT_PATH . $item);
}

exit('ok');