<?php

namespace App\Controller;

use App\Model\Activity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActivityController extends AbstractController
{
    /**
     * @Route("/activity", name="activity")
     */
    public function activity(): Response
    {
        $activityModel = new Activity();
        $activity = $activityModel->getActivity();

        return $this->render('/activity/activity.html.twig', [
            "activity" => $activity
        ]);
    }
}
