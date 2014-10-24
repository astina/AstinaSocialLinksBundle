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
     * @param array   $data
     *
     * @Template()
     *
     * @return array
     */
    public function socialLinkAction(Request $request, $data)
    {
        $socialUrl = isset($data['socialUrl']) ? $data['socialUrl'] : '';
        $target    = isset($data['target']) ? $data['target'] : '';
        $image     = isset($data['image']) ? $data['image'] : '';
        $class     = isset($data['class']) ? $data['class'] : '';

        return array(
            'socialUrl' => $socialUrl,
            'target'    => $target,
            'image'     => $image,
            'class'     => $class
        );
    }
}
