<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Line;

use KoderHut\SecurityTxt\Line\Comment;
use PHPUnit\Framework\TestCase;

/**
 * Class CommentTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\Line\Comment
 */
class CommentTest extends TestCase
{

    /**
     * @test
     */
    public function testTypeIsCorrect()
    {
        $instance = new Comment('test');

        $this->assertEquals('#', $instance->type());
    }

    /**
     * @test
     */
    public function testCastingToString()
    {
        $instance = new Comment('this is a test');

        $this->assertEquals('# this is a test', $instance->__toString());
    }
}
