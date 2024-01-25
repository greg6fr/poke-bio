<?php

namespace App\Controller;

use App\Entity\Promo;
use App\Repository\PromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeletedatasController extends AbstractController
{
         public function __construct(private EntityManagerInterface $entityManager, private PromoRepository $promoRepository)
    {
         
        $this->entityManager = $entityManager;
    } 
    
    /**
     * @Route("/deletedatas", name="app_deletedatas")
     */
    public function index(): Response
    {
       $datas= $this->promoRepository->findAll();
        foreach($datas as $data) {
           // dd($data);
            
       $this->entityManager->remove($data);
        
        $entityName = Promo::class;

       
       // $entityManager = $this->getDoctrine()->getManager();

        
        $query = $this->entityManager->createQuery("DELETE FROM promo;")->execute();

        // Réinitialisez la séquence d'auto-incrémentation
        $platform = $this->entityManager->getConnection()->getDatabasePlatform();
        $this->entityManager->getConnection()->executeUpdate($platform->getTruncateTableSQL($entityName, true));
 }
        $this->entityManager->flush();
        return $this->render('deletedatas/index.html.twig', [
            'controller_name' => 'DeletedatasController',
            'compteur'=>120,
        ]);
    }
}