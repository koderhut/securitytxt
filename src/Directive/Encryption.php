<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Directive;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;

/**
 * Class Encryption
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Encryption extends AbstractDirective implements DocumentDirectiveInterface
{
    protected const LINE_TAG = 'Encryption';
}
