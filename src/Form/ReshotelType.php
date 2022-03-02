<?php

namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Reservationhotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Client;
use App\Entity\Hotel;

class ReshotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre_de_chambres')
            ->add('date_res')
             ->add('Client' ,EntityType::class ,array(
                'class' => Client::class ,
                'choice_label' =>'name' , 
                'placeholder' => 'select your client'
            
              ))
              ->add('Hotel' ,EntityType::class ,array(
                 'class' => Hotel::class ,
                 'choice_label' =>'nom' , 
                 'placeholder' => 'select your hotel'
            ) )
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservationhotel::class,
        ]);
    }
}
