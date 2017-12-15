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

    public function strToLower()
    {
        $this->string = strtolower($this->string);
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

    public function snakeCase()
    {
        if (preg_match("/[-,_, ]+/", $this->string) === 1){
            return $this
                ->replace('-', ' ')
                ->ucWords()
                ->replace(' ', '_')
                ->strtolower();
        }
        else{
            $patern ="/(.)(?=[A-Z])/";
            $this->string = preg_replace($patern, '$1_',$this->string);
            return $this
                ->strtolower();
        }
    }

    //Exercice 4

    public function slugCase()
    {
        if (preg_match("/[-,_, ]+/", $this->string) === 1){
            return $this
                ->replace('_', ' ')
                ->ucwords()
                ->replace(' ', '-')
                ->strtolower();
        }
        else{
            $patern ="/(.)(?=[A-Z])/";
            $this->string = preg_replace($patern, '$1-',$this->string);
            return $this
                ->strtolower();
        }
    }

    //Exercice 4_5
    public function kebabCase()
    {
        return $this
            ->slugCase();
    }

    //Exercice 5

    public function studlyCase()
    {
        return $this
            ->camelCase()
            ->ucwords();
    }


}
