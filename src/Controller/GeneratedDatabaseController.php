<?php

namespace App\Controller;

use App\Entity\Promo;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneratedDatabaseController extends AbstractController
{
      private $compteur=0;
  

    public function __construct(private EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/generatedb", name="app_generated_database")
     */
    public function index(): Response
    {
        $objet=new Promo();
       for ($i = 1; $i <= 1000; $i++) {
    $objet=new Promo();
    
    if($i<=800) {
        $objet->setTaux(10.00);
        $objet->setCode('c10-'.uniqid());
    } else {
        if($i>800 && $i<=950) {
            $objet->setTaux(5.0);
            $objet->setCode('c05-'.uniqid());
        } else {
             $objet->setTaux(3.0);
             $objet->setCode('c03-'.uniqid());
        }
    }
    
    $this->entityManager->persist(($objet));
    $this->compteur=$this->compteur+1;
    
}
$this->entityManager->flush();
        return $this->render('generated_database/index.html.twig', [
            'controller_name' => 'GeneratedDatabaseController',
            'compteur'=>$this->compteur,
        ]);
    }
}