<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
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
            ->add('status', ChoiceType::class, [
                'choices'  => [
                    'réclamation accepter' => "réclamation accepter",
                    'réclamation refusé' => "réclamation refusé",
                ],
            ])
            ->add('reservation',EntityType::class ,[
                'class'=> Reservation::class,
                'choice_label'=> 'name',
                'placeholder' => 'please choose a reservation',
                'query_builder'=>function(ReservationRepository $reservationRepository){
                return $reservationRepository->createQueryBuilder('c')
                    ->andWhere('c.user = :val')
                    ->setParameter('val', 1);
                }
            ])


        ->getForm();
        ;
    }
    public function buildFormAdmin(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('status', ChoiceType::class, [
            'choices'  => [
                'réclamation accepter' => "réclamation accepter",
                'réclamation refusé' => "réclamation refusé",
            ],
        ])
    ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
