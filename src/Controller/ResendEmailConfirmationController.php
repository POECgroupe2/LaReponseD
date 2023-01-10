<?php

namespace App\Controller;

use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\AsController;


#[AsController]
class ResendEmailConfirmationController extends AbstractController
{
    private EmailVerifier $emailVerifier;


    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/resend/confirmation/email{email}/{id}', name: 'resend_confirmation_email', methods: ['GET', 'POST'])]
    public function resendConfirmationEmail($email, $id)
    {

        // moi
        $this->emailVerifier->resendEmailConfirmation('app_verify_email', $id, $email,
            (new TemplatedEmail())
                ->from(new Address('no-reply@d.response.com', 'mail-bot'))
                ->to($email)
                ->subject('Please Confirm your Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
        );
        return $this->redirectToRoute('app_front_home');
        dd($email, $id);


    }
}
//Could not resolve argument $user of "App\Controller\ResendEmailConfirmationController::resend()", maybe you forgot to register the controller as a service or missed tagging it with the "controller.service_arguments"?