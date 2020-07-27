<?php

namespace AssociationBundle\Repository;

/**
 * ReclamationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReclamationRepository extends \Doctrine\ORM\EntityRepository
{
    public function count($idAssociation){
        $query= $this->getEntityManager()->createQuery("Select COUNT(v.idAssociation) FROM AssociationBundle:Reclamation v
      WHERE  v.idAssociation=:idAssociation")->setParameter('idAssociation',$idAssociation);
        return $query->getResult();
    }
}
