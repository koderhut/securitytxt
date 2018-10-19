<?php declare(strict_types=1);

namespace KoderHut\SecurityTxt\Tests\Directive;

use KoderHut\SecurityTxt\DocumentDirectiveInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractDirectiveTests
 *
 * @author Denis-Florin Rendler <connect@rendler.me>
 */
abstract class AbstractDirectiveTests extends TestCase
{
    abstract protected function prepareInstance($directiveParams, $commentParams = null): DocumentDirectiveInterface;
    abstract public function directiveParamsProvider(): array;
    abstract public function commentParamsProvider(): array;

    /**
     * @test
     *
     * @param $directiveParams
     * @param $expected
     *
     * @dataProvider directiveParamsProvider
     */
    public function testCreateDirectiveLinesWithoutComment($directiveParams, $expected)
    {
        $instance = $this->prepareInstance($directiveParams);

        $this->assertEquals($expected, $instance->directiveLines());
    }

    /**
     * @test
     *
     * @param $directiveParams
     * @param $commentParams
     * @param $expected
     *
     * @dataProvider commentParamsProvider
     */
    public function testCreateDirectiveLinesWithComments($directiveParams, $commentParams, $expected)
    {
        $instance = $this->prepareInstance($directiveParams, $commentParams);

        $this->assertEquals($expected['comment'], $instance->commentLines());
        $this->assertEquals($expected['directive'], $instance->directiveLines());
    }
}