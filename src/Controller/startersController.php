<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/azur_lane/starter")
     */
    public function number()
    {
        $starters = array("Laffey", "Javelin", "Z23", "Ayanami");
        $chosenStarter = array_rand($starters);

        return $this->render('azur_lane/starter.html.twig', [
            'starter' => $starters[$chosenStarter],
        ]);
    }
}