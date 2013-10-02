<?php

namespace R3c\Bundle\NewsBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends EntityRepository
{
    
    /**
     * Get array of last news
     * 
     * @param integer $count
     * @return array
     */
    public function getLastNews($count = null)
    {
        $query = $this->getEntityManager()
                ->createQuery('
                    SELECT 
                        n
                    FROM 
                        R3cNewsBundle:News n
                    ORDER BY 
                        n.created_at DESC
                    ');
        
        $count = (int) $count;
        if ($count) {
            $query->setMaxResults($count);
        }        
        
        return $query->getResult();
    }
    
}