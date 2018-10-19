<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Directive;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;

/**
 * Class Contact
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Contact extends AbstractDirective implements DocumentDirectiveInterface
{
    protected const LINE_TAG = 'Contact';
}
