<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;

class UserController extends Controller
{
    public function addUserAction(Request $request)
    {
        //récupérer le contenu de la requête envoyé par l'outil postman
        $data = $request->getContent();
//deserialize data: création d'un objet 'Refugee' à partir des données json envoyées
        $user = $this->get('jms_serializer')->deserialize($data, 'UserBundle\Entity\User', 'json');
//ajout dans la base

        $em = $this->getDoctrine()->getManager();

        $em->persist($user);
        $em->flush();
        $response = new Response('Add Succeful');
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200/refugees');
        return $response;
    }

    public function updateUserAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $data = $request->getContent();
        $newdata = $this->get('jms_serializer')->deserialize($data, 'UserBundle\Entity\User', 'json');
        $user->setLogin($newdata->getLogin());
        $user->setPassword($newdata->getPassword());
        $user->setEmail($newdata->getEmail());
        $user->setRoleType($newdata->getRoleType());
        $em->persist($user);
        $em->flush();

        $response = new Response('Updated Successfully');
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200/refugees');
        return $response;
    }

    public function getUserAction(User $user)
    {
        $data = $this->get('jms_serializer')->serialize($user, 'json');
        $response = new Response($data);
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200/refugees');
        return $response;
    }

    public function getAllUsersAction()
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findAll();
        $data = $this->get('jms_serializer')->serialize($user, 'json');
        $response = new Response($data);
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200/refugees');
        return $response;
    }

    public function deleteUserAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository(User::class)->find($id);
        $em->remove($user);
        $em->flush();
        $response = new Response('Deleted Successfully');
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200/refugees');
        return $response;
    }

}
