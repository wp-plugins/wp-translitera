<?php
/*
Plugin Name: WP Translitera
Plugin URI: http://azbuki.info/viewforum.php?f=32
Description: Plug-in for transliteration permanent permalink records , pages, and tag || 
 * Плагин для транслитерации постоянных постоянных ссылок записей, страниц и тегов
Version: 150717
Author: Evgen Yurchenko
Author URI: http://yur4enko.com/
*/

/*  Copyright 2015 Evgen Yurchenko  (email: evgen@yur4enko.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc.
*/

class wp_translitera {
    public static function transliterate($title) {
        $to = array(
            'А'=>'A','а'=>'a','Б'=>'B','б'=>'b','В'=>'V','в'=>'v','Г'=>'G',
            'г'=>'g','Д'=>'D','д'=>'d','Е'=>'E','е'=>'e','Ё'=>'Jo','ё'=>'jo',
            'Ж'=>'Zh','ж'=>'zh','З'=>'Z','з'=>'z','И'=>'I','и'=>'i','Й'=>'J',
            'й'=>'j','К'=>'K','к'=>'k','Л'=>'L','л'=>'l','М'=>'M','м'=>'m',
            'Н'=>'N','н'=>'n','О'=>'O','о'=>'o','П'=>'P','п'=>'p','Р'=>'R',
            'р'=>'r','С'=>'S','с'=>'s','Т'=>'T','т'=>'t','У'=>'U','у'=>'u',
            'Ф'=>'F','ф'=>'f','Х'=>'H','х'=>'h','Ц'=>'C','ц'=>'c','Ч'=>'Ch',
            'ч'=>'ch','Ш'=>'Sh','ш'=>'sh','Щ'=>'Shh','щ'=>'shh','Ъ'=>'',
            'ъ'=>'','Ы'=>'Y','ы'=>'y','Ь'=>'','ь'=>'','Э'=>'Je','э'=>'je',
            'Ю'=>'Ju','ю'=>'ju','Я'=>'Ja','я'=>'ja'
        );
        return strtr($title, $to);
    }
}

add_action('sanitize_title', array('wp_translitera','transliterate'), 0);