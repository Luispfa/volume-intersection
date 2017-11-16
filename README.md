# volume-intersection with Symfony 2.8.1

A Symfony project created on November 15, 2017, 8:52 pm.

STEPS 
========

$ sudo chmod -R 777 app/cache/ app/logs/

$ composer install

$ app/console server:run

$ curl -X POST --data @src/AppBundle/Json/params.json -w "\n" http://localhost:8000/cube

You can change cubes parameters in "params.json"

{
    "cube1": {
        "x": 1,
        "y": 1,
        "z": 1,
        "edge": 2
    }
    ,
    "cube2": {
        "x": 2,
        "y": 2,
        "z": 2,
        "edge": 2
    }
}