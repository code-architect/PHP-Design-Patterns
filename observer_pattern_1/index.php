<?php

// subscriber interface
interface Subscriber {
    public function update($postId);
}

// publisher
class HealthyMe {
    private $post;
    private $subscribers = [];

    public function registerSubscriber(Subscriber $subscriber)
    {
        $this->subscribers[] = $subscriber;
        echo "subscriber added <br>\n";
    }

    public function notifySubscriber()
    {
        foreach ($this->subscribers as $subscriber)
        {
            $subscriber->update($this->post);
        }
    }

    public function publishPost($post)
    {
        $this->post = $post;
        $this->notifySubscriber();
    }
}

// concrete subscriber
class FoodUpdaterSubscriber implements Subscriber
{
    public function update($postId)
    {
        echo "New Post with Id: $postId published <br>";
    }
}

$publisher = new HealthyMe();
$subscriber = new FoodUpdaterSubscriber();

$publisher->registerSubscriber($subscriber);
$publisher->publishPost(12);