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

    /**
     * @param string $provider Provider
     * @param string $url      Url to share
     * @param array $options   Options to set
     *                         ['title' => null, 'text' => null, 'attributes' => null]
     * @param string $linkText Link text
     *
     * @return \InvalidArgumentException|string
     */
    public function getSocialLink($provider, $url = null, $options = array(), $linkText = null)
    {
        $page = new Page(array(
            'url'   => $url,
            'title' => isset($options['title']) ? $options['title'] : null,
            'text'  => isset($options['text']) ? $options['text'] : null
        ));

        if (!$page->$provider) {
            throw new \InvalidArgumentException(sprintf('Provider `%s does not exist in social links extension.', $provider));
        }

        $attributes = isset($options['attributes']) ? $options['attributes'] : array();
        $attributes['target'] = isset($attributes['target']) ? $attributes['target'] : '_blank';

        $reference = new ControllerReference('AstinaSocialLinksBundle:SocialLinks:socialLink', array(
            'options' => array(
                'socialUrl'  => $page->$provider->shareUrl,
                'attributes' => $attributes,
                'linkText'   => $linkText
            )
        ));

        return $this->handler->render($reference);
    }

    public function getName()
    {
        return 'social_links';
    }
}
