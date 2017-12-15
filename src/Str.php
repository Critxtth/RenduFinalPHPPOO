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


    public function replace($search, $replace): self
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

//Exercice 1.5
    public function camelCase()
    {
        $this->replace('_', ' ')
            ->replace('-',' ')
            ->ucWords()
            ->replace(' ', '')

            ->lcFirst();
        return $this;

    }


    public function toString()
    {
        return $this->__toString();

    }
    //Exercice 2

    public static function __callStatic($name, $arguments)
    {
        $method = (string) Str::on($name)->replace('to', '')->lcfirst();
        return (string) Str::on($arguments[0])->{$method}();
    }

    //Exercice 3



}
