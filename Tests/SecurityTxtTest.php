<?php declare(strict_types=1);

use KoderHut\SecurityTxt\Directive\Contact;
use KoderHut\SecurityTxt\Format\NewLine;
use KoderHut\SecurityTxt\Line\Email;
use KoderHut\SecurityTxt\SecurityTxt;
use PHPUnit\Framework\TestCase;

/**
 * Class SecurityTxtTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\SecurityTxt
 */
class SecurityTxtTest extends TestCase
{

    /**
     * @test
     */
    public function testCreateASecurityTxtFile()
    {
        $instance = new SecurityTxt(new NewLine());

        $instance->addDirective(new Contact(new Email('test@mail.com')));

        $this->assertEquals('Contact: mailto:test@mail.com' . PHP_EOL . PHP_EOL, $instance->__toString());
    }
}
