<?php namespace Arcanedev\Html\Tests\Elements;

use Arcanedev\Html\Elements\Img;

/**
 * Class     ImgTest
 *
 * @package  Arcanedev\Html\Tests\Elements
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class ImgTest extends TestCase
{
    /* -----------------------------------------------------------------
     |  Tests
     | -----------------------------------------------------------------
     */

    /** @test */
    public function it_can_create()
    {
        $expected = '<img>';

        static::assertHtmlStringEqualsHtmlString($expected, Img::make());
    }

    /** @test */
    public function it_can_create_with_an_alt_attribute()
    {
        static::assertHtmlStringEqualsHtmlString(
            '<img alt="Image title">',
            Img::make()->alt('Image title')
        );
    }

    /** @test */
    public function it_can_create_with_a_src_attribute()
    {
        static::assertHtmlStringEqualsHtmlString(
            '<img src="logo.jpg">',
            Img::make()->src('logo.jpg')
        );
    }

    /** @test */
    public function it_can_create_with_builder()
    {
        static::assertHtmlStringEqualsHtmlString(
            '<img src="logo.jpg" alt="ARCANEDEV">',
            Img::make()->src('logo.jpg')->alt('ARCANEDEV')
        );
    }
}