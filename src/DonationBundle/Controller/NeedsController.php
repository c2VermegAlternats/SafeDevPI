<?php

namespace DonationBundle\Controller;

use DonationBundle\Entity\Needs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NeedsController extends Controller
{
    public function addNeedsAction(Request $request)
    {
        //récupérer le contenu de la requête envoyé par l'outil postman
        $data = $request->getContent();
//deserialize data: création d'un objet 'Don' à partir des données json envoyées
        $needs = $this->get('jms_serializer')->deserialize($data, 'DonationBundle\Entity\Needs', 'json');
//ajout dans la base
        $em = $this->getDoctrine()->getManager();
        $em->persist($needs);
        $em->flush();
        return new Response('needs ajouté avec succès');
    }

    public function getNeedsValueAction(Request $request){
        $category = $request->get("category");
        $response=$this->getDoctrine()->getRepository(Needs::class)->getNeedsByCategory($category);
        return new JsonResponse(json_encode($response));
    }

    public function deleteNeedsAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $needs=$em->getRepository(Needs::class)->find($id);
        $em->remove($needs);
        $em->flush();
        return new Response('needs supprimé avec succès') ;
    }

    public function updateNeedsAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $needs = $em->getRepository(Needs::class)->find($id);
        $data = $request->getContent();
        $newdata = $this->get('jms_serializer')->deserialize($data, 'DonationBundle\Entity\Needs', 'json');
        $needs->setCategory($newdata->getCategory());
        $needs->setIsDone($newdata->isDone());

        $em->persist($needs);
        $em->flush();
        return new JsonResponse(["msg" => "success"], 200);


    }

    public function getNeedsAction(Needs $needs)
    {
        $data = $this->get('jms_serializer')->serialize($needs, 'json');
        $response = new Response($data);
        return $response;
    }

    public function getAllNeedsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $needs = $em->getRepository(Needs::class)->findAll();
        $data = $this->get('jms_serializer')->serialize($needs, 'json');
        $response = new Response($data);
        return $response;
    }

    public function getNeedAction(){
        $response=$this->getDoctrine()->getRepository(Needs::class)->getNeed();
        $data = $this->get('jms_serializer')->serialize($response, 'json');

        return new Response($data);
    }

}
