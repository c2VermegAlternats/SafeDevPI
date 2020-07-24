<?php

namespace RefugeeBundle\Controller;

use RefugeeBundle\Entity\Benevole;
use RefugeeBundle\Entity\Refugee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RefugeeController extends Controller
{
    public function addAction(Request $request)
    {
        $data = $request->getContent();
//deserialize data: création d'un objet 'Refugee' à partir des données json envoyées
        $refugee = $this->get('jms_serializer')->deserialize($data, 'RefugeeBundle\Entity\Refugee', 'json');

        $benevole = $request->get("id");
//ajout dans la base
        $em = $this->getDoctrine()->getManager();
        $array_projets=$this->getDoctrine()->getRepository(Benevole::class)->findById($benevole);
        if($array_projets!=NULL) {
            $one_projet_object = $array_projets[0];
            //this object will be passed to the setProjet() method as a parameter
            //by this way we can set the last attribute af our 'Etudiant' which is the 'projet'
            $refugee->setBenevole($one_projet_object);
            //we get our entity manager
            $em->persist($refugee);
            //flush execute the query insert into...
            $em->flush();
            return new Response('don ajouté avec succès');

        }
        return new Response($benevole);

    }

    public function getAllRefugeesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $Refugees = $em->getRepository(Refugee::class)->findAll();
        $data = $this->get('jms_serializer')->serialize($Refugees, 'json');
        $response = new Response($data);
        return $response;
    }

    public function getRefugeeAction(Refugee $refugee)
    {
        $data = $this->get('jms_serializer')->serialize($refugee, 'json');
        $response = new Response($data);
        return $response;
    }

    public function updateRefugeeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $refugee = $em->getRepository(Refugee::class)->find($id);
        $data = $request->getContent();
        $newdata = $this->get('jms_serializer')->deserialize($data, 'RefugeeBundle\Entity\Refugee', 'json');
        $refugee->setIsComplete($newdata->getIsComplete());
        $em->persist($refugee);
        $em->flush();
        return new JsonResponse(["msg" => "success"], 200);
    }
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $refugee=$em->getRepository(Refugee::class)->find($id);
        $em->remove($refugee);
        $em->flush();
        return new Response('Refugee supprimé avec succès') ;
    }
    public function getCountRefAction($location){
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $entities = $this->getDoctrine()->getRepository(Refugee::class)->countBen($location);
        $data = $this->get('jms_serializer')->serialize($entities, 'json');
        $response = new Response($data);
        return $response;
    }
    public function sumByNeedsAction(){
        $em = $this->container->get("doctrine.orm.default_entity_manager");
        $entities = $this->getDoctrine()->getRepository(Refugee::class)->sumByNeeds();
        $data = $this->get('jms_serializer')->serialize($entities, 'json');
        $response = new Response($data);
        return $response;
    }
}
