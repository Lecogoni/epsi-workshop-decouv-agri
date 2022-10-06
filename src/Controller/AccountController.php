<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(UserInterface $user ): Response
    {
        $user = $this->getUser();
        $offers = $user->getOffers();
        return $this->render('account/index.html.twig', [
            'name' =>   'name',
            'bookings' => $offers
        ]);
    }
}
