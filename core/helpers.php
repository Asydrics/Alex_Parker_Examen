<?php

namespace Core\Helpers;

function slugify(string $string): string
{
    // Supprimer les balises HTML
    $string = strip_tags($string);
    // Remplacer les caractères non alphabétiques ou numériques par des tirets
    $string = preg_replace('~[^\pL\d]+~u', '-', $string);
    // Translittérer
    setlocale(LC_ALL, 'en_US.utf8');
    $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
    // Supprimer les caractères indésirables
    $string = preg_replace('~[^-\w]+~', '', $string);
    // Supprimer les espaces en début et fin de chaîne
    $string = trim($string, '-');
    // Supprimer les tirets en double
    $string = preg_replace('~-+~', '-', $string);
    // Mettre en minuscules
    $string = strtolower($string);
    // Vérifier si la chaîne est vide
    if (empty($string)) {
        return 'n-a';
    }
    // Retourner le résultat
    return $string;
}

function datetime(string $date): string
{
    return date('j F Y', strtotime($date));
}
?>