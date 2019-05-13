<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends BaseController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $responseContent = $this->blade->run("homepage", array("username"=>"world"));
        return new Response($responseContent);
    }
}