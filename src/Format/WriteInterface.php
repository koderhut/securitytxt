<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Format;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;

/**
 * Interface WriteInterface
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
interface WriteInterface
{
    /**
     * Write the data to output device
     *
     * @param DocumentDirectiveInterface $directive
     */
    public function write(DocumentDirectiveInterface $directive);
}