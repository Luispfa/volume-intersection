<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Figures\CubeVolumeIntersection;

class DefaultController extends Controller {

    /**
     * @Route("/cube", name="cube")
     */
    public function cubeAction(Request $request) {
        $post = json_decode($request->getContent(), true);
        $param1 = $post['cube1'];
        $param2 = $post['cube2'];

        $volume = CubeVolumeIntersection::getVolumeIntersection($param1, $param2);

        return new JsonResponse(array("volume" => $volume));
    }

    /**
     * @Route("/sphera", name="sphera")
     */
    public function spheraAction(Request $request) {
        //implementation
    }

}
