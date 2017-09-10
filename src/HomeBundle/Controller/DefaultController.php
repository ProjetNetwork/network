<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Form\ImageType;

class DefaultController extends Controller
{
 

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AdminBundle:Article');

        $sheets = $repository->getAll();

        return $this->render('HomeBundle:Default:index.html.twig', array('sheets' => $sheets) );

    }
        public function notesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AdminBundle:Article');

        $sheets = $repository->getAll();

        return $this->render('HomeBundle:Default:notes.html.twig', array('sheets' => $sheets) );

    }



}
