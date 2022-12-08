<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig',[
            'number' => $number,
        ]);
    }

    public function minNumber(int $min): Response
    {
        $number = random_int($min, 100);   
        return $this->render('lucky/number.html.twig',[
            'number' => $number,
        ]);
    }
}
