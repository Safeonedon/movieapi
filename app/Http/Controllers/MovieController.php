<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Genremovie;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class MovieController extends Controller
{
    //
    public static function get_trend(){
        $response=Movie::whereNot('deleted', 1)->orWhereNull('deleted')->with('genres')->orderBy('id','desc')->paginate(6);
        return  $response;
    }
    public static function insert_script(){

        $inDB=[
            'id',
            'adult',
            'backdrop_path',
            'belongs_to_collection',
            'budget',
            'homepage',
            'imdb_id',
            'original_language',
            'original_title',
            'overview',
            'popularity',
            'poster_path',
            'release_date',
            'revenue',
            'runtime',
            'status',
            'tagline',
            'title',
            'video',
            'vote_average',
            'vote_count',
        ];
        // call trendin movies
        $trend =Self::getCurl("trend" , 1);
        foreach ($trend['results'] as $key=>$data){
            // check if   movie exist and insert to db
           // return $data;
            $Movie=Movie::where('id',$data['id'])->count();

            if ($Movie == 0){
                $Movie_detail =Self::getCurl("movie" , $data['id']);
                //return $Movie_detail['budget'];
                $insert_movie=[];
                foreach ($Movie_detail as $key=>$item){
                    if (in_array($key,$inDB)){
                        if (is_array($item)){
                            $insert_movie[$key]=' ';
                        }else{
                            $insert_movie[$key]=$item;
                        }

                    }
                    if ($key == 'genres'){
                        foreach ($item as   $genre){
                            $check=Genre::where('id',$genre['id'])->count();
                            if($check>0){
                                Genremovie::insert([
                                    'movie_id'=>$data['id'],
                                    'genre_id'=>$genre['id']
                                ]);
                            }else{
                                $new_genre=Genre::create(
                                    [
                                        'id'=>$genre['id'],
                                        'name'=>$genre['name']
                                    ]
                                );
                                Genremovie::insert([
                                    'movie_id'=>$data['id'],
                                    'genre_id'=>$new_genre->id
                                ]);
                            }

                        }

                    }


                }
             //   return dd($data);
                $insert_movie['deleted']=0;
                if (count($insert_movie)>5){
                    Movie::insert($insert_movie);
                }

            }


        }
        return 'Success update';
       // return ;
    }
    public static function getCurl($type , $id){
        if ($type == 'trend'){
            $url='https://api.themoviedb.org/3/trending/all/day?api_key=c5351cb91bf420f8d6d006bb57908c03';
        }elseif($type == 'movie'){
            $url='https://api.themoviedb.org/3/movie/'.$id.'?api_key=c5351cb91bf420f8d6d006bb57908c03';
        }
        $response = Curl::to($url)
            ->get();
        return json_decode($response,TRUE);
    }
    public function destroy($id)
    {
        Movie::where('id',$id)->update(['deleted'=>1]);
        return redirect('/dashboard');
    }
   public function edit(Request $request,$id)
    {
        $inDB=[
            'id',
            'adult',
            'backdrop_path',
            'belongs_to_collection',
            'budget',
            'homepage',
            'imdb_id',
            'original_language',
            'original_title',
            'overview',
            'popularity',
            'poster_path',
            'release_date',
            'revenue',
            'runtime',
            'status',
            'tagline',
            'title',
            'video',
            'vote_average',
            'vote_count',
        ];
        $update=[];
        foreach ($request->all() as $key=>$data){
            if (in_array($key,$inDB)){
                $update[$key]=$data;
            }
        }
        Movie::where('id',$id)->update($update);
        return redirect('/movie/'.$id);
    }

}
