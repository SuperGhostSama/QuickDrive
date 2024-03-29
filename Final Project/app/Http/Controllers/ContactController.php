<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        // return response()->json(['contacts' => $contacts]);
        return view('pages.dashboard-contactus',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $contact = new Contact;
        $contact->full_name = $request->input('fullname');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->created_at = now(); // add the current time of creation
        $contact->save();

        // return response()->json(['contact' => $contact]);
        return redirect()->back()->with('success', 'Sent Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $contact = Contact::find($id);
    //     if (!$contact) {
    //         return response()->json(['message' => 'Contact not found!'], 404);
    //     }
    //     return response()->json(['contact' => $contact]);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
