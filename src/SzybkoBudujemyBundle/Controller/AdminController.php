<?php

namespace SzybkoBudujemyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SzybkoBudujemyBundle\Entity\Photo;
use SzybkoBudujemyBundle\Entity\Realization;
use SzybkoBudujemyBundle\Form\Type\PhotoType;
use SzybkoBudujemyBundle\Form\Type\RealizationType;

class AdminController extends Controller
{
    public function addRealizationAction()
    {
        $realization= new Realization();

        $form = $this-> createForm(new RealizationType(), $realization);

        $request = $this->get('request');

        $form->handleRequest($request);

        $em= $this->getDoctrine()->getManager();

        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->persist($realization);
                $em->flush();
                return $this->render('SzybkoBudujemyBundle:Admin:addPhotoSucces.html.twig');
            }
        }
        return $this->render(
            'SzybkoBudujemyBundle:Admin:addPhoto.html.twig',
            array(
                'form'=> $form->createView())
        );
    }

    public function addPhotoAction()
    {
        $photo= new Photo();

        $form= $this-> createForm(new PhotoType(), $photo);

        $request= $this->get('request');

        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $photo->upload();
                $em->persist($photo);
                $em->flush();
                return $this->render('SzybkoBudujemyBundle:Admin:addPhotosucces.html.twig', array());
            }
        }
        return $this->render(
            'SzybkoBudujemyBundle:Admin:addPhoto.html.twig',
            array('form'=>$form->createView())
        );
    }
}
