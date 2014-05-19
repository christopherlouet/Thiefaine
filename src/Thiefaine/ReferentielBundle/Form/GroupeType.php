<?php

namespace Thiefaine\ReferentielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array(
                'label' => 'Nom',
                'label_attr' => array(
                    'class' => 'control-label'
                ),
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Nom',
                    'title' => 'Renseigner le nom du groupe.',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'right'
                )
            ))
            ->add('gerergroupes', 'checkbox', array(
                'label' => 'Gestion des groupes',
                'label_attr' => array(
                    'style' => 'font-weight: inherit;'
                ),
                'attr' => array(
                    'class' => 'form-control pull-right',
                )
            ))
            ->add('gererutilisateurs', 'checkbox', array(
                'label' => 'Gestion des utilisateurs',
                'label_attr' => array(
                    'style' => 'font-weight: inherit;'
                ),
                'attr' => array(
                    'class' => 'form-control pull-right',
                )
            ))
            ->add('gereralertes', 'checkbox', array(
                'label' => 'Gestion des alertes',
                'label_attr' => array(
                    'style' => 'font-weight: inherit;'
                ),
                'attr' => array(
                    'class' => 'form-control pull-right',
                )
            ))
            ->add('gererinfos', 'checkbox', array(
                'label' => 'Gestion des informations',
                'label_attr' => array(
                    'style' => 'font-weight: inherit;'
                ),
                'attr' => array(
                    'class' => 'form-control pull-right',
                )
            ))
            ->add('gererconseils', 'checkbox', array(
                'label' => 'Gestion des conseils',
                'label_attr' => array(
                    'style' => 'font-weight: inherit;'
                ),
                'attr' => array(
                    'class' => 'form-control pull-right',
                )
            ))
            ->add('idgendarmerie');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thiefaine\ReferentielBundle\Entity\Groupe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'thiefaine_referentielbundle_groupe';
    }
}
