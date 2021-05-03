<?php
/**
 * QuestionPossibleAnswer controller.
 */

namespace App\Controller;

use App\Entity\QuestionPossibleAnswer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class QuestionPossibleAnswerController.
 *
 */
class QuestionPossibleAnswerController extends AbstractController
{

    /**
     * Show action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/questionsPP",
     *     methods={"GET"},
     *     name="quiz_show",
     * )
     */
    public function show(QuestionPossibleAnswer $questionPossibleAnswer): Response
    {
        return $this->render(
            'questionpossibleanswer/show.html.twig',
            ['questionpossibleanswer' => $questionPossibleAnswer]
        );


    }


}