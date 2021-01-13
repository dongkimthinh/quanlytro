<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;

use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetailNewsController extends Controller
{
    public function detailNews($id){
        $news = NewsModel::where('id_tin', $id)->first();
        return view('pages.detail-news',compact('news'));
    }

}
