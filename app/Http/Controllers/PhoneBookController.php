<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Phonebook;
use Illuminate\Http\Request;
use App\Http\Requests\PhonebookRequest;

//phonebookRequest class must be called out

class PhoneBookController extends Controller
{
    public function index (){
        $phonebook = Phonebook::forUser(Auth::user()->id);
        return view('phonebook.index', compact('phonebook'));

        //phonebook authentication must be call out for user id
    }

    
    public function create(){
        return view('phonebook.create');
    }

    public function edit(Phonebook $phonebook){
        return view('phonebook.edit',compact('phonebook'));
    }
     public function update(PhonebookRequest $request,phonebook $phonebook){

      

        $phonebook->name = $request->name;
        $phonebook->email = $request->email;
        $phonebook->phone = $request->phone;
        
        $phonebook->save();

        session()->flash('success','phonebook'. $phonebook->name .' updated successfully.');
        return redirect()->route('phone.book');

     }

     public function delete(Phonebook $phonebook){
       
        $phonebook->delete();


        session()->flash('success','phonebook'.  $phonebook->name  .' Deleted successfully.');
        return redirect()->route('phone.book');



     }

    public function store(PhonebookRequest $request){

        //phonebook authentication must be call out for user id
        $phonebook = new Phonebook();
        $phonebook->user_id = Auth::user()->id;
        $phonebook->name = $request->name;
        $phonebook->email = $request->email;
        $phonebook->phone = $request->phone;

        $phonebook->save();

        session()->flash('success','phonebook'.  $phonebook -> Name . ' Created successfully.');
        return redirect()->route('phone.book');
    }
}
