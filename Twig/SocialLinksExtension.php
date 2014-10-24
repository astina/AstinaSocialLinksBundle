<?php

namespace Astina\Bundle\SocialLinksBundle\Twig;

use SocialLinks\Page;
use Symfony\Component\HttpKernel\Controller\ControllerReference;
use Symfony\Component\HttpKernel\Fragment\FragmentHandler;

/**
 * Class SocialLinksExtension
 *
 * @author    Drazen Peric <dperic@astina.ch>
 * @copyright 2014 Astina AG (http://astina.ch)
 */
class SocialLinksExtension extends \Twig_Extension
{
    /**
     * @var FragmentHandler
     */
    private $handler;

    /**
     * @param FragmentHandler $handler
     */
    public function __construct(FragmentHandler $handler)
    {
        $this->handler = $handler;
    }

    public function getFunctions()
    {
        return array(
            'social_link' => new \Twig_Function_Method($this, 'getSocialLink', array('is_safe' => array('html'))),
        );
    }

    public function getSocialLink($provider, $url, $settings = array())
    {
        if (!$url) {
            return null;
        }

        $page = new Page(array(
            'url'   => $url,
            'title' => isset($settings['title']) ? $settings['title'] : null,
            'text'  => isset($settings['text']) ? $settings['text'] : null
        ));

        if (!$page->$provider) {
            return null;
        }

        $reference = new ControllerReference('AstinaSocialLinksBundle:SocialLinks:socialLink', array(
            'data' => array(
                'socialUrl' => $page->$provider->shareUrl,
                'target'    => isset($settings['target']) ? $settings['target'] : null,
                'image'     => isset($settings['image']) ? $settings['image'] : null
            )
        ));

        return $this->handler->render($reference);
    }

    public function getName()
    {
        return 'social_links';
    }
}
