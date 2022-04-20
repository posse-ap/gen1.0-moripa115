<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function show_admin()
    {
        $items = DB::table('users')
            ->get();


        return view('show_admin', ['items' => $items]);
    }
    public function add(Request $request)
    {
        
        // dd($request->password);
        DB::table('users')
        ->insert([
            'name' => $request->name,
            'email' => $request->mail,
            'password' => $request->password,
        ]);
        
        return redirect('/admin/admin');
    }
    
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        
        // リダイレクト
        return redirect('/admin/admin');
    }
    public function update(Request $request, $id)
    {
        DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'email' => $request->mail,
            'password' => $request->password,
        ]);
        
        
        // リダイレクト
        return redirect('/admin/admin');
    }
    public function editapp()
    {
        return view('editapp');
    }
    public function languages()
    {
        $languages = DB::table('languages')
        ->get();
        
        return view('admin.languages',['languages' => $languages]);
    }
    public function languagesadd(Request $request)
    {
        DB::table('languages')
        ->insert([
            'name' => $request->name,
        ]);
        
        return redirect('/admin/editapp/languages');
    }
    
    
    public function languagesdelete($id)
    {
        DB::table('languages')->where('id', $id)->delete();
        
        // リダイレクト
        return redirect('/admin/editapp/languages');
    }
    
    public function languagesupdate(Request $request, $id)
    {
        DB::table('languages')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
        ]);
        
        
        // リダイレクト
        return redirect('/admin/editapp/languages');
    }
    public function contents()
    {
        $items = DB::table('contents')
            ->get();
    
    
        return view('admin.contents', ['items' => $items]);
    }
    public function contentsadd(Request $request)
    {
        DB::table('contents')
        ->insert([
            'name' => $request->name,
        ]);
        
        return redirect('/admin/editapp/contents');
    }


    public function contentsdelete($id)
    {
        DB::table('contents')->where('id', $id)->delete();
        
        // リダイレクト
        return redirect('/admin/editapp/contents');
    }
    
    public function contentsupdate(Request $request, $id)
    {
        DB::table('contents')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
        ]);
        
        
        // リダイレクト
        return redirect('/admin/editapp/contents');
    }
}
