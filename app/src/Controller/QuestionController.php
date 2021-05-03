<?php
/**
 * Question controller.
 */

namespace App\Controller;


use App\Entity\Question;
use App\Form\QuestionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class QuestionController.
 *
 */
class QuestionController extends AbstractController
{
    /**
     * Show action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/question",
     *     methods={"GET","POST"},
     *     name="question",
     *
     * )
     */

    public function show(): Response
    {
        $question = $this->getDoctrine()
            ->getRepository('App:Question')
            ->findAll();
//        $form = $this->createForm(QuestionType::class, $question, ['method'=>'POST']);
//        $form->handleRequest($request);
//        return $this->render(
//            'question/show.html.twig',
//            ['form' =>$form->createView(),
//                'question'=>$question]
//
//        );
        return $this->render(

//            'question/show.html.twig',
//            ['question' => $question]
            'question/show.html.twig',
            array('question' => $question)
        );

    }
}