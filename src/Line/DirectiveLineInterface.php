<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Line;

/**
 * Interface DirectiveLineInterface
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
interface DirectiveLineInterface
{
    /**
     * Return the type of the line
     *
     * @return string
     */
    public function type(): string;

    /**
     * Cast to string the specified line
     *
     * @return string
     */
    public function __toString(): string;
}