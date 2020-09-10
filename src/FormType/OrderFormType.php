<?php

namespace App\FormType;

use App\Entity\Order;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @Authors Sorin Pop
 *
 * Class OrderFormType
 * @package App\FormType
 */
class OrderFormType extends FormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("title", TextType::class, [
            'label' => 'Title',
            [ 'class' => 'form-control' ]
        ])
            ->add("category", TextType::class, [
                'label' => 'Category',
                [ 'class' => 'form-control' ]
            ])
            ->add("address", TextType::class, [
                'label' => 'Address',
                [ 'class' => 'form-control' ]
            ])
            ->add("phone", TextType::class, [
                'label' => 'Phone',
                [ 'class' => 'form-control' ]
            ])
            ->add("email", TextType::class, [
                'label' => 'Email',
                [ 'class' => 'form-control' ]
            ])
            ->add("description", TextType::class, [
                'label' => 'Description',
                [ 'class' => 'form-control' ]
            ])
            ->add("proposedPrice", TextType::class, [
                'label' => 'Proposed Price',
                [ 'class' => 'form-control' ]
            ])
            ->add("date", TextType::class, [
                'label' => 'Date',
                [ 'class' => 'form-control' ]
            ])
            ->add("status", TextType::class, [
                'label' => 'Status',
                [ 'class' => 'form-control' ]
            ])
            ->add("submit", ButtonType::class, [
                'label' => 'Submit',
                ['class' => 'form-control']
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