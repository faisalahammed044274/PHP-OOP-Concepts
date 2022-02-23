<?php
class FilesHelper{
    static function hasFile($filename) : bool{
        if(!file_exists($filename)){
            echo "$filename doesnot exists" . PHP_EOL;
            return false;
        }
        $content = file_get_contents($filename);
    }
}

if (FilesHelper::hasFile("test.txt")) {
    echo "Data Found";
} else {
    echo "Data Not Found";
}