<?php
/**
 * Quiz controller.
 */

namespace App\Controller;

use App\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class QuizController.
 *
 */
class QuizController extends AbstractController
{
    /**
     * Show action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request HTTP request
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/quiz",
     *     methods={"GET"},
     *     name="quiz_show",
     * )
     */
    public function show(Quiz $quiz): Response
    {
        return $this->render(
            'quiz/show.html.twig',
            ['quiz' => $quiz]
        );
    }


}