<?php

namespace App\Http\Requests;

class PostUpdateRequest extends PostCreateRequest
{
    public function authorize()
    {
        return true;
    }
}