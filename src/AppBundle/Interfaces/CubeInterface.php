<?php

namespace AppBundle\Interfaces;

interface CubeInterface {

    public function getVertex();

    public function getOppositeVertex();

    public function volume($x, $y, $z);
}
