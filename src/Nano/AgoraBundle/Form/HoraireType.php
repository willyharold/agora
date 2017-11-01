<?php

namespace Nano\AgoraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HoraireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lundiDebut')->add('mardiDebut')->add('mercrediDebut')->add('jeudiDebut')->add('vendrediDebut')->add('samediDebut')->add('dimancheDebut')->add('lundiFin')->add('mardiFin')->add('mercrediFin')->add('jeudiFin')->add('vendrediFin')->add('samediFin')->add('dimancheFin');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nano\AgoraBundle\Entity\Horaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nano_agorabundle_horaire';
    }


}
