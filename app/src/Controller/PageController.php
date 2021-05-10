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
     *     name="page",
     * )
     */


    public function page(): Response
    {
        return $this->render('index.html.twig');
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


    public function homePage(): Response
    {
        return $this->render('/page/homepage.html.twig');
    }

}