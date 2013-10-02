<?php
namespace R3c\Bundle\NewsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Bundle\MenuBundle\MenuItem;

use R3c\Bundle\NewsBundle\Entity\News;

class NewsAdmin extends Admin 
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('slug')
            ->add('title')
            ->add('created_at')
        ;
        
        return $listMapper;
    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('slug')
                ->add('title')
                ->add('preview')
                ->add('text')
                ->add('created_at')
            ->end()
        ;
        
        return $formMapper;
    }
}