<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;

use Twig\Environment;

class ErrorController extends AbstractController
{
    
    public function show(FlattenException $exception, Environment $environment): Response
    {
        $view = "bundles/TwigBundle/Exception/error{$exception->getStatusCode()}.html.twig";

        if (!$environment->getLoader()->exists($view)) {
            $view = "bundles/TwigBundle/Exception/error500.html.twig";
        }

        return $this->render($view);
    }
}