PHPUnit Fakerino dataProvider
=============================

### Installation

`composer require fakerino/phpunit-ext`

### Usage example
```
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
```