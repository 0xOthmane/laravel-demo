<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Models\ContactDTO;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(ContactRequest $request){
        
        $data = new ContactDTO(name:'John', email:'john@doe.fr', message: 'Hello world');
        // return new ContactResource($data);
        return ContactResource::collection($data, $data);
    }
}
