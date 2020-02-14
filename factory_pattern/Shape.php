<?php

class Shape{

    public static function getShape(string $name, int $dimension)
    {
        switch ($name)
        {
            case 'circle':
                return new Circle($dimension);
                break;
            case 'square':
                return new Square($dimension);
                break;
            default:
                throw new Exception('Utilization not done');
                break;
        }
    }

}


class Circle
{
    protected $redius = 0;
    public function __construct(int $redius)
    {
        $this->redius = $redius;
    }

    public function getArea()
    {
        return $this->redius * $this->redius * pi();
    }
}

class Square
{
    protected $side = 0;
    public function __construct(int $side)
    {
        $this->side = $side;
    }

    public function getArea()
    {
        return $this->side * $this->side;
    }
}
