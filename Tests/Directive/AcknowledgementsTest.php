<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Directive;

use KoderHut\SecurityTxt\Directive\Acknowledgements;
use KoderHut\SecurityTxt\Directive\Policy;
use KoderHut\SecurityTxt\DocumentDirectiveInterface;
use KoderHut\SecurityTxt\Line\Comment;
use KoderHut\SecurityTxt\Line\Url;

/**
 * Class AcknowledgementsTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\Directive\Acknowledgements
 * @covers \KoderHut\SecurityTxt\Directive\AbstractDirective
 */
class AcknowledgementsTest extends AbstractDirectiveTests
{

    /**
     * @see testCreateDirectiveLinesWithoutComment
     *
     * @return array
     */
    public function directiveParamsProvider(): array
    {
        return [
            'single policy with url' => [
                [new Url('http://test.com/acknowledgements')],
                ['Acknowledgements: http://test.com/acknowledgements'],
            ],
        ];
    }

    /**
     * @see testCreateAContactWithCommentAndEmail
     *
     * @return array
     */
    public function commentParamsProvider(): array
    {
        return [
            'single comment line'    => [
                [new Url('http://test.com/acknowledgements')],
                [new Comment('this is a comment line')],
                ['comment' => ['# this is a comment line'], 'directive' => ['Acknowledgements: http://test.com/acknowledgements']],
            ],
            'multiple comment lines' => [
                [new Url('http://test.com/acknowledgements')],
                [new Comment('this is a comment line'), new Comment('this is a second comment line')],
                [
                    'comment'   => ['# this is a comment line', '# this is a second comment line'],
                    'directive' => ['Acknowledgements: http://test.com/acknowledgements'],
                ],
            ],
        ];
    }

    /**
     * @param $directiveParams
     * @param null $comments
     *
     * @return Policy
     */
    protected function prepareInstance($directiveParams, $comments = null): DocumentDirectiveInterface
    {
        $instance = new Acknowledgements(...$directiveParams);

        if (null !== $comments) {
            foreach ($comments as $comment) {
                $instance->addCommentLine($comment);
            }
        }

        return $instance;
    }
}
