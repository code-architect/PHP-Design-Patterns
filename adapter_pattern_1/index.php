<?php

// Target client
interface Share
{
    // Request
    public function shareData();
}

// Adaptee Service
class WhatsAppShare
{
    public function whatsapp(string $string)
    {
        echo "Share data via WhatsApp: ". $string."<br>\n";
    }
}

// Adapter
class WhatsAppShareAdapter implements Share
{
    private $whatsapp;
    private $data;

    public function __construct(WhatsAppShare $whatsapp, string $data)
    {
        $this->whatsapp = $whatsapp;
        $this->data = $data;
    }

    public function shareData()
    {
        $this->whatsapp->whatsapp($this->data);
    }
}

class FacebookAppShareAdapter implements Share
{
    private $whatsapp;
    private $data;

    public function __construct(WhatsAppShare $whatsAppShare, $data)
    {
        $this->whatsapp = $whatsAppShare;
        $this->data = $data;
    }

    public function shareData()
    {
        $this->whatsapp->whatsapp($this->data);
    }
}

// client code
function clientCode(Share $share)
{
    $share->shareData();
}

$wa = new WhatsAppShare();
$waShare = new WhatsAppShareAdapter($wa, 'hello world');
$waFacebook = new FacebookAppShareAdapter($wa, 'hello world I am facebook');

clientCode($waShare);
clientCode($waFacebook);