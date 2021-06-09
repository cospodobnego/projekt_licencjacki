<?php
/**
 * Page controller.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PageController.
 *
 */
class PageController extends AbstractController
{
    /**
     * Index action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/",
     *     name="/",
     * )
     */


    public function page(): Response
    {
        return $this->render('/page/homepage.html.twig');
    }

    /**
     * Homepage action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/homepage",
     *     name="homepage",
     * )
     */


    public function homepage(): Response
    {
        return $this->render('/page/homepage.html.twig');
    }

    /**
     * Aboutpage action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/about",
     *     name="about",
     * )
     */


    public function about(): Response
    {
        return $this->render('/page/about.html.twig');
    }
    /**
     * Stagespage action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/stages",
     *     name="stages",
     * )
     */


    public function stages(): Response
    {
        return $this->render('/page/stages.html.twig');
    }

    /**
     * Accessibilitypage action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/accessibility",
     *     name="accessibility",
     * )
     */


    public function accessibility(): Response
    {
        return $this->render('/page/accessibility.html.twig');
    }
}