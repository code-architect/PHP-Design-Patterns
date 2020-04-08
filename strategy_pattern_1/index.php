<?php
// strategy interface
interface PaymentGatWay{
    public function pay($amount);
}

//concrete strategy
class PayByCcDc implements PaymentGatWay
{
    public function pay($amount)
    {
        echo "Paid $amount via Debit/Credit card";
    }
}

class PayByPayPal implements PaymentGatWay
{
    public function pay($amount)
    {
        echo "Paid $amount via PayPal account";
    }
}

// context class
class Order{
    private $paymentGatWay;

    public function setPaymentGateway(PaymentGatWay $paymentGatWay)
    {
        $this->paymentGatWay = $paymentGatWay;
    }

    public function pay($amount)
    {
        $this->paymentGatWay->pay($amount);
    }
}

//client code
$order = new Order();
$order->setPaymentGateway(new PayByPayPal());
$order->pay(120);