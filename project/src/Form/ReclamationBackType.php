<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Resoffre;
use App\Repository\ResoffreRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationBackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('message')
            ->add('type')
            ->add('status', ChoiceType::class, [
                'choices'  => [
                    'réclamation accepter' => "réclamation accepter",
                    'réclamation refusé' => "réclamation refusé",
                ],
            ])
            ->add('reservation',EntityType::class ,[
                'class'=> Resoffre::class,
                'choice_label'=> 'id',
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
