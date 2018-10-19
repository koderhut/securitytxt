<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Directive;

use KoderHut\SecurityTxt\Directive\Hiring;
use KoderHut\SecurityTxt\Directive\Policy;
use KoderHut\SecurityTxt\DocumentDirectiveInterface;
use KoderHut\SecurityTxt\Line\Comment;
use KoderHut\SecurityTxt\Line\Url;

/**
 * Class HiringTest
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 *
 * @covers \KoderHut\SecurityTxt\Directive\Hiring
 * @covers \KoderHut\SecurityTxt\Directive\AbstractDirective
 */
class HiringTest extends AbstractDirectiveTests
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
                [new Url('http://test.com/hiring')],
                ['Hiring: http://test.com/hiring'],
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
                [new Url('http://test.com/hiring')],
                [new Comment('this is a comment line')],
                ['comment' => ['# this is a comment line'], 'directive' => ['Hiring: http://test.com/hiring']],
            ],
            'multiple comment lines' => [
                [new Url('http://test.com/hiring')],
                [new Comment('this is a comment line'), new Comment('this is a second comment line')],
                [
                    'comment'   => ['# this is a comment line', '# this is a second comment line'],
                    'directive' => ['Hiring: http://test.com/hiring'],
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
        $instance = new Hiring(...$directiveParams);

        if (null !== $comments) {
            foreach ($comments as $comment) {
                $instance->addCommentLine($comment);
            }
        }

        return $instance;
    }
}
