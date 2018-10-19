<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Line;

/**
 * Class Url
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Url implements DirectiveLineInterface
{
    const LINE_TYPE = 'url';

    /**
     * @var string
     */
    private $url;

    /**
     * Url constructor.
     *
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
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
        return $this->url;
    }
}
