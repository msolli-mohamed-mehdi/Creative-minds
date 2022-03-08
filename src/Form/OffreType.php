<?php

namespace App\Form;

use App\Entity\Offre;
use App\Entity\Vol ; 
use App\Entity\Hotel ; 
use App\Entity\Guide ; 

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository ;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('destination' , ChoiceType::class, [
                'choices'  => [
                    'Germany' => 'Germany',
                    'France' => 'France',
                    'Egypt' => 'Egypt',
                    'England' => 'England',
                ]
                ])

            ->add('place_dispo')
            ->add('price')
            ->add('valablede')
            ->add('valablea')
            //->add('image')
            ->add('image' ,FileType::class , [
                'label' => false,
                'multiple' => false,
                'mapped' => false,
            ])

           /* ->add('image' , FileType::class ,array(
                'multiple' => false,
                'attr' => array(
                    'accept' => 'image/*',
                )))
                */
            
            ->add('description')
            
            ->add('Vol' ,EntityType::class ,array(
                'class' => Vol::class ,
                'choice_label' =>'name' , 
                'placeholder' => 'select your vol'
            ) )
            ->add('Hotel' ,EntityType::class ,array(
                'class' => Hotel::class ,
                'choice_label' =>'name' , 
                'placeholder' => 'select your Hotel'
            ) )
            ->add('Guide' ,EntityType::class ,array(
                'class' => Guide::class ,
                'choice_label' =>'name' , 
                'placeholder' => 'select your guide'
            ) )
            
            /*->add('hotel')
            ->add('Guide')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
