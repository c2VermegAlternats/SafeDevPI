<?php

namespace DonationBundle\Controller;
use DonationBundle\Entity\Don;
use DonationBundle\Entity\Needs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DonController extends Controller
{
    public function addDonAction(Request $request)
    {
        //récupérer le contenu de la requête envoyé par l'outil postman
        $data = $request->getContent();
//deserialize data: création d'un objet 'Don' à partir des données json envoyées
        $don = $this->get('jms_serializer')->deserialize($data, 'DonationBundle\Entity\Don', 'json');


        $needs = $request->get("id");
//ajout dans la base
        $em = $this->getDoctrine()->getManager();
        $array_projets=$this->getDoctrine()->getRepository(Needs::class)->findById($needs);
        if($array_projets!=NULL) {
            $one_projet_object = $array_projets[0];
            //this object will be passed to the setProjet() method as a parameter
            //by this way we can set the last attribute af our 'Etudiant' which is the 'projet'
            $don->setNeeds($one_projet_object);
            //we get our entity manager
            $em->persist($don);
            //flush execute the query insert into...
            $em->flush();
            return new Response('don ajouté avec succès');

        }
        return new Response($needs);

    }

    public function updateDonAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository(Don::class)->find($id);
        $data = $request->getContent();
        $newdata = $this->get('jms_serializer')->deserialize($data, 'DonationBundle\Entity\Don', 'json');
        $don->setCategory($newdata->getCategory());
        $em->persist($don);
        $em->flush();
        return new JsonResponse(["msg" => "success"], 200);
    }

    public function deleteDonAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $don=$em->getRepository(Don::class)->find($id);
        $em->remove($don);
        $em->flush();
        return new Response('Don supprimé avec succès') ;
    }

    public function getDonAction(Don $don)
    {
        $data = $this->get('jms_serializer')->serialize($don, 'json');
        $response = new Response($data);
        return $response;
    }

    public function getAllDonAction()
    {
        $em = $this->getDoctrine()->getManager();
        $dons = $em->getRepository(Don::class)->findAll();
        $data = $this->get('jms_serializer')->serialize($dons, 'json');
        $response = new Response($data);
        return $response;
    }

}
