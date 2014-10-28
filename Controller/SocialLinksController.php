<?php

namespace Astina\Bundle\SocialLinksBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SocialLinksController
 *
 * @package   Astina\Bundle\SocialLinksBundle\Controller
 * @author    Drazen Peric <dperic@astina.ch>
 * @copyright 2014 Astina AG (http://astina.ch)
 */
class SocialLinksController extends Controller
{
    /**
     * @param array $options
     *
     * @return Response
     */
    public function socialLinkAction($options)
    {
        return $this->render('AstinaSocialLinksBundle:SocialLinks:socialLink.html.twig', array(
            'socialUrl' => $options['socialUrl'],
            'target'    => $options['target'],
            'image'     => $options['image'],
            'class'     => $options['class']
        ));
    }
}
