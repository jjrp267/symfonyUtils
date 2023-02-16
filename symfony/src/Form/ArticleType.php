<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label' => 'Nombre',
            ])
            ->add('Description', TextType::class,[
                'label' => 'Descripción',
            ])
            ->add('writter', TextType::class,[
                'label' => 'Escritor',
            ])
            ->add('language', TextType::class,[
                'label' => 'Lenguaje',
            ])
            ->add('date', DateType::class, [
                'label' => 'Fecha',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
