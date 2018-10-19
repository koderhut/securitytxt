<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Line;

use KoderHut\SecurityTxt\Line\Url;
use PHPUnit\Framework\TestCase;

/**
 * Class UrlTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\Line\Url
 */
class UrlTest extends TestCase
{

    /**
     * @test
     */
    public function testTypeIsCorrect()
    {
        $instance = new Url('test');

        $this->assertEquals('url', $instance->type());
    }

    /**
     * @test
     */
    public function testCastingToString()
    {
        $instance = new Url('http://test.com');

        $this->assertEquals('http://test.com', $instance->__toString());
    }
}
