<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Persistence\ManagerRegistry;

use App\Entity\Room;

class RoomController extends AbstractController
{
    #[Route('/room', name: 'app_room')]
    public function index(ManagerRegistry $managerRegistry): Response
    {
        $rooms = $managerRegistry->getRepository(Room::class)->findAll();
        return $this->render('room/index.html.twig', [
            'rooms' => $rooms,
        ]);
    }

    /**
     * Show a Room
    *
    * @param Integer $id (note that the id must be an integer)
    **/


    #[Route('/room/{id}', name: 'Room_show', requirements: ['id' => '\d+'])]
    public function show(int $id, ManagerRegistry $managerRegistry): Response
    {
        $room = $managerRegistry->getRepository(Room::class)->find($id);
        $equipments = $room->getEquipment();

        if (!$room) {
            throw $this->createNotFoundException(
                'No room found for id '.$id
            );
        }

        return $this->render('room/room.html.twig', [
            'room_name' => $room,
            'equipments' => $equipments,
        ]);
    }
}