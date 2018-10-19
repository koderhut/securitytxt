<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Line;

use KoderHut\SecurityTxt\Line\Phone;
use PHPUnit\Framework\TestCase;

/**
 * Class PhoneTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\Line\Phone
 */
class PhoneTest extends TestCase
{

    /**
     * @test
     */
    public function testTypeIsCorrect()
    {
        $instance = new Phone('1234567890');

        $this->assertEquals('tel', $instance->type());
    }

    /**
     * @test
     */
    public function testCastingToString()
    {
        $instance = new Phone('1234567890');

        $this->assertEquals('1234567890', $instance->__toString());
    }

    /**
     * @test
     */
    public function testCastingToRfc3986String()
    {
        $instance = new Phone('1234567890');

        $this->assertEquals('tel:1234567890', $instance->rfc3986());
    }
}
