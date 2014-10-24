<?php

namespace Astina\Bundle\SocialLinksBundle\Tests\Twig;

use Astina\Bundle\SocialLinksBundle\Twig\SocialLinksExtension;
use Symfony\Component\HttpKernel\Fragment\FragmentHandler;

/**
 * Class SocialLinksExtensionTest
 *
 * @package   Astina\Bundle\SocialLinksBundle\Tests\Twig
 * @author    Drazen Peric <dperic@astina.ch>
 * @copyright 2014 Astina AG (http://astina.ch)
 */
class SocialLinksExtensionTest extends \PHPUnit_Framework_TestCase
{
//    public function testIfExtensionSocialLinkReturnsProperUrl()
//    {
//        $extension = new SocialLinksExtension($this->getFragmentHandlerMock());
//
//        $expected = '<a href="https://www.facebook.com/sharer.php?s=100&amp;p%5Burl%5D=https%3A%2F%2Fwww.astina.ch&amp;p%5Btitle%5D=Astina.ch&amp;p%5Bsummary%5D=Astina.ch" class="test-class" target="_blank"></a>';
//
//        $this->assertEquals($expected . 'sa', $extension->getSocialLink('facebook', 'https://www.astina.ch', array(
//            'title'  => 'Astina.ch',
//            'text'   => 'Astina.ch website',
//            'target' => null,
//            'class'  => 'test-class'
//        )), "Extension method social_link didn't return proper url.");
//    }
//
//    private function getFragmentHandlerMock()
//    {
//        $handler = $this->getMock('Symfony\Component\HttpKernel\Fragment\FragmentHandler');
//        $handler
//           ->expects($this->once())
//           ->method('render');
//
//        return $handler;
//    }
}
