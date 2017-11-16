<?php

namespace AppBundle\Figures;

use AppBundle\Figures\Vertex;
use AppBundle\Interfaces\CubeInterface;
use AppBundle\Interfaces\VolumeIntersectionInterface;

class Cube implements CubeInterface, VolumeIntersectionInterface {

    private $edge;
    private $vertex;

    public function __construct(Vertex $vertex, $edge) {
        $this->vertex = $vertex;
        $this->edge = $edge;
    }

    public function getVertex() {
        return $this->vertex;
    }

    public function getOppositeVertex() {
        return new Vertex($this->vertex->getX() + $this->edge, $this->vertex->getY() + $this->edge, $this->vertex->getZ() + $this->edge);
    }

    public function volume($x, $y, $z) {
        return $x * $y * $z;
    }

    public function volumeIntersection($cube) {
        $maxVertex = $this->vertex->getVertexMax($cube->getVertex());

        $oppositeVertex = $this->getOppositeVertex();
        $oppositeVertexCube = $cube->getOppositeVertex();
        $minVertex = $oppositeVertex->getVertexMin($oppositeVertexCube);

        $edgeX = $minVertex->getX() - $maxVertex->getX();
        $edgeY = $minVertex->getY() - $maxVertex->getY();
        $edgeZ = $minVertex->getZ() - $maxVertex->getZ();

        return $this->volume($edgeX, $edgeY, $edgeZ);
    }

}
