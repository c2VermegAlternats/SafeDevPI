<?php

namespace RefugeeBundle\Controller;

use RefugeeBundle\Entity\Refugee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RefugeeController extends Controller
{
    public function addAction(Request $request)
    {
        //récupérer le contenu de la requête envoyé par l'outil postman
        $data = $request->getContent();
//deserialize data: création d'un objet 'Refugee' à partir des données json envoyées
        $refugee = $this->get('jms_serializer')->deserialize($data, 'RefugeeBundle\Entity\Refugee', 'json');
//ajout dans la base
        $em = $this->getDoctrine()->getManager();
        $em->persist($refugee);
        $em->flush();
        return new Response('Refugee ajouté avec succès');
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
        $refugee->setLocation($newdata->getLocation());
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
}
