<?php

namespace App\FormType;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Authors Sorin Pop
 *
 * Class OrderFormType
 * @package App\FormType
 */
class OrderFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("title", TextType::class, [
            'label' => 'Title',
            'attr' => [ 'class' => 'form-control' ]
        ])
            ->add("category", TextType::class, [
                'label' => 'Category',
                'attr' => [ 'class' => 'form-control' ]
            ])
            ->add("address", TextType::class, [
                'label' => 'Address',
                'attr' => [ 'class' => 'form-control' ]
            ])
            ->add("phone", TextType::class, [
                'label' => 'Phone',
                'attr' => [ 'class' => 'form-control' ]
            ])
            ->add("email", TextType::class, [
                'label' => 'Email',
                'attr' => [ 'class' => 'form-control' ]
            ])
            ->add("description", TextType::class, [
                'label' => 'Description',
                'attr' => [ 'class' => 'form-control' ]
            ])
            ->add("proposedPrice", TextType::class, [
                'label' => 'Proposed Price',
                'attr' => [ 'class' => 'form-control' ]
            ])
            ->add("date", TextType::class, [
                'label' => 'Date',
                'attr' => [ 'class' => 'form-control' ]
            ])
            ->add("status", TextType::class, [
                'label' => 'Status',
                'attr' => [ 'class' => 'form-control' ]
            ])
            ->add("submit", ButtonType::class, [
                'label' => 'Submit',
                'attr' => ['class' => 'form-control']
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}