<?php

use PHPUnit\Framework\TestCase;

final class DefisTest extends TestCase
{
    public function testHowManySeconds()
    {
        $this->assertEquals(7200, Defis::howManySeconds(2));
        $this->assertEquals(36000, Defis::howManySeconds(10));
        $this->assertEquals(72000, Defis::howManySeconds(20));
    }

    public function testAnimals()
    {
        $this->assertEquals(42, Defis::animals(5, 4, 4));
        $this->assertEquals(12, Defis::animals(2, 1, 1));
        $this->assertEquals(36, Defis::animals(2, 4, 4));
    }

    public function testCalcAge()
    {
        $this->assertEquals(5475, Defis::calcAge(15));
        $this->assertEquals(12775, Defis::calcAge(35));
        $this->assertEquals(15330, Defis::calcAge(42));
    }

    public function testGetFirstValue()
    {
        $this->assertEquals('toto', Defis::getFirstValue(['toto', 'tata', 'titi']));
        $this->assertEquals('tata', Defis::getFirstValue(['tata', 'titi', 'toto']));
        $this->assertEquals('titi', Defis::getFirstValue(['titi', 'toto', 'tata']));
    }

    public function testReplaceVowels()
    {
        $this->assertEquals('t#t#', Defis::replaceVowels('toto', '#'));
        $this->assertEquals('t;j;n;', Defis::replaceVowels('tijuna', ';'));
        $this->assertEquals('f!m!ll!', Defis::replaceVowels('famille', '!'));
    }


    public function testCountOnes()
    {
        $this->assertEquals(1, Defis::countOnes(2));
        $this->assertEquals(2, Defis::countOnes(6));
        $this->assertEquals(2, Defis::countOnes(12));
    }
    public function testRemoveDups()
    {
        $this->assertEquals(['jean', 'paul'], Defis::removeDups(['jean', 'paul', 'jean']));
        $this->assertEquals(['a', 'b', 'c'], Defis::removeDups(['a', 'b', 'c', 'a', 'a', 'b']));
        $this->assertEquals(['Toto', 'Tata', 'Titi'], Defis::capMe(['toto', 'TATA', 'titi']));
    }
}