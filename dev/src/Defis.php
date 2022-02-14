<?php
class Defis
{
    //Convertir les heures en secondes
    public static function howManySeconds($hours)
    {
        $hours = explode(':', $hours);
        $seconds = $hours[0] * 3600 + $hours[1] * 60 + $hours[2];
        return $seconds;
    }

    //Compte le nombre de patte dans la ferme
    public static function animals($chickens, $cows, $pigs)
    {
        return $chickens * 2 + $cows * 4 + $pigs * 4;
    }

    //Convertir l'âge en jour (365 ans)
    public static function calcAge($age)
    {
        return $age * 365;
    }

    //Retourner la première valeur du tableau
    public static function getFirstValue($array)
    {
        return $array[0];
    }

    //Remplacer les voyelles de la chaîne de caractère par le signe (str_replace)
    public static function replaceVowels($str, $ch)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        return str_replace($vowels, $ch, $str);
    }

    //Retourne un tableau de valeur avec la première lettre seulement en majuscule (ucfirst, strtolower)
    public static function capMe($arr)
    {
        $arr = array_map('ucfirst', $arr);
        return $arr;
    }

    //Convertir le nombre en binaire et compter le nombre de 1 (decbin, substr_count)
    public static function countOnes($i)
    {
        return substr_count(decbin($i), '1');
    }

    //Retourne un tableau sans les doublons (in_array)
    public static function removeDups($arr)
    {
        return array_unique($arr);
    }
}
