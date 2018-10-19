<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Directive;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;

/**
 * Class Acknowledgements
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
class Acknowledgements extends AbstractDirective implements DocumentDirectiveInterface
{
    protected const LINE_TAG = 'Acknowledgements';
}
