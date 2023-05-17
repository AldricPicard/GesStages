<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;
use Symfony\Component\HttpFoundation\RequestStack;

class JWTCreatedListener
{
    private $requestStack;

    /**
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @param JWTCreatedEvent $event
     *
     * @return void
     */
    public function onJWTCreated(JWTCreatedEvent $event)
    {
        // récupération du jetons
        $payload       = $event->getData();
        // On lui ajoute une case "id" (le jeton est un tableau)
        $payload['id'] = $event->getUser()->getId();
        // Rajoute des trucs quand Ryan se sera reveillé ^^
        $event->setData($payload);
        // Et on le renvoi
        $header        = $event->getHeader();
        $header['cty'] = 'JWT';
        $event->setHeader($header);
    }
}