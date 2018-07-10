<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Slids;

class SlidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //获取搜素条件
        $search = $request -> input('search','');

        $data = Slids::where('surl','like','%'.$search.'%')->paginate(10)->appends($request->input());
        $data = Slids::paginate(10);

        return view('admin.slids.index',['data'=>$data]);
    }

    /**
     * 轮播图添加页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slids.create');
    }

    /**
     * 保存添加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接收数据
        $data = $request -> except('_token');


        //处理保存图片
        if($request -> hasFile('simg')){
            
            // 使用request 创建文件上传对象
            $profile = $request -> file('simg');
            // 获取文件后缀名
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $filename =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            // 保存文件
            $profile -> move('./uploads/'.$dirname,$filename);
            $fileadd = ('/uploads/'.$dirname.'/'.$filename);
        } else {
            return back() -> with('error','图片存储失败');
        }      

        //存储信息
        $slids = new Slids;
        $slids -> surl = $data['surl'];
        $slids -> state = $data['state'];
        $slids -> simg = $fileadd;
        $res = $slids -> save();

        //处理返回值
        if($res){
            return redirect(url('admin/slids')) -> with('success','添加成功');
        }else{
            return redirect() -> back() -> with('error','添加失败');
        }
    }

    /**
     * 轮播图信息修改
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.slids.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //修改信息
       $data = Slids::find($id);
      //dump($data);

       return view('admin.slids.edit',['data'=>$data]);
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
        //
        $data = $request -> except(['_token']);
        //dump($request -> except(['_token']));

         //存储信息
        $slids = Slids::find($id);
        $slids -> surl = $data['surl'];
        $slids -> state = $data['state'];
        $res = $slids -> save();

        //处理返回值
        if($res){
            return redirect(url('admin/slids')) -> with('success','添加成功');
        }else{
            return redirect() -> back() -> with('error','添加失败');
        }
    }

    /**
     * 用户删除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
        //删除指定用户
        $res = \App\Models\Slids::destroy(Intval($id));

        //返回值处理
        if($res)
        {
            return redirect( url('admin/slids') ) -> with('success','删除成功');
        } else {
            return back() -> with('error','删除失败');
        }

    }


    /**
     * 已删除用户列表
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delshow()
    {
        
        //以删除的用户
        $data = Slids::onlyTrashed() -> paginate(10);
        //dd($data);

        return view('admin.slids.delshow',['data'=>$data]);

    }


    /**
     * 还原删除用户
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        //还原指定用户
        $data = Slids::withTrashed()->where('id','=',$id) -> restore();
        if($data){
            return redirect( url('admin/slids') ) -> with('success','还原成功');
        } else {
            return back() -> with('error','还原失败');
        }

       return redirect(url('admin/slids'));

    }


    /**
     * 彻底删除用户
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delOk($id)
    {
        
        //永久删除
         $bool = Slids::where('id','=',$id)->forceDelete();
          if($bool){
            return redirect('/admin/slids');
           }else{
              //回收站中永久删除
              $bool = Slids:: onlyTrashed()->where('id','=',$id)->forceDelete();
              if($bool);
              return redirect('/admin/slids');
           }

    }




}
