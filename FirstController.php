<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 07/12/2018
 * Time: 14:40
 */


namespace gmc\FirstBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

class   FirstController
{
    public function secondAction()
    {
        return new Response("Hello World !");
    }
}
