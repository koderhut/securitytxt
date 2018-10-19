<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt;

use KoderHut\SecurityTxt\Line\Comment;
use KoderHut\SecurityTxt\Line\DirectiveLineInterface;

/**
 * Interface DocumentDirectiveInterface
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
interface DocumentDirectiveInterface
{
    /**
     * Add a comment line to be written
     *
     * @param Comment $line
     */
    public function addCommentLine(Comment $line);

    /**
     * Retrieve an array of comment line objects
     *
     * @return array
     */
    public function commentLines(): array;

    /**
     * Add a directive line
     *
     * @param DirectiveLineInterface $line
     */
    public function addDirectiveLine(DirectiveLineInterface $line);

    /**
     * Retrieve the list of directive lines
     *
     * @return array
     */
    public function directiveLines(): array;
}
