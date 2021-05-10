<?php
/**
 * Question controller.
 */

namespace App\Controller;


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
     *     "/quiz",
     *     methods={"GET","POST"},
     *     name="quiz",
     *
     * )
     */

    public function show(): Response
    {
        $question = $this->getDoctrine()
            ->getRepository('App:Question')
            ->findAll();

        return $this->render(

            'question/show.html.twig',
            array('question' => $question)
        );

    }
    /**
     * Score action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     * @param Request $request
     * @return Response
     * @Route(
     *     "/sendQuiz",
     *     name="sendQuiz",
     *     methods={"GET","POST"},
     * )
     */
    public function sendQuiz(Request $request):Response
    {
    $counter = 0;
    $data_form = implode(",", $request->request->all());
    $data = explode(",",$data_form);
    $length = count($data);

    for ($i=0; $i < $length; $i++) {
        if($data[$i] == '1')
       {
           $counter++;
       }

    }

        return $this->render(

            'question/score.html.twig',
            ['counter' => $counter]
        );
    }
}