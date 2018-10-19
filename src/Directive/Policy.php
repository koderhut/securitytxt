<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Directive;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;

/**
 * Class Policy
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Policy extends AbstractDirective implements DocumentDirectiveInterface
{
    protected const LINE_TAG = 'Policy';
}
