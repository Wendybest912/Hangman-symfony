<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {
    #[Route('/', name: 'app_home')]
    public function index(): Response {
        return $this->render('/home.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('/about.html.twig');
    }

    #[Route('/hello/{name}', name: 'hello')]
    public function hello(string $name): Response
    {
        return $this->render("/hello.html.twig", ['name' => ucfirst($name)] );
    }

    #[Route('/quotes', name: 'quotes')]
    public function quotes(): Response
    {
        $quotes = [
            'le code cest bien',
            'le code cest pas bien'
        ];
        $number = random_int(0,1);

        return $this->render("/quotes.html.twig", ['quotes' => $quotes[$number]] );
            
    }
}
?>