<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{

    public function message() {
        return [
            'title.required' => 'Sarlavha yozish majburiy',
            'content.required' => 'qisqa malumot yozish majburiy',
            'short_content.required' => 'toliq malumot yozish majburiy',
            'photo.required' => 'file kiritish majburiy',
        ];
    }
    // public function attributes() {return ['title' => "sarlavha"];}
  
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=> 'required|max:255',
            'content'=> 'required',
            'short_content'=> 'required',
            'discount'=> 'required',
            'deadline'=> 'required',
            'photo'=> 'nullable|image',
        ];
    }
}
