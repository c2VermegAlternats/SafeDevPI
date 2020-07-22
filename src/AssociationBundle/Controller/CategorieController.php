<?php

namespace AssociationBundle\Controller;

use AssociationBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CategorieController extends Controller
{
    public function addCategorieAction(Request $request)
    {
        $data = $request->getContent();
//deserialize data: création d'un objet 'Refugee' à partir des données json envoyées
        $association = $this->get('jms_serializer')->deserialize($data, 'AssociationBundle\Entity\Categorie', 'json');
//ajout dans la base
        $em = $this->getDoctrine()->getManager();
        $em->persist($association);
        $em->flush();
        $resp= new Response('Categorie ajouté avec succès');
        $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $resp;
    }

    public function updateCategorieAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Categorie::class)->find($id);

        $categorie->setName($request->get('name_categorie'));

        $em->persist($categorie);
        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($categorie);
        $resp = new JsonResponse($formatted);
        $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $resp;
    }

    public function getAllCategorieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Categorie::class)->findAll();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($categorie);
        $resp = new JsonResponse($formatted);
        $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $resp;
    }

    public function deleteCategorieAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie=$em->getRepository(Categorie::class)->find($id);
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($categorie);
        $em->remove($categorie);
        $em->flush();
        $resp = new JsonResponse($formatted);
        $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
        return $resp;
    }

}
