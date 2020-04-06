<?php
// Product Interface
interface Transport
{
    public function ready(): void;
    public function dispatch(): void;
    public function deliver(): void;
}
//----------------------------------------------------------------------------------------------------------------//

// Creator Class with the factory method
abstract class Courier
{
    abstract function getCourierTransport(): Transport;

    public function sendCourier()
    {
        $transport = $this->getCourierTransport();
        $transport->ready();
        $transport->dispatch();
        $transport->deliver();
    }
}
//----------------------------------------------------------------------------------------------------------------//

// Concrete Product providing implementations of product Interface
class PlaneTransport implements Transport
{

    public function ready(): void
    {
        echo "ready from Plane <br>";
    }

    public function dispatch(): void
    {
        echo "dispatch from Plane <br>";
    }

    public function deliver(): void
    {
        echo "deliver from Plane <br>";
    }
}
//----------------------------------------------------------------------------------------------------------------//

// Concrete Product providing implementations of product Interface
class TruckTransport implements Transport
{

    public function ready(): void
    {
        echo "ready from truck <br>";
    }

    public function dispatch(): void
    {
        echo "dispatch from truck <br>";
    }

    public function deliver(): void
    {
        echo "deliver from truck <br>";
    }
}
//----------------------------------------------------------------------------------------------------------------//

// The concrete Creator override the factory method and change the object type
class AirCourier extends Courier
{
    function getCourierTransport(): Transport
    {
        return new PlaneTransport();
    }
}
// The concrete Creator override the factory method and change the object type
class GroundCourier extends Courier
{
    function getCourierTransport(): Transport
    {
        return new TruckTransport();
    }
}

// Client code works with an instance of concrete creator
function deliverCourier(Courier $courier)
{
    $courier->sendCourier();
}


deliverCourier(new GroundCourier());