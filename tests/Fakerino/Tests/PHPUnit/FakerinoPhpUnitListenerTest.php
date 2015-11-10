<?php

class FakerinoPhpUnitListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @fakeDataProvider name, surname, integer, date
     */
    public function testSimpleProvider($name, $surname, $intvalue, $date)
    {
        $this->assertInternalType("string", $name);
        $this->assertInternalType("string", $surname);
        $this->assertInternalType("integer", $intvalue);
        $this->assertTrue((bool)preg_match('/\d{4}-\d{2}-\d{2}/', $date));
    }
}