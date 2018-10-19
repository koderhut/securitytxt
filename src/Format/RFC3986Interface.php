<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Format;

/**
 * Interface RFC3986Interface
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
interface RFC3986Interface
{
    /**
     * Return an output formatted according to RFC3986
     *
     * @return string
     */
    public function rfc3986(): string;
}