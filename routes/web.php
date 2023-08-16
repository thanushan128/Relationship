<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// one to one Relation
// Route::get('/', function () {
//     // $user = User::find(1);
//     // dd($user->phone);

//     // Get the output as json format
//     // $user = User::with('phone')->whereId(1)->first();
//     // return Response::json($user);

//     // belongs to (inverse one to one relationship)
//     // $phone = Phone::find(1);
//     // dd($phone->user);

//     // Get the output as json format
//     // $phone = Phone::with('user')->whereId(1)->first();
//     // return Response::json($phone);

//     // Update records
//         // $user = User::find(1);
//         // $phone = new Phone;
//         // $phone->phone = '0768888888';

//     // $user->phone()->save($phone);
//         // $user->phone()->update($phone->toArray());
//         // return 'Saved!';

//     // change the relationship record into another user record
//         $phone = Phone::find(1);
//         $user = User::find(2);

//         $phone->user()->associate($user)->save();
//         return 'Saved!';
// });

// // one to many Realation
// Route::get('/', function () {
//     // $post = Post::find(1);
//     // dd($post->comments);


//     // Get data as json format
//     // $post = Post::with('comments')->whereId(1)->first();
//     // return Response::json($post);

//     // Inversation of one to many
//     // $comment = Comment::find(1);
//     // dd($comment->post);

//     // $comment = Comment::with('post')->whereId(1)->first();
//     // return Response::json($comment);

//     // // Insert a record
//     // $post = Post::find(1);
//     // $comment = new Comment;

//     // // $comment->name = "My third Comment";
//     // $comment->name = "My forth Comment";

//     // $post->comments()->save($comment);
//     // return "Sucessfully Insert a record!";

//     // Insert multi record at a time
//     // $post = Post::find(1);
//     // $comment5 = new Comment;
//     // $comment5->name = "My fifth Comment";

//     // $comment6 = new Comment;
//     // $comment6->name = "My sixth Comment";

//     // $post->comments()->saveMany([$comment5,$comment6]);
//     // return "Sucessfully Insert Multi Record!";

//     $comment = Comment::find(2);
//     $post = Post::find(2);

//     $comment->post()->associate($post)->save();
//     return "Sucessfully Changeed the foregin key !";
// });


// many to many Realation
Route::get('/', function () {
    // $user = User::find(1);
    // $roles = $user->roles;
    // dd($roles);

    // $user = User::with('roles')->whereId(1)->first();
    // return Response::json($user);

    // $role = Role::find(1);
    // $users = $role->users;
    // dd($users);

    // $role = Role::with('users')->whereId(1)->first();
    // return Response::json($role);

    // add roles
    // $user = User::find(2);
    // $roles = [2,3];

    // $user->roles()->attach($roles);
    // return "Roles Added!";

    // Inverse
    $role = Role::find(1);
    $user_ids = [1,2];

    $role->users()->attach($user_ids);
    return "Users Added";
});
