<?php

namespace EventBundle\Controller;

use EventBundle\Entity\Event;
use EventBundle\Entity\EventCategory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    public function addEventAction(Request $request)
    {
        //récupérer le contenu de la requête envoyé par l'outil postman
        $data = $request->getContent();
        //deserialize data: création d'un objet 'Event' à partir des données json envoyées
        $event = $this->get('jms_serializer')->deserialize($data, 'EventBundle\Entity\Event', 'json');
        $category = $request->get("id");
        //ajout dans la base
        $em = $this->getDoctrine()->getManager();
            //this object will be passed to the setProjet() method as a parameter
            //by this way we can set the last attribute af our 'Etudiant' which is the 'projet'

            //we get our entity manager
            $em->persist($event);
            //flush execute the query insert into...
            $em->flush();
            $response = new Response("Event added successfully");
            $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200/refugees');
            return $response;
    }

    public function deleteEventAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository(Event::class)->find($id);
        $em->remove($event);
        $em->flush();
        return new Response('Event deleted successfully') ;
    }

    public function updateEventAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->find($id);
        $data = $request->getContent();
        $newdata = $this->get('jms_serializer')->deserialize($data, 'EventBundle\Entity\Event', 'json');
        $event->setName($newdata->getName());
        $em->persist($event);
        $em->flush();
        return new JsonResponse(["msg" => "success"], 200);
    }
    public function updateReservationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->find($id);
        $newcapacity = $event->getCapacity();
        $newreserved = $event->getReservedPlaces();
        $event->setCapacity($newcapacity-1);
        $event->setReservedPlaces($newreserved+1);
        $em->persist($event);
        $em->flush();
        return new JsonResponse(["msg" => "success"], 200);
    }

    public function listEventAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository(Event::class)->findAll();
        $data = $this->get('jms_serializer')->serialize($events, 'json');
        $response = new Response($data);
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200/refugees');
        return $response;
    }

    public function searchEventAction(Event $event)
    {
        $data = $this->get('jms_serializer')->serialize($event, 'json');
        $response = new Response($data);
        return $response;
    }

}
