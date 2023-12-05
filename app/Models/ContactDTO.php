<?php

namespace App\Models;

class ContactDTO {
    public function __construct(
        public string $name = '',
        public string $email = '',
        public string $message = '',
    )
    {
        
    }
}