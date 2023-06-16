<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => [
                    ' placeholder' => 'Enter your name'
                ],
            ])
        
            ->add('role', ChoiceType::class, [
                'label' => 'Role',
                'choices' => [
                    "ADMIN" => "ROLE_ADMIN",
                    "MANEGER"=> "ROLE_MANAGER",
                    "USER" => "ROLE_USER",
                ]
            ])

            ->add('avatar', FiledType::class, [
                'label' => 'Avatar',
                'required' => false,
            ])
            

            ->add('email', EmailType::class, [
                'label' => 'Email pour se connecter',
            ])
             // Utilisation de l'event avant de mettre les données dans le formulaire
             ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){

                    // Récupération du form depuis l'event (pour pouvoir travailler avec)

             $builder = $event->getForm();
                   // Récupération du user mappé sur le form depuis l'event
             /** @var User $user */
             $user =$event->getData();
                    // On conditionne le champ "password"
                   // Si user existant, il a id non null
             if ($user->getId()!== null) {
                 
             $builder->add('password', PasswordTypes::class,[

                "mapped" => false,
                "label" => "le mot de passe",
                "attr" => [
                    "placeholder" => "laisser vide pour ne pas modifier..."
                ],

                // Déplacer les contraintes de l'entité vers le formulaire d'jout

                'constraints' => [
                    new Regex(

                    ),
                ]
                ]);









        $builder->add('password', RepeteadType::class, [
            'type' => PasswordType::class,
            'invalid_message' => 'The password fields must match.',
            'first_options' => ['label' => 'Password'],
            'second_options' =>['label'=> 'Comfirm Password'],
        ])
        ->add('players');
    }
}
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
