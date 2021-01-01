<?php

namespace App\Http\Controllers;

use App\Http\Requests\Parcel\StoreParcelRequest;
use App\Http\Requests\Parcel\UpdateParcelRequest;
use App\Models\Category;
use App\Models\Parcel;
use App\Models\User;
use App\Notifications\ParcelStatus;
use Illuminate\Http\Request;

class ParcelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $parcels = Parcel::with('user')->where('status', $id)->get();
        return view('parcel.index', compact('parcels', 'id'));
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('parcel.create', compact('users', 'categories'));
    }

    public function store(StoreParcelRequest $request, Parcel $parcel)
    {

        $category = Category::find($request->categories);
        $parcel->create($request->validated())->categories()->attach($category);
        $user = User::find($request->user_id);
        if($user)
        {
            $user->notify(new ParcelStatus("თქვენი ამანათი თრექინგით: ".$request->tracking." მიღებულია ამერიკის საწყობში"));
        }
        return back()->with('Success', 'ამანათი წარმატებით დაემატა');
    }

    public function edit($id)
    {
        $users = User::all();
        $categories = Category::all();
        $parcel = Parcel::findOrFail($id);
        return view('parcel.edit', compact('users', 'categories', 'parcel'));
    }

    public function update(UpdateParcelRequest $request, $id)
    {
        $category = Category::find($request->categories);
        $parcel = Parcel::findOrFail($id);

        $parcel->categories()->sync([]);

        $parcel->tracking = $request->tracking;
        $parcel->user_id = $request->user_id;
        $parcel->shop = $request->shop;
        $parcel->price = $request->price;
        $parcel->weight = $request->weight;
        $parcel->save();

        $parcel->categories()->attach($category);
        return back()->with('Success', 'ამანათი წარმატებით დარედაქტირდა');
    }

    public function destroy($id)
    {
        Parcel::destroy($id);
        return back()->with('Success', 'ამანათი წარმატებით წაიშალა');
    }

    public function move(Request $request)
    {
        $checkboxes = $request->checkboxes;
        $status = $request->status;

       
            foreach($checkboxes as $id)
            {
                if($status == 1)
                {
                    $parcel = Parcel::where('id',$id)->where('status', $status)->first();
                    if($parcel)
                    {
                        $parcel->status = 2;
                        if($parcel->save())
                        {
                            if(!empty($parcel->user))
                            {
                                $parcel->user->notify(new ParcelStatus("თქვენი ამანათი თრექინგით: ".$parcel->tracking." გამოიგზავნა საქართველოში"));
                            }
                        }
                    }
                }
                else if($status == 2)
                {
                    $parcel = Parcel::where('id',$id)->where('status', $status)->first();
                    if($parcel)
                    {
                        $parcel->status = 3;
                        if($parcel->save())
                        {
                            if(!empty($parcel->user))
                            {
                                $parcel->user->notify(new ParcelStatus("თქვენი ამანათი თრექინგით: ".$parcel->tracking." მიღებულია საქართველოში"));
                            }
                        }
                    }
                }

                return true;
            }

    }
}
