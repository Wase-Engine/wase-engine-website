<?php

namespace App\Helper;

/**
 * Class DocsHelper
 * @package App\Helper
 */
class DocsHelper
{
    /**
     * @param array $path
     * @return array|null
     */
    public static function getFiles(array $path): ?array
    {
        // Get all the files in the folder
        $files = scandir(realpath(join(DIRECTORY_SEPARATOR, $path)));
        $links = [];

        // Loop through all the files
        foreach ($files as $file) {
            // If it doesn't start with a number continue
            if (!self::startsWithNumber($file))
                continue;

            if (self::isFolder($file)) {
                $links[self::createTitle($file)] = self::getFiles(array('..', 'src', 'wase-engine-docs', $file));
            } else {
                $links[self::createTitle($file)] = $file;
            }
        }

        return $links;
    }

    /**
     * @param string $str
     * @return string
     */
    private static function createTitle(string $str): string
    {
        // Split the title at every underscore
        $array = explode('_', $str);
        $name = null;

        // Remove the number prefix
        for ($i = 1; $i < sizeof($array); $i++)
            $name .= $array[$i] . ' ';

        // If it is a markdown file remove the extension, if it is a folder remove the space at the end.
        if (substr($name, -4) == '.md ') {
            $name = substr($name, 0, -4);
        } else {
            $name = substr($name, 0, -1);
        }

        // Return the name with the first letter uppercase
        return ucfirst($name);
    }

    /**
     * @param string $str
     * @return bool
     */
    private static function isFolder(string $str): bool
    {
        return substr($str, -3) != '.md';
    }

    /**
     * @param string $str
     * @return bool
     */
    private static function startsWithNumber(string $str): bool
    {
        return preg_match('/^\d/', $str) === 1;
    }
}
