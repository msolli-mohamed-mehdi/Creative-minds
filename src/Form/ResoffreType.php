<?php

namespace App\Form;

use App\Entity\Resoffre;
use App\Entity\Offre;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ResoffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nbr_de_place')
            ->add('date_res')
            ->add('Offre' ,EntityType::class ,array(
                'class' => Offre::class ,
                'choice_label' =>'name' , 
                'placeholder' => 'select your offre'
            ) )
            ->add('User' ,EntityType::class ,array(
                'class' => User::class ,
                'choice_label' =>'name' , 
                'placeholder' => 'select your client'
            ) )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Resoffre::class,
        ]);
    }
}
