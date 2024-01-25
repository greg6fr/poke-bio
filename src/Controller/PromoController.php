<?php

namespace App\Controller;

use App\Repository\PromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PromoController extends AbstractController
{
     private $promo= "oui";

    public function __construct(private PromoRepository $promoRepository, private SessionInterface $session)
    {
       
    }
    
    /**
     * @Route("/promo", name="app_promo")
     */
    public function index(): Response
    {
         $taux=0;
      
                $rand=rand(1,1000);
                $objet=$this->promoRepository->find($rand);
                $tab=['taux'=>$objet->getTaux(),
                'code'=>$objet->getCode()];
  $this->session->set('promo',$objet);
        
        
        return $this->render('promo/index.html.twig', [
            'controller_name' => 'PromoController',
            'taux'=>$objet->getTaux(),
            'code'=>$objet->getCode(),
        ]);
    }
}