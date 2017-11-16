<?php

namespace AppBundle\Figures;

use AppBundle\Figures\Cube;
use AppBundle\Figures\Vertex;
use AppBundle\Interfaces\VolumeIntersectionInterface;

class CubeVolumeIntersection {

    public static function getVolumeIntersection($param1, $param2) {
        $vertex1 = new Vertex($param1['x'], $param1['y'], $param1['z']);
        $vertex2 = new Vertex($param2['x'], $param2['y'], $param2['z']);
       
        $cube1 = new Cube($vertex1, $param1['edge']); //array(Vertex, edge)
        $cube2 = new Cube($vertex2, $param2['edge']); //array(Vertex, edge)
        
        if ($cube1 instanceof VolumeIntersectionInterface) {
            return $cube1->volumeIntersection($cube2);
        } else {
            throw new \Exception(' CubeVolumeIntersection  instanceof Invalid!!');
        }
    }

}
