<?php

namespace App\View\Components\Message;

use Illuminate\View\Component;

class Alert extends Component
{

    public $message;
    public $type;

    public function __construct($message, $type)
    {
        $this->message = $message;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.message.alert');
    }
}
