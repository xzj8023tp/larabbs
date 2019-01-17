<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //显示个人信息
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    //显示编辑用户资料页面
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }
    //修改动作
    public function update(UserRequest $request,User $user,ImageUploadHandler $uploader)
    {
        $data = $request->all();

        if ($request->file('avatar')) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id,400);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);
        return redirect()->route('users.show',$user->id)->with('success','更新个人信息成功');
    }
}
