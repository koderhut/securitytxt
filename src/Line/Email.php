<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Line;

use KoderHut\SecurityTxt\Format\RFC3986Interface;

/**
 * Class Email
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Email implements DirectiveLineInterface, RFC3986Interface
{
    private const LINE_TYPE = 'mailto';

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * Email constructor.
     *
     * @param string $emailAddress
     */
    public function __construct(string $emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @inheritdoc
     */
    public function type(): string
    {
        return self::LINE_TYPE;
    }

    /**
     * @inheritdoc
     */
    public function __toString(): string
    {
        return $this->emailAddress;
    }

    /**
     * @inheritdoc
     */
    public function rfc3986(): string
    {
        return self::LINE_TYPE . ':' . $this->emailAddress;
    }
}
