<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
Use eftec\bladeone\BladeOne;

class BaseController extends AbstractController
{
    protected $blade;

    function __construct(string $bladeViewsDir, string $bladeCacheDir) {
        $blade = new BladeOne($bladeViewsDir,$bladeCacheDir,BladeOne::MODE_AUTO);
        $this->blade = $blade;
    }
}