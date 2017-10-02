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

        $expected = '<a href="https://www.facebook.com/sharer/sharer.php?display=popup&amp;redirect_uri=http%3A%2F%2Fwww.facebook.com&amp;u=https%3A%2F%2Fwww.astina.ch&amp;t=Astina.ch" class="test-class" target="_blank">Share on Facebook</a>';

        $this->assertEquals($expected, $extension->getSocialLink(
            'facebook',
            'https://www.astina.ch',
            array(
                'title'      => 'Astina.ch',
                'text'       => 'Astina.ch website',
                'attributes' => array('class' => 'test-class')
            ),
            'Share on Facebook'
        ), "Extension method `getSocialLink()` didn't return proper url.");
    }
}
