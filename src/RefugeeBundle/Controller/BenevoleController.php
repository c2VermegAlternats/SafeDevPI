<?php

namespace RefugeeBundle\Controller;

use RefugeeBundle\Entity\Benevole;
use RefugeeBundle\Entity\Refugee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BenevoleController extends Controller
{
    public function addAction(Request $request)
    {
        $data = $request->getContent();
//deserialize data: création d'un objet 'Benevole' à partir des données json envoyées
        $benevole = $this->get('jms_serializer')->deserialize($data, 'RefugeeBundle\Entity\Benevole', 'json');
//ajout dans la base
        $em = $this->getDoctrine()->getManager();
        $em->persist($benevole);
        $em->flush();
        return new Response('Benevole ajouté avec succès');
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
        $benevole->setAge($newdata->getAge());
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

}
