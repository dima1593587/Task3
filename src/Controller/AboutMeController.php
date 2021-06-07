<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\View\AboutMe\AboutMePageView;
use App\Modules\AboutMe\App\HobbieService;

class AboutMeController extends AbstractController
{
    public function aboutMePage(HobbieService $hobbieService)
    {
        $hobbies = $hobbieService->getHobbies();

        $aboutMePageView = new AboutMePageView();

        return $this->render('about_me/about_me.html.twig', [
            'array' => $aboutMePageView->buildParams($hobbies),
        ]);
    }
}