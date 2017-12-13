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

        dump($string);
        $this->assertSame('myString',$string);

    }


    //Exercice 1.5
    public function testExo1_5()
    {
        $string= Str::on('my_string')->camelCase()->toString(); // true

        $this->assertSame('myString', $string);

        dump($string);

    }
}

?>