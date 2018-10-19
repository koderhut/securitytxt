<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Directive;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;

/**
 * Class Signature
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Signature extends AbstractDirective implements DocumentDirectiveInterface
{
    protected const LINE_TAG = 'Signature';
}
