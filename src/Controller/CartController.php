<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    private $entityManager;
    private $promo= "oui";

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/mon-panier", name="cart")
     */
    public function index(Cart $cart, Request $request)
    {   
    $taux=0;
        if(isset($this->promo) && $this->promo==="oui") {
            
            
                $rand=rand(1,1000);
    if($rand<=800) {
        $taux = 0.10;
    } else {
        if($rand>800 && $rand<=900) {
            $taux=0.05;
        } else {
            $taux=0.03;
        }
    }
        }
        
    
        return $this->render('cart/index.html.twig', [
            'cart' => $cart->getFull(),
            'taux'=>$taux,
            'code'=>strtolower(uniqid()),
        ]);
    }

    /**
     * @Route("/cart/add/{id}", name="add_to_cart")
     *  
     */
    public function add(Cart $cart, $id)
    {
        $cart->add($id);

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/remove", name="remove_my_cart")
     */
    public function remove(Cart $cart)
    {
        $cart->remove();

        return $this->redirectToRoute('products');
    }

    /**
     * @Route("/cart/delete/{id}", name="delete_to_cart")
     */
    public function delete(Cart $cart, $id)
    {
        $cart->delete($id);

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/decrease/{id}", name="decrease_to_cart")
     */
    public function decrease(Cart $cart, $id)
    {
        $cart->decrease($id);

        return $this->redirectToRoute('cart');
    }
}