<?php

namespace App\EventSubscriber;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginSubscriber implements EventSubscriberInterface
{
    private $security;
    private $em;

    public function __construct(
        Security $security,
        EntityManagerInterface $em
    )
    {
        $this->security = $security;
        $this->em = $em;
    }

    public function onLogin()
    {
        $user = $this->security->getUser();
        $user->setLastLoginAt(new \DateTime());

        $this->em->flush();
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class => 'onLogin',
        ];
    }


}
