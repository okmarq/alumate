<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => "required",
            "content" => "required",
            "photo" => 'nullable|image|mimes:jpeg,jpg,png,bmp,gif,svg',
//            "video" => 'nullable|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts',
            "video" => 'nullable|file|mimetypes:video/mp4',
//            "video" => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            "status" => "nullable|in:0,1",
            "isPromoted" => "nullable|in:false,true",
            "reposted" => "nullable",
            "reposterName" => "nullable",
            "user_id" => "required|exists:users,id",
            "category_id" => "required|exists:categories,id",
            "group_id" => "nullable|exists:groups,id",
            "school_id" => "nullable|exists:schools,id",
        ];
    }
}
