<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Resoffre;
use Symfony\Component\Form\AbstractType;
use App\Repository\ResoffreRepository ;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('message')
        ->add('type', ChoiceType::class, [
        'choices'  => [
            'Vol' => "Vol",
            'Hotel' => "Hotel",
            'Guide' => "Guide",
          ],
            'placeholder' => 'please choose a type of reservation',
        ])
        ->add('reservation',EntityType::class ,[
            'class'=> Resoffre::class,
            'choice_label'=> 'id',
            'placeholder' => 'please choose a reservation',
            'query_builder'=>function(ResoffreRepository $ResoffreRepository){
            return $ResoffreRepository->createQueryBuilder('c')
                ->andWhere('c.user = :val')
                ->setParameter('val', 2);
            }
        ])


    ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
