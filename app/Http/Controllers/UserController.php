<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $ideas = $user->ideas()->paginate(5);
        $editing=false;
        return view('users.show',compact('user','editing','ideas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update',$user);
        $ideas= Idea::paginate(5);
        $editing = true;
        return view('users.edit',compact('user','editing','ideas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update',$user);
        $validated = $request->validated();
        if(request('image')){
            $img_path = $request->file('image')->store('profile','public');
            $validated['image']=$img_path;
            
            Storage::disk('public')->delete($user->image ?? '');
        }
        $user->update($validated);
        return redirect()->route('profile')->with('success','Profile Updated Successfully ');
    }

    public function profile(){
        return $this->show(auth()->user());
    }
}
