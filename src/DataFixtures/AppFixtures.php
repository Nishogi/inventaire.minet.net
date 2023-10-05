<?php

namespace App\DataFixtures;

class AppFixtures extends Fixture
{
    // defines reference names for instances of Rooms
    private const BAGAGERIE = 'bagagerie';
    private const LOCAL = 'local';
    private const SALLE_SERVEUR_FOYER = 'salle serveur foyer';
    private const SALLE_SERVEUR_U1 = 'salle serveur U1';

    /**
     * Generates initialization data for rooms :
     * @return \\Generator
     */

    private static function roomDataGenerator()
    {
        yield ["Grande salle de stockage localisée au sous-sol du foyer", self::BAGAGERIE];
        yield ["Notre bien-aimé (trop petit) local qui mériterait bien une rénovation (et une extension)", self::LOCAL];
        yield ["Salle serveur du foyer, la plupart de nos serveurs y sont en activité", self::SALLE_SERVEUR_FOYER];
        yield ["Salle serveur au RDC du U1 où sont stockés notre routeur et quelques serveurs", self::SALLE_SERVEUR_U1];
    }

    /**
     * Generates initialization data for equipment :
     * @return \\Generator
     */
    private static function equipmentDataGenerator()
    {
        yield [self::BAGAGERIE, "Tonnelle 3x3", "Location", "Tente de réception 3m x 3m"];
        yield [self::BAGAGERIE, "Tonnelle 3x6", "Location", "Tente de réception 3m x 6m"];
        yield [self::LOCAL, "Testeur de câbles", "Outils", "Testeur de câbles RJ45"];
        yield [self::SALLE_SERVEUR_FOYER, "Sirius", "Serveur", "Serveur de production"];
        yield [self::SALLE_SERVEUR_U1, "Vega", "Serveur", "Serveur de production"];
        yield [self::SALLE_SERVEUR_U1, "Routeur MiNET", "Routeur", "Routeur central de MiNET"];

    }

    public function load(ObjectManager $manager)
    {
        $manager->getRepository(Equipment::class);

        foreach (self::roomDataGenerator() as [$description, $roomReference]) {
            $room = new Room();
            $room->setDescription($description);
            $manager->persist($room);
            $manager->flush();

            // Once the Room instance has been saved to DB
            // it has a valid Id generated by Doctrine, and can thus
            // be saved as a future reference
            $this->addReference($roomReference, $room);
        }

        foreach (self::equipmentDataGenerator() as [$roomReference, $name, $type, $description]) {
            $equipment = new Equipment();
            $equipment->setName($name);
            $equipment->setType($type);
            $equipment->setDescription($description);
            // Retrieve the One-side instance of Room from its reference name
            $room = $this->getReference($roomReference);
            // Add the Many-side Equipment to its containing room
            $room->addEquipment($equipment);

            // Requir that the ORM\OneToMany attribute on Room::equipment has "cascade: ['persist']"
            $manager->persist($room);
        }
        $manager->flush();
    }
}