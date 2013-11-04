<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Response;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class OwnController extends Controller
{
    /**
     * @Route("/first", name="_own")
     * @Template()
     */
    public function ownFirstAction()
    {
        return new Response("<html><body>Hello world!</body></html>");
    }

    /**
     * @Route("/second", name="_own")
     * @Template()
     */
    public function ownSecondAction()
    {
        return $this->render("AcmeDemoBundle:Own:ownsecond.html.twig", array('Type' => 'FinancialCalculator',
                                                                                'Manufactured' => 'Sitizen',
                                                                                'Color' => 'black',
                                                                                'Size' => '310*240*60'));
    }

    /**
     * @Route("/third", name="_own")
     * @Template()
     */
    public function ownThirdAction()
    {
        return $this->render("AcmeDemoBundle:Own:ownthird.html.twig");
    }
}