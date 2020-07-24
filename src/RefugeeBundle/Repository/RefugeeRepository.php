<?php

namespace RefugeeBundle\Repository;

/**
 * RefugeeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RefugeeRepository extends \Doctrine\ORM\EntityRepository
{
    public function countBen($location){
        $query= $this->getEntityManager()->createQuery("Select count(v)  FROM RefugeeBundle:Refugee v
      WHERE  v.location =:location")
            ->setParameter('location',$location);


        return $query->getResult();
    }
    public function sumByNeeds(){
        $query= $this->getEntityManager()->createQuery("Select v.needs, SUM(v.value)  FROM RefugeeBundle:Refugee v
      group by  v.needs" );

        return $query->getResult();
    }
}
