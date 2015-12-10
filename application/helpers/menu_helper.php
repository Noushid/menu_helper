<?php
/**
 * Created by PhpStorm.
 * User: noushid
 * Date: 8/12/15
 * Time: 4:59 PM
 * Author: Noushid
 */

function render_menu(array $menu, $class, $current)
{
    $html = '';

    $html .='<ul class="'.$class.'">'."\n";
    foreach ($menu as $value) {
        if ($value['title'] == $current) {
            if (isset($value['class'])) {
                $html .= "\t\t\t\t".'<li class="active '.$value['class'].'"><a href="'.$value['title'].'">'.$value['title'].'</a></li>'."\n";
            }else
                $html .= "\t\t\t\t".'<li class="active"><a href="'.$value['title'].'">'.$value['title'].'</a></li>'."\n";
        }
        else if(isset($value['class']))
            $html .= "\t\t\t\t".'<li><a class="'.$value['class'].'" href="'.$value['title'].'">'.$value['title'].'</a></li>'."\n";
        else
            $html .= "\t\t\t\t".'<li><a href="'.$value['title'].'">'.$value['title'].'</a></li>'."\n";

    }
    $html .= "\t\t\t".'</ul>'."\n";

    return $html;
}