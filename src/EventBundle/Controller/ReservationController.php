<?php

namespace EventBundle\Controller;

use EventBundle\Entity\Event;
use EventBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;

class ReservationController extends Controller
{
    public function addReservationAction(Request $request)
    {
        $data = $request->getContent();
//deserialize data: création d'un objet 'Reservation' à partir des données json envoyées
        $reservation = $this->get('jms_serializer')->deserialize($data, 'EventBundle\Entity\Reservation', 'json');
//ajout dans la base
        //$user = $request->get('iduser');
        $event = $request->get('idevent');
        $em = $this->getDoctrine()->getManager();
       // $array_users = $this->getDoctrine()->getRepository(User::class)->findById($user);
        $array_events = $this->getDoctrine()->getRepository(Event::class)->findById($event);

        if ($array_events != NULL) {
            //$one_user_object = $array_users[0];
            $one_event_object = $array_events[0];
            //$reservation->setIdUser($one_user_object);
            $reservation->setIdEvent($one_event_object);
            $em->persist($reservation);
            $em->flush();
            $resp = new Response('Reserved!');
            $resp->headers->set('Access-Control-Allow-Origin', 'http://localhost:4200');
            return $resp;
        }
    }
    public function getResAction(Request $request){
        $iduser = $request->get("iduser");
        $idevent = $request->get("idevent");
        $nbr = $this->getDoctrine()->getRepository(Reservation::class)->countRes($iduser, $idevent);
        $data = $this->get('jms_serializer')->serialize($nbr, 'json');
       return new Response($data);
      //  return new JsonResponse($data);

    }
}
