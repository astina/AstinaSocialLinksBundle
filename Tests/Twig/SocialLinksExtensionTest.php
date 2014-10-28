<?php

namespace Astina\Bundle\SocialLinksBundle\Tests\Twig;

use Astina\Bundle\SocialLinksBundle\Twig\SocialLinksExtension;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SocialLinksExtensionTest
 *
 * @package   Astina\Bundle\SocialLinksBundle\Tests\Twig
 * @author    Drazen Peric <dperic@astina.ch>
 * @copyright 2014 Astina AG (http://astina.ch)
 */
class SocialLinksExtensionTest extends WebTestCase
{
    public function testIfExtensionSocialLinkReturnsProperUrl()
    {
        $client = static::createClient();
        $request = new Request();

        $client->getContainer()->get('request_stack')->push($request);

        /** @var SocialLinksExtension $extension */
        $extension = $client->getContainer()->get('astina_social_links.twig.extension');

        $expected = '<a href="https://www.facebook.com/sharer.php?s=100&amp;p%5Burl%5D=https%3A%2F%2Fwww.astina.ch&amp;p%5Btitle%5D=Astina.ch&amp;p%5Bsummary%5D=Astina.ch+website" class="test-class" target="_blank"></a>';

        $this->assertEquals($expected, $extension->getSocialLink('facebook', 'https://www.astina.ch', array(
            'title'  => 'Astina.ch',
            'text'   => 'Astina.ch website',
            'target' => null,
            'class'  => 'test-class'
        )), "Extension method `getSocialLink()` didn't return proper url.");
    }
}
