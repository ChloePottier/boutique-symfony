<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Category;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('image', FileType::class, [
                'required' => false,
                'data_class' => null
            ])
            ->add('description')
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => "nom", 
            ])
            ->add('prix')
            ->add('isPublished', CheckboxType::class,['required' => false])//checkbox : publié (true), non publié (false)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}