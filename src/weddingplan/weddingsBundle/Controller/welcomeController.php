<?php


namespace weddingplan\weddingsBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class WelcomeController
{
    public function indexAction()
    {
        return new Response('<html><body>Welcome!</body></html>');
        //$this->forward('acme.hello.controller:indexAction');
    }
}
?>
