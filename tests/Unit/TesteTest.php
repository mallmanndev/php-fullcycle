<?php

namespace Tests\Unit;

use Core\Teste;
use PHPUnit\Framework\TestCase;

class TesteTest extends TestCase
{
    public function test_example()
    {
        $teste = new Teste();
        $this->assertEquals('123', $teste->foo());
    }
}
