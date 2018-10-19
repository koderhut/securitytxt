<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Line;

/**
 * Class Comment
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Comment implements DirectiveLineInterface
{
    /**
     * @var array
     */
    protected $comment;

    /**
     * Comment constructor.
     *
     * @param string[] $comment
     */
    public function __construct(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @inheritdoc
     */
    public function type(): string
    {
        return '#';
    }

    /**
     * @inheritdoc
     */
    public function __toString(): string
    {
        return '# ' . $this->comment;
    }
}
