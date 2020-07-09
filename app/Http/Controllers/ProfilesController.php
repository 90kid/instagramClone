<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $postCount = Cache::remember('post.count.' . $user->id, now()->addSeconds(30), function () use ($user) {
            return $user->posts->count();
        });
        $followersCount = Cache::remember('followers.count.' . $user->id, now()->addSeconds(30), function () use ($user) {
            return $user->profile->followers->count();
        });
        $followingCount = Cache::remember('following.count.' . $user->id, now()->addSeconds(30), function () use ($user) {
            return $user->following->count();
        });
        return view('profiles.index', compact('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
    }

    public function myAccount()
    {
        return auth()->user() ? $this->index(auth()->user()) : redirect('/login');
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => 'image'
        ]);
        if (\request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $orginalPath = explode('/', $imagePath);
            $image->save("storage/{$orginalPath[0]}/res{$orginalPath[1]}");
            auth()->user()->profile->update(array_merge($data, [
                'image' => "{$orginalPath[0]}/res{$orginalPath[1]}",
                'orginalImage' => $imagePath,

            ]));
        } else {
            auth()->user()->profile->update($data);
        }
        return redirect("/profile/{$user->id}");
    }
}
