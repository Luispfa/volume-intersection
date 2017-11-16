<?php

namespace AppBundle\Figures;

class Vertex {

    private $x;
    private $y;
    private $z;

    public function __construct($x,$y,$z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    
     public function getVertexMax(Vertex $vertex)
    {
        $x = ($this->x > $vertex->getX()) ? $this->x : $vertex->getX();
        $y = ($this->y > $vertex->getY()) ? $this->y : $vertex->getY();
        $z = ($this->z > $vertex->getZ()) ? $this->z : $vertex->getZ();
        return new Vertex($x, $y, $y);
    }

    /**
     * @param Coordinate $coordinate
     * @return Coordinate
     */
    public function getVertexMin(Vertex $vertex)
    {
        $x = ($this->x < $vertex->getX()) ? $this->x : $vertex->getX();
        $y = ($this->y < $vertex->getY()) ? $this->y : $vertex->getY();
        $z = ($this->z < $vertex->getZ()) ? $this->z : $vertex->getZ();
        return new Vertex($x, $y, $z);
    }


    public function getX()
    {
        return $this->x;
    }


    public function getY()
    {
        return $this->y;
    }

    public function getZ()
    {
        return $this->z;
    }

}
