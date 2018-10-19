<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Directive;

use KoderHut\SecurityTxt\Format\RFC3986Interface;
use KoderHut\SecurityTxt\Line\Comment;
use KoderHut\SecurityTxt\Line\DirectiveLineInterface;

/**
 * Class AbstractDirective
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
abstract class AbstractDirective
{

    /**
     * @var array|Comment[]
     */
    protected $comments = [];

    /**
     * @var array|DirectiveLineInterface[]
     */
    protected $directives = [];

    /**
     * Contact constructor.
     *
     * @param string $comment
     * @param array $information
     */
    public function __construct(DirectiveLineInterface ...$information)
    {
        $this->directives = $information;
    }

    /**
     * @inheritdoc
     */
    public function addCommentLine(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    /**
     * @inheritdoc
     */
    public function commentLines(): array
    {
        $lines = [];

        foreach ($this->comments as $comment) {
            $lines[] = $comment->__toString();
        }

        return $lines;
    }

    /**
     * @inheritdoc
     */
    public function addDirectiveLine(DirectiveLineInterface $line)
    {
        $this->directives[] = $line;
    }

    /**
     * @inheritdoc
     */
    public function directiveLines(): array
    {
        $lines = [];

        foreach ($this->directives as $line) {
            if ($line instanceof RFC3986Interface) {
                $lines[] = sprintf('%s: %s', static::LINE_TAG, $line->rfc3986());
                continue;
            }

            $lines[] = sprintf('%s: %s', static::LINE_TAG, $line->__toString());
        }

        return $lines;
    }
}