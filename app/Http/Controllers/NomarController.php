<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Adminuser;
use DB;

class NomarController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function floor()
    {
        return view('floor');
    }

    public function cast_list()
    {
        return view('cast_list');
    }

    public function cast_profile()
    {
        return view('cast_profile');
    }

    public function news_list()
    {
        return view('news_list');
    }

    public function access()
    {
        return view('access');
    }

    public function recruit()
    {
        return view('recruit');
    }

    public function news_list_admin()
    {
        $news_list = News::orderBy('updated_at', 'desc')->paginate(10);
        return view('news_list_admin', [
            'news_list' => $news_list,
        ]);
    }

    public function news_regist()
    {
        return view('news_regist');
    }

    public function news_store(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content.required' => '内容を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $news = new News();

        $request = $request->all();
        $fill_data = [
            'title' => $request['title'],
            'content' => $request['content'],
            'release_flg' => $request['release'] == 1 ? 1 : 0,
            'notice_date' => date('Y/m/d'),
        ];

        DB::beginTransaction();
        try {
            $news->fill($fill_data)->save();
            DB::commit();
            return redirect()->to('admin/news_list')->with('message', '登録が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function news_edit($id)
    {
        $news = News::find($id);
        return view('news_edit', [
            'news' => $news,
        ]);
    }

    public function news_update(Request $request)
    {
        $rules = [
            'title' => ['max:20', 'required'],
            'content' => 'required',
        ];

        $messages = [
            'title.max' => 'タイトルは20文字以下でお願いします',
            'title.required' => 'タイトルを入力してください',
            'content.required' => '内容を入力してください',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $request = $request->all();
        $news = News::find($request['id']);

        $fill_data = [
            'title' => $request['title'],
            'content' => $request['content'],
            'release_flg' => $request['release'] == 1 ? 1 : 0,
            'notice_date' => date('Y/m/d'),
        ];

        DB::beginTransaction();
        try {
            $news->update($fill_data);
            DB::commit();
            return redirect()->to('admin/news_list')->with('message', 'お知らせの更新が完了いたしました。');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function news_delete($id)
    {
        DB::beginTransaction();
        try {
            News::where('id', $id)->delete();
            DB::commit();
            return redirect()->route('admin.news_list')->with('message', 'お知らせ情報を削除しました');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public function login_admin(Request $request)
    {
        $admin_user = Adminuser::where('login_id', $request->login_id)->first();
        if (isset($admin_user)) {
            if ($request->password == $admin_user->password) {
                // セッション
                session(['login_id' => $admin_user->login_id]);
                return redirect('club-nomar/admin/news_list'); 
            }
        }

        return redirect('club-nomar/admin/login')->with(['login_error' => 1]);
    }

    public function logout_admin()
    {
        session()->forget('login_id');
        return redirect('admin/login');
    }

}
