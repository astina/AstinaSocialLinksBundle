<?php

namespace Astina\Bundle\SocialLinksBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SocialLinksController
 *
 * @package   Astina\Bundle\SocialLinksBundle\Controller
 * @author    Drazen Peric <dperic@astina.ch>
 * @copyright 2014 Astina AG (http://astina.ch)
 */
class SocialLinksController 
{
    /**
     * @param Request $request
     * @param array   $options
     *
     * @Template()
     *
     * @return array
     */
    public function socialLinkAction(Request $request, $options)
    {
        return array(
            'socialUrl' => $options['socialUrl'],
            'target'    => $options['target'],
            'image'     => $options['image'],
            'class'     => $options['class']
        );
    }
}
