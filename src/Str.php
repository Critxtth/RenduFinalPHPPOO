<?php
/**
 * Created by PhpStorm.
 * User: Rayan
 * Date: 11/12/2017
 * Time: 18:47
 */

namespace Strings;


class Str
{

//Exercice 1
    private $string;

    public static function on($string)
    {
        return new self($string);
    }

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function replace($search, $replace)
    {
        $this->string = str_replace($search, $replace, $this->string);
        return $this;
    }

    public function __toString()
    {
        return $this->string;
    }

    public function ucWords()
    {
        $this->string = ucwords($this->string);
        return $this;
    }

    public function lcFirst()
    {
        $this->string = lcfirst($this->string);
        return $this;

    }

}