<?php

namespace SzybkoBudujemyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SzybkoBudujemyBundle\Entity\ContactMassage;
use SzybkoBudujemyBundle\Form\Type\ContactMassageType;

class DefaultController extends Controller
{

    public function homePageAction()
    {
        return $this->render('SzybkoBudujemyBundle:Default:home.html.twig', array());
    }

    public function aboutAction()
    {
        return $this->render('SzybkoBudujemyBundle:Default:about.html.twig', array());
    }

    public function realizationsAction()
    {
        $realizations=$this->getDoctrine()
            ->getRepository('SzybkoBudujemyBundle:Realization')
            ->findAll();
        return $this->render(('SzybkoBudujemyBundle:Default:realizations.html.twig'), array(
            'realizations' => $realizations
        ));
    }

    public function galleryAction()
    {
        $photos=$this->getDoctrine()
            ->getRepository('SzybkoBudujemyBundle:Photo')
            ->findAll();
        return $this->render(
            'SzybkoBudujemyBundle:Default:gallery.html.twig',
            array('photos' => $photos)
        );
    }

    public function contactAction()
    {
        $contactMassage=new ContactMassage();

        $form = $this->createForm(new ContactMassageType(), $contactMassage);

        $request=$this->get('request');

        $form->handleRequest($request);

        $em=$this->getDoctrine()->getManager();

        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->persist($contactMassage);
                $em->flush();
                return $this->render('SzybkoBudujemyBundle:Default:contactsuccess.html.twig');
            }
        }

        return $this->render(
            'SzybkoBudujemyBundle:Default:contact.html.twig',
            array('form'=>$form->createView())
        );
    }
}
