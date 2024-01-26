<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\OrderDetails;
use App\Form\OrderType;
use App\Repository\PromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
   

    private $entityManager;
    private $session;


    public function __construct(EntityManagerInterface $entityManager, SessionInterface $session)
    {
        $this->entityManager = $entityManager;
        $this->session=$session;
    }

    /**
     * @Route("/commande", name="order")
     */
    public function index(Cart $cart, Request $request)
    {
        if (!$this->getUser()->getAddresses()->getValues())
        {
            return $this->redirectToRoute('account_address_add');
        }

        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser()
        ]);

        return $this->render('order/index.html.twig', [
            'form' => $form->createView(),
            'cart' => $cart->getFull()
        ]);
    }

    /**
     * @Route("/commande/recapitulatif", name="order_recap", methods={"POST"})
     */
    public function add(Cart $cart, Request $request, PromoRepository $promoRepository)
    {
        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $date = new \DateTime();
            $carriers = $form->get('carriers')->getData();

            $delivery = $form->get('addresses')->getData();
            $delivery_content = $delivery->getFirstname().' '.$delivery->getLastname();
            $delivery_content .= '<br/>'.$delivery->getPhone();

            if ($delivery->getCompany()) {
                $delivery_content .= '<br/>'.$delivery->getCompany();
            }

            $delivery_content .= '<br/>'.$delivery->getAddress();
            $delivery_content .= '<br/>'.$delivery->getPostal().' '.$delivery->getCity();
            $delivery_content .= '<br/>'.$delivery->getCountry();

            // Enregistrer ma commande Order()
            $order = new Order();
            $reference = $date->format('dmY').'-'.uniqid();
            $order->setReference($reference);
            $order->setUser($this->getUser());
            $order->setCreatedAt($date);
            $order->setCarrierName($carriers->getName());
            $order->setCarrierPrice($carriers->getPrice());
            $order->setDelivery($delivery_content);
            $order->setState(0);

            $this->entityManager->persist($order);
$allMount=0;
$objet = $this->session->get('promo');
$cpt=0;
            // Enregistrer mes produits OrderDetails()
            foreach ($cart->getFull() as $product) {
                $cpt++;
                $orderDetails = new OrderDetails();
                $orderDetails->setMyOrder($order);
                $orderDetails->setProduct($product['product']->getName());
                $orderDetails->setQuantity($product['quantity']);
                $orderDetails->setPrice($product['product']->getPrice());
                     $orderDetails->setTotal($product['product']->getPrice() * $product['quantity']);
                
               $allMount =$allMount+($product['product']->getPrice() * $product['quantity']);
                if($objet->getTaux()==10 && $allMount>=30) {
                $calcPrix=$product['product']->getPrice() * $product['quantity'];
                $mont=$calcPrix-$calcPrix*0.10;
                 $orderDetails->setTotal($mont);
                 $orderDetails->setTauxPromo($objet->getTaux());
                 $orderDetails->setTotalreduction($calcPrix);
                 
             }
             
               if($objet->getTaux()==5 && $cpt==2) {
                $calcPrix=$product['product']->getPrice() * $product['quantity'];
                $mont=$calcPrix-$calcPrix*0.50;
                 $orderDetails->setTotal($mont);
                 $orderDetails->setTauxPromo($objet->getTaux());
                 $orderDetails->setTotalreduction($calcPrix);
                 
             }
              if($objet->getTaux()==3 && $allMount==35) {
                $calcPrix=$product['product']->getPrice() * $product['quantity'];
                $mont=0.00;
                 $orderDetails->setTotal(35);
                 $orderDetails->setTauxPromo(35);
                 $orderDetails->setTotalreduction(0);
                 
             }
               $this->entityManager->persist($orderDetails);
            }
             
            $this->entityManager->flush();

            return $this->render('order/add.html.twig', [
                'cart' => $cart->getFull(),
                'carrier' => $carriers,
                'delivery' => $delivery_content,
                'reference' => $order->getReference(),
           
            ]);
        }

        return $this->redirectToRoute('cart');
    }
}