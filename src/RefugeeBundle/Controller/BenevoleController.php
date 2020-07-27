<?php

namespace RefugeeBundle\Controller;

use RefugeeBundle\Entity\Benevole;
use RefugeeBundle\Entity\Refugee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;

class BenevoleController extends Controller
{
    public function addAction(Request $request)
    {
        $data = $request->getContent();
//deserialize data: création d'un objet 'Refugee' à partir des données json envoyées
        $benevole = $this->get('jms_serializer')->deserialize($data, 'RefugeeBundle\Entity\Benevole', 'json');

        $user = $request->get("id");
//ajout dans la base
        $em = $this->getDoctrine()->getManager();
        $array_projets=$this->getDoctrine()->getRepository(User::class)->findById($user);
        if($array_projets!=NULL) {
            $one_projet_object = $array_projets[0];
            //this object will be passed to the setProjet() method as a parameter
            //by this way we can set the last attribute af our 'Etudiant' which is the 'projet'
            $benevole->setUser($one_projet_object);
            //we get our entity manager
            $em->persist($benevole);
            //flush execute the query insert into...
            $em->flush();
            return new Response('Benevole ajouté avec succès');

        }
        return new Response($user);
    }

    public function getAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $benevole = $em->getRepository(Benevole::class)->findAll();
        $data = $this->get('jms_serializer')->serialize($benevole, 'json');
        $response = new Response($data);
        return $response;
    }

    public function getBenevoleAction(Benevole $benevole)
    {
        $data = $this->get('jms_serializer')->serialize($benevole, 'json');
        $response = new Response($data);
        return $response;
    }

    public function updateBenevoleAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $benevole = $em->getRepository(Benevole::class)->find($id);
        $data = $request->getContent();
        $newdata = $this->get('jms_serializer')->deserialize($data, 'RefugeeBundle\Entity\Benevole', 'json');
        $benevole->setNbRef($newdata->getNbRef());
        $benevole->setIsAvailable($newdata->getIsAvailable());
        $em->persist( $benevole);
        $em->flush();
        return new JsonResponse(["msg" => "success"], 200);
    }

    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $benevole=$em->getRepository(Benevole::class)->find($id);
        $em->remove($benevole);
        $em->flush();
        return new Response('Refugee supprimé avec succès') ;
    }

    public function getBenevoleByLocAction($location,$max){
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $entities = $this->getDoctrine()->getRepository(Benevole::class)->recherche($location,$max);
        $data = $this->get('jms_serializer')->serialize($entities, 'json');
        $response = new Response($data);
        return $response;
    }
    public function getcountBenAction(){
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $entities = $this->getDoctrine()->getRepository(Benevole::class)->countBen();
        $data = $this->get('jms_serializer')->serialize($entities, 'json');
        $response = new Response($data);
        return $response;
    }
    public function getBenbyUserAction(Request $request){
        $user = $request->get("user");
        $entities = $this->getDoctrine()->getRepository(Benevole::class)->findBy(["user"=> $user]);
        $data = $this->get('jms_serializer')->serialize($entities, 'json');
        $response = new Response($data);
        return $response;
    }

}
