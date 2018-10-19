<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Line;

use KoderHut\SecurityTxt\Line\Email;
use PHPUnit\Framework\TestCase;

/**
 * Class EmailTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\Line\Email
 */
class EmailTest extends TestCase
{

    /**
     * @test
     */
    public function testTypeIsCorrect()
    {
        $instance = new Email('test@email.com');

        $this->assertEquals('mailto', $instance->type());
    }

    /**
     * @test
     */
    public function testCastingToString()
    {
        $instance = new Email('test@email.com');

        $this->assertEquals('test@email.com', $instance->__toString());
    }

    /**
     * @test
     */
    public function testCastingToRfc3986String()
    {
        $instance = new Email('test@email.com');

        $this->assertEquals('mailto:test@email.com', $instance->rfc3986());
    }
}
