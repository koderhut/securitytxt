<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Format;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;

/**
 * Class NewLine
 *
 * Used to format the output using new lines
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class NewLine implements WriteInterface
{

    /**
     * @inheritdoc
     */
    public function write(DocumentDirectiveInterface $directive): string
    {
        $lines = '';

        if (0 < count($directive->commentLines())){
            $lines = implode(PHP_EOL, $directive->commentLines());
            $lines .= PHP_EOL;
        }

        $lines .= implode(PHP_EOL, $directive->directiveLines());

        $lines .= PHP_EOL . PHP_EOL;

        return $lines;
    }
}