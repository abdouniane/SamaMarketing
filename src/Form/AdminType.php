<?php

namespace App\Form;

use App\Entity\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AdminType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', TextType::class, [
                    'attr' => ['class' => 'form-control', 'id' => 'nom']
                ])
                ->add('prenom', TextType::class, [
                    'attr' => ['class' => 'form-control', 'id' => 'prenom']])
                ->add('telephone', TextType::class, [
                    'attr' => ['class' => 'form-control', 'id' => 'telephone', 'placeholder' => 'ex : 781585646']])
                ->add('email', EmailType::class, [
                    'attr' => ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'ex : sama@gmail.com']])
                ->add('password', PasswordType::class, [
                    'attr' => ['class' => 'form-control', 'id' => 'password']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Admin::class,
        ]);
    }

}
