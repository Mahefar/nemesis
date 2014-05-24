<?php

namespace Ecommerce\PhotographyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /*public function indexAction($name)
    {
        return $this->render('EcommercePhotographyBundle:Default:index.html.twig', array('name' => $name));
    }*/
    public function indexAction()
    {
        return $this->render(
        	'EcommercePhotographyBundle:Default:index.html.twig', 
        	array(
        		'items' => array(
        			'1' => array(
        				'album'=>'nom album',
        				'titre'=>"titre1",
        				'taille'=>'456',
        				),
        			'2' => array(
        				'album'=>'nom album',
        				'titre'=>"titre3",
        				'taille'=>'456',
        				),
        			'3' => array(
        				'album'=>'nom album',
        				'titre'=>"titre4",
        				'taille'=>'456',
        				),
                    '4' => array(
                        'album'=>'nom album',
                        'titre'=>"titre4",
                        'taille'=>'456',
                        ),
                    '5' => array(
                        'album'=>'nom album',
                        'titre'=>"titre4",
                        'taille'=>'456',
                        ),
        			),

        	)
        );
    }
}
