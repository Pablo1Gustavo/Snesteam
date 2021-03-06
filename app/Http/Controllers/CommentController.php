<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateComment;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Gate;

class CommentController extends Controller
{
    public function index_admin(){
        $search = request('search');
        $comments = $search ?
        Comment::where([['content','like','%'.$search.'%']])->get()
        : Comment::paginate(10);

        return view('admin.comments.index',['comments'=>$comments,'search'=>$search]);
    }

    /*------------------------------------------*/

    public function store($game_id,StoreUpdateComment $request){
        $user_id = Auth::user()->id;

        if(Comment::where([['user_id',$user_id],['game_id',$game_id]])->exists())
            return redirect()->back()->with('msg_error','Você já comentou neste jogo!');

        $comment = new Comment;

        $comment->user_id = $user_id;
        $comment->game_id = $game_id;
        $comment->content = $request->comment;
        $comment->liked = $request->liked=='like'? 1 : 0;
        
        $comment->save();
        return redirect()->route('games.details',$game_id)->with('msg','Comentário criado com sucesso!');
    }

    /*------------------------------------------*/

    public function destroy(Comment $comment){
        if(Gate::allows('destroyComment',$comment)){
            $commentDestroy = Comment::findOrFail($comment->id);
            $commentDestroy->delete();
            return redirect()->back()->with('msg','Comentário deletado com sucesso!');
        }else{
            return redirect()->back()->with('msg_error','Você não pode apagar esse comentário!');
        }
        
    }
}
