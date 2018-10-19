<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Format;

use KoderHut\SecurityTxt\Directive\Contact;
use KoderHut\SecurityTxt\Format\NewLine;
use KoderHut\SecurityTxt\Line\Comment;
use KoderHut\SecurityTxt\Line\Email;
use PHPUnit\Framework\TestCase;

/**
 * Class NewLineTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\Format\NewLine
 */
class NewLineTest extends TestCase
{

    /**
     * @test
     */
    public function testWritingADirective()
    {
        $contact = new Contact(new Email('test@email.com'));
        $contact->addCommentLine(new Comment('this is a comment'));

        $instance = new NewLine();
        $result = $instance->write($contact);

        $this->assertEquals('# this is a comment' . PHP_EOL . 'Contact: mailto:test@email.com' . PHP_EOL . PHP_EOL, $result);
    }
}
