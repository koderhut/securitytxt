<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Line;

use KoderHut\SecurityTxt\Format\RFC3986Interface;

/**
 * Class Phone
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Phone implements DirectiveLineInterface, RFC3986Interface
{
    private const LINE_TYPE = 'tel';

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * Phone constructor.
     *
     * @param string $phoneNumber
     */
    public function __construct(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
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
        return $this->phoneNumber;
    }

    /**
     * @inheritdoc
     */
    public function rfc3986(): string
    {
        return 'tel:' . $this->phoneNumber;
    }
}
