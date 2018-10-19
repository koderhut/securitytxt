<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Directive;

use KoderHut\SecurityTxt\Directive\Contact;
use KoderHut\SecurityTxt\Line\Comment;
use KoderHut\SecurityTxt\Line\Email;
use KoderHut\SecurityTxt\Line\Phone;
use KoderHut\SecurityTxt\Line\Url;
use PHPUnit\Framework\TestCase;

/**
 * Class ContactTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\Directive\Contact
 * @covers \KoderHut\SecurityTxt\Directive\AbstractDirective
 */
class ContactTest extends TestCase
{

    /**
     * @test
     *
     * @param $contactParams
     * @param $expected
     * @param null $additionalDirectiveLines
     *
     * @dataProvider contactsProvider
     */
    public function testCreateAContactLineWithoutComment($contactParams, $expected, $additionalDirectiveLines = null)
    {
        $instance = new Contact(...$contactParams);

        if (null !== $additionalDirectiveLines) {
            $instance->addDirectiveLine($additionalDirectiveLines);
        }

        $this->assertEquals($expected, $instance->directiveLines());
    }

    /**
     * @test
     *
     * @param $commentObj
     * @param $expected
     *
     * @dataProvider contactCommentsProvider
     */
    public function testCreateAContactWithCommentAndEmail($commentObj, $expected)
    {
        $instance = new Contact(new Email('test@email.com'));
        foreach ($commentObj as $comment) {
            $instance->addCommentLine($comment);
        }

        $this->assertEquals($expected['comment'], $instance->commentLines());
        $this->assertEquals($expected['directive'], $instance->directiveLines());
    }

    /**
     * @see testCreateAContactLineWithoutComment
     *
     * @return array
     */
    public function contactsProvider()
    {
        return [
            'single contact using email' => [
                [new Email('test@email.com')],
                ['Contact: mailto:test@email.com']
            ],
            'multiple contacts using email' => [
                [new Email('test1@email.com'), new Email('test2@email.com'), new Email('test3@email.com')],
                ['Contact: mailto:test1@email.com', 'Contact: mailto:test2@email.com', 'Contact: mailto:test3@email.com']
            ],
            'multiple contacts using different methods' => [
                [new Email('test1@email.com'), new Phone('1234567890'), new Url('http://test.com/contact')],
                ['Contact: mailto:test1@email.com', 'Contact: tel:1234567890', 'Contact: http://test.com/contact']
            ],
            'multiple contacts by using add' => [
                [new Email('test1@email.com'), new Phone('1234567890')],
                ['Contact: mailto:test1@email.com', 'Contact: tel:1234567890', 'Contact: http://test.com/contact'],
                new Url('http://test.com/contact')
            ],
        ];
    }

    /**
     * @see testCreateAContactWithCommentAndEmail
     *
     * @return array
     */
    public function contactCommentsProvider()
    {
        return [
            'single comment line' => [
                [new Comment('this is a comment line')],
                ['comment' => ['# this is a comment line'], 'directive' => ['Contact: mailto:test@email.com']]
            ],
            'multiple comment lines' => [
                [new Comment('this is a comment line'), new Comment('this is a second comment line')],
                ['comment' => ['# this is a comment line', '# this is a second comment line'], 'directive' => ['Contact: mailto:test@email.com']]
            ],
        ];
    }
}
