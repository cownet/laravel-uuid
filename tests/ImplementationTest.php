<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Cownet\Laravel\Uuid\Model;

final class ImplementationTest extends TestCase
{

    public function testImplementation(): void
    {
        $test1 = new Test1();
        $test2 = new Test2();
        $test3 = new Test3();

        $this->assertEquals(true, $test1->getIncrementing());
        $this->assertEquals(false, $test2->getIncrementing());
        $this->assertEquals(true, $test3->getIncrementing());

        $this->assertNull($test1->getIdValue());
        $this->assertNotNull($test2->getIdValue());
        $this->assertNull($test3->getIdValue());
    }

}

class Test1 extends Model
{
    public $incrementing = true;

    public function getIdValue()
    {
        return $this->{$this->getKeyName()};
    }
}

class Test2 extends Model
{
    public $incrementing = false;

    public function getIdValue()
    {
        return $this->{$this->getKeyName()};
    }
}

class Test3 extends Model
{
    public function getIdValue()
    {
        return $this->{$this->getKeyName()};
    }
}