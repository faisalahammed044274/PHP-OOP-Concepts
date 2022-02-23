<?php
/*
Exercise 1: String Operation Helper Static Class

1) Create StringHelper Class
2) Define a method countVowel($content) static method.
3) Count number of vowels in string.
 */
class StringHelper
{

    public static function countVowel($content)
    {
        return substr_count($content, 'a') + substr_count($content, 'e')
         + substr_count($content, 'i') + substr_count($content, 'o')
          + substr_count($content, 'u');
    }

}

echo StringHelper::countVowel("This is a String uuijdodo to Count Vowels");
