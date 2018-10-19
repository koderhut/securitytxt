<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt;

use KoderHut\SecurityTxt\Format\WriteInterface;

/**
 * Class SecurityTxt
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class SecurityTxt
{
    /**
     * @var array
     */
    private $directives;

    /**
     * @var WriteInterface
     */
    private $output;

    /**
     * SecurityTxt constructor.
     *
     * @param WriteInterface $output
     */
    public function __construct(WriteInterface $output)
    {
        $this->output = $output;
    }

    /**
     * @param DocumentDirectiveInterface $line
     */
    public function addDirective(DocumentDirectiveInterface $line)
    {
        $this->directives[] = $line;
    }

    public function __toString()
    {
        $lines = '';
        foreach ($this->directives as $directive) {
            $lines .= $this->output->write($directive);
        }

        return $lines;
    }
}