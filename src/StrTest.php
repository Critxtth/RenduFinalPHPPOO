<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    //Exercice 1
    public function testExo1()
    {
        $string = (string)Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();

        $this->assertSame('myString', $string);

    }


    //Exercice 1.5
    public function testExo1_5()
    {
        $string = Str::on('my_string')->camelCase()->toString(); // true

        $this->assertSame('myString', $string);

        dump($string);

    }

    //Exercice 2

    public function testExo2()
    {
        $string = Str::toCamelCase('my_string');
        dump($string);
        $this->assertSame('myString', $string);


        $string = Str::toCamelCase('myString');
        $this->assertSame('myString', $string);


        $string = Str::toCamelCase('my-string');
        $this->assertSame('myString', $string);


        $string = Str::toCamelCase('my string');
        $this->assertSame('myString', $string);


        $string = Str::toCamelCase('My String');
        $this->assertSame('myString', $string);


    }

    //Exercice 3

    public function testExo3()
    {
        $str = Str::toSnakeCase('my_string');
        $this->assertSame('my_string', $str);

        $str = Str::toSnakeCase('myString');
        $this->assertSame('my_string', $str);

        $str = Str::toSnakeCase('my-string');
        $this->assertSame('my_string', $str);

        $str = Str::toSnakeCase('my string');
        $this->assertSame('my_string', $str);

        $str = Str::toSnakeCase('My String');
        $this->assertSame('my_string', $str);
    }



}

?>