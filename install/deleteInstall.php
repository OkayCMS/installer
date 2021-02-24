<?php

$install_folder = dirname(__FILE__);
rrmdir($install_folder);
rmdir($install_folder);

function rrmdir($dir, $level = 0) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir . "/" . $object)) {
                    rrmdir($dir . "/" . $object, $level + 1);
                } else {
                    unlink($dir . "/" . $object);
                }
            }
        }
        if ($level > 0) {
            rmdir($dir);
        }
    }
}