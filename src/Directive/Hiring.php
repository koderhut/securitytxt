<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Directive;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;

/**
 * Class Hiring
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Hiring extends AbstractDirective implements DocumentDirectiveInterface
{
    protected const LINE_TAG = 'Hiring';
}
