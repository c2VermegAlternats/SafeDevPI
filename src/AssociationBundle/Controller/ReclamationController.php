<?php

namespace AssociationBundle\Controller;

use AssociationBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ReclamationController extends Controller
{
    public function addReclamationAction(Request $request)
    {
        $data = $request->getContent();
//deserialize data: création d'un objet 'Refugee' à partir des données json envoyées
        $association = $this->get('jms_serializer')->deserialize($data, 'AssociationBundle\Entity\Reclamation', 'json');
//ajout dans la base
        $em = $this->getDoctrine()->getManager();
        $em->persist($association);
        $em->flush();
        $resp= new Response('Reclamation ajouté avec succès');
        $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $resp;
    }

    public function updateReclamationAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        $reclamation->setNombreRec($request->get('nombreRec'));
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

    public function deleteReclamationAction()
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
