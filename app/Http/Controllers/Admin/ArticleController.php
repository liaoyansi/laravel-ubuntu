<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $data['articles'] = Article::orderBy('id','desc')->paginate(5);
        return view('admin.article.index')->withArticles($data['articles']);
    }

    public function create(){
        $article = new Article();
        return view('admin.article.create',[
            'article'=>$article
        ]);
    }

    public function store(Request $request){

        $validator = Validator::make($request->input(),[
            'Article.title' => 'required|max:20',
            'Article.body' => 'required'
        ],[
            'required' => ':attribute 不能为空',
            'max' => ':attribute 长度不符合要求',
        ],[
            'Article.title'=> '标题',
            'Article.body' => '内容'
        ]);

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = $request->input('Article');
        $data['user_id'] = $request->user()->id;

        if (Article::create($data)) {
            return redirect('admin/article')->with('success','添加成功');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }


    public function destroy($id){
        $article = Article::find($id);
        if($article->delete()) {
            return redirect('admin/article')->with('success','删除成功-'.$id);
        }else {
            return redirect('admin/article')->with('error','删除失败-'.$id);
        }

    }
}
