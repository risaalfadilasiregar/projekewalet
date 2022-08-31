<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();

        $data =[
            'status' => true,
            'message' => 'Data Post JSON',
            'data'=>  $post
        ];
        return response()->json($data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'judul'=>'required',
            'isi'=>'required'
        ]);

        if($validator->fails()){
            $data = [
                'status'=>false,
                'message'=>$validator->errors()
            ];
            return response()->json($data,500);
        }

        $post = Post::create($input);

        $data = [
            'status'=>true,
            'message'=>"Data Berhasil Di Tambahkan",
            'data'=>$post
        ];
        return response()->json($data,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if(is_null($post)){

            $data = [
                'status'=>false,
                'message'=>"Data Not Found"
            ];

            return response()->json($data,404);
        }

        $data = [
            'status'=>true,
            'message'=>"Data JSON by Id",
            'data'=>$post
        ];

            return response()->json($data,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if(is_null($post)){

            $data = [

                'status'=> false,
                'message'=>"Data Not Found"
            ];
            return response()->json($data,500);
        }

        $validator = Validator::make($request->all(), [
            'judul'=>'required',
            'isi'=>'required'
        ]);

        if($validator->fails()){

            $data = [
                'status' => false,
                'massage' => $validator->errors()
            ];
            return response()->json($data,204);
        }

        $post->update($request->all());

        $data = [
            'status'=>true,
            'message'=>"Data Berhasil Diubah",
            'data'=>$post
        ];

        return response()->json($data,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if(is_null($post)){

            $data = [

                'status'=> false,
                'message'=>"Data Not Found"
            ];
            return response()->json($data,404);
        }

        $post->delete();
        $data = [
            'status'=>true,
            'message'=>"Data Berhasil Dihapus",
            'data'=>[]
        ];

        return response()->json($data,200);
    }
}
