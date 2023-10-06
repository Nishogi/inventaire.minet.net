<?php

namespace App\Controller\Admin;

use App\Entity\Equipment;
use App\Entity\Room;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InventaireController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(EquipmentCrudController::class)->generateUrl();
        return $this->redirect($url);

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Inventaire | MiNET');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Equipment', 'fas fa-list', Equipment::class);
        yield MenuItem::linkToCrud('Room', 'fas fa-list', Room::class);
    }
}
