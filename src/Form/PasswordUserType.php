<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class PasswordUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('actualPassword', passwordType::class, [
                'label' => 'Votre mot de passe actuel',
                'attr' => [
                    'placeholder' => 'Entrez votre mot de passe actuel'
                ],
                'mapped' => false,
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au moins 6 caractères',
                        'max' => 4096,
                    ])
                ],
                #'invalid_message' => 'Les mots de passe doivent être identiques',
                'first_options' => [
                    'label' => 'Votre nouveau mot de passe',
                    'attr' => [
                        'placeholder' => 'Entrez votre nouveau mot de passe'
                    ],
                    'hash_property_path' => 'password'
                ],
                'second_options' => [
                    'label' => 'Confirmez votre nouveau mot de passe',
                    'attr' => [
                        'placeholder' => 'Confirmez votre nouveau mot de passe'
                    ],
                ],
                'mapped' => false,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Mettre à jour mon mot de passe',
                'attr' => [
                    'class' => 'btn btn-success w-100 mt-3'
                ]
            ])
            ->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
                $form = $event->getForm();
                $user = $form->getConfig()->getOptions()['data'];
                $passwordHasher = $form->getConfig()->getOptions()['passwordHasher'];

                // 1. Récupérer le mot de passe actuel saisi par l'utilisateur et le comparer avec le mot de passe en base de données
                $isValid = $passwordHasher->isPasswordValid(
                    $user,
                    $form->get('actualPassword')->getData()
                );

                // 2. Si le mot de passe actuel est invalide, ajouter une erreur au champ 'actualPassword'
                if (!$isValid) {
                    $form->get('actualPassword')->addError(new FormError('Le mot de passe saisi est incorrect'));
                }

            })
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'passwordHasher' => null
        ]);
    }
}
