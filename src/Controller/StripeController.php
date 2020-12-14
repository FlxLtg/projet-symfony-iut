<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Item;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;
use App\Form\SearchProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StripeController extends AbstractController
{

    /**
     * @Route("/stripe", name="front_stripe")
     */
    public function stripe()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_XzLnJG2tgMhnzYAdietJqW1f'
        );
        $customer = $stripe->customers->retrieve(
            'cus_GOY05p2LQOyoLh',
            []
        );

        dump($customer);

<<<<<<< HEAD
        die();  
=======
        die();
>>>>>>> ed909716a11659b2557e9e71e4ffdbc6902b7904
    }
}