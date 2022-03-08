<?php

namespace App\Form;

use App\Entity\Reservationhotel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\User;
use App\Entity\Hotel;

class ReservationhotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre_de_chambres')
            ->add('date_res')
            ->add('User' ,EntityType::class ,array(
                'class' => User::class ,
                'choice_label' =>'name' , 
                'placeholder' => 'select your client'
            
              ))
              ->add('Hotel' ,EntityType::class ,array(
                 'class' => Hotel::class ,
                 'choice_label' =>'name' , 
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
