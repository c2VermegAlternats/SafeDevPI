<?php

namespace AssociationBundle\Controller;

use AssociationBundle\Entity\Association;
use AssociationBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use UserBundle\Entity\User;

class ReclamationController extends Controller
{
    public function addReclamationAction(Request $request)
    {
        $data = $request->getContent();
//deserialize data: création d'un objet 'Refugee' à partir des données json envoyées
        $reclamation = new Reclamation();
//ajout dans la base
        $user=$request->get('iduser');
        $association=$request->get('idasso');
        $em = $this->getDoctrine()->getManager();
        $array_users=$this->getDoctrine()->getRepository(User::class)->findById($user);
        $array_asso=$this->getDoctrine()->getRepository(Association::class)->findById($association);
        if($array_users!=NULL&& $array_asso!=NULL){
           $one_user_object = $array_users[0];
            $one_asso_object = $array_asso[0];
           $reclamation->setIdUser($one_user_object);
            $reclamation->setIdAssociation($one_asso_object);
            $em->persist($reclamation);
            $em->flush();
            $resp= new Response('Reclamation ajouté avec succès');
            $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
            return $resp;
        }

    }

    public function updateReclamationAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        $reclamation->setDescriptionc($request->get('description'));
        $this->getDoctrine()->getManager()->flush();
        $em->persist($reclamation);
        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($reclamation);
        $resp = new JsonResponse($formatted);
        $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $resp;

    }

    public function getAllReclamationsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository(Reclamation::class)->findAll();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($reclamations);


        $resp = new JsonResponse($formatted);
        $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $resp;

    }
    public function getReclamationAction(Reclamation $reclamation)
    {
        $data = $this->get('jms_serializer')->serialize($reclamation, 'json');
        $response = new Response($data);
        return $response;
    }


    public function deleteReclamationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation=$em->getRepository(Reclamation::class)->find($id);
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($reclamation);
        $em->remove($reclamation);
        $em->flush();
        $resp = new JsonResponse($formatted);
        $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $resp;
    }

}
