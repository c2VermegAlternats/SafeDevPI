<?php

namespace AssociationBundle\Controller;

use AssociationBundle\Entity\Association;
use AssociationBundle\Entity\Categorie;
use AssociationBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AssociationController extends Controller
{
    public function addAssociationAction(Request $request)
    {
        //récupérer le contenu de la requête envoyé par l'outil postman
        $data = $request->getContent();
//deserialize data: création d'un objet 'Refugee' à partir des données json envoyées
        $association = $this->get('jms_serializer')->deserialize($data, 'AssociationBundle\Entity\Association', 'json');
//ajout dans la base
        $association->setNombreReclamation(0);
        $association->setIsReclaimed(false);
        $em = $this->getDoctrine()->getManager();

            $em->persist($association);
            $em->flush();
            $response = new Response('Add Succeful');
            $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
            return $response;


    }

    public function updateAssociationAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository(Association::class)->find($id);
        $data = $request->getContent();
        $newdata = $this->get('jms_serializer')->deserialize($data, 'AssociationBundle\Entity\Association', 'json');

        $association->setNomA($newdata->getNomA());
        $association->setTel($newdata->getTel());
        $association->setEmail($newdata->getEmail());
        $association->setDescription($newdata->getDescription());
        $association->setVille($newdata->getVille());
        $association->setAdresse($newdata->getAdresse());
        $association->setNomPresident($newdata->getNomPresident());
        $association->setBudget($newdata->getBudget());
        $association->setCategorie($newdata->getCategorie());
        $em->persist($association);
        $em->flush();

        $response = new Response('Updated Successfully');
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $response;
    }

    public function getAllAssociationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository(Association::class)->findAll();
        $data = $this->get('jms_serializer')->serialize($association, 'json');
        $response = new Response($data);
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $response;
    }

    public function getAssociationAction(Association $association)
    {
        $data = $this->get('jms_serializer')->serialize($association, 'json');
        $response = new Response($data);
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $response;
    }

    public function deleteAssociationAction($id)
    {

        $em=$this->getDoctrine()->getManager();
        $association=$em->getRepository(Association::class)->find($id);

            $em->remove($association);
            $em->flush();
            $response = new Response('Deleted successfully');
            $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
            return $response;


    }
    public function getNombreReclamationAction($id){
        $em=$this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)->count($id);
        return new JsonResponse(json_encode($reclamation));
    }
    public function isReclaimedAction($id){
        $em = $this->getDoctrine()->getManager();
        $association = $em->getRepository(Association::class)->find($id);
        $nombreRec=$association->getNombreReclamation();

        $association->setNombreReclamation($nombreRec+1);
        $association->setIsReclaimed(true);
        $em->persist($association);
        $em->flush();
        $response = new Response('is reclaimed');
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $response;
    }
}
