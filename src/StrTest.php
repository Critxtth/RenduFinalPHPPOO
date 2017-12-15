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

    //Exercice 4

    public function testExo4()
    {
        $str = Str::toSlugCase('my_string');
        $this->assertSame('my-string', $str);

        $str = Str::toSlugCase('myString');
        $this->assertSame('my-string', $str);

        $str = Str::toSlugCase('my-string');
        $this->assertSame('my-string', $str, -1);

        $str = Str::toSlugCase('my string');
        $this->assertSame('my-string', $str);

        $str = Str::toSlugCase('My String');
        $this->assertSame('my-string', $str);
    }

    //Exercice 4_5

    public function testExo4_5()
    {
        $str = Str::toKebabCase('my_string');
        $this->assertSame('my-string', $str);

        $str = Str::toKebabCase('myString');
        $this->assertSame('my-string', $str);

        $str = Str::toKebabCase('my-string');
        $this->assertSame('my-string', $str, -1);

        $str = Str::toKebabCase('my string');
        $this->assertSame('my-string', $str);

        $str = Str::toKebabCase('My String');
        $this->assertSame('my-string', $str);
    }

    //Exercice 5

    public function testExo5()
    {
        $str = Str::toStudlyCase('my_string');
        $this->assertSame('MyString', $str);

        $str = Str::toStudlyCase('myString');
        $this->assertSame('MyString', $str);

        $str = Str::toStudlyCase('my-string');
        $this->assertSame('MyString', $str, -1);

        $str = Str::toStudlyCase('my string');
        $this->assertSame('MyString', $str);

        $str = Str::toStudlyCase('My String');
        $this->assertSame('MyString', $str);
    }


}

?>