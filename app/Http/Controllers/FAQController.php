<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = FAQ::where('id', '!=', null)->orderBy('id', 'asc')->get();
        return view('webcontent.faq')->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('webcontent.create-faq');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FAQ::create([
            'QUESTION' => $request->question,
            'ANSWER' => $request->answer
        ]);
        
        return to_route('faq.index')->with('success', 'Question Successfully Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FAQ $faq)
    {
        return view('webcontent.edit-faq')->with('faqs', $faq);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FAQ $faq)
    {
        $faq->update([
            'QUESTION' => $request->question,
            'ANSWER' => $request->answer
        ]);

        // dd($faqs);
        // dd($request->question, $request->answer);

        return to_route('faq.index')->with('success', 'This does not work yet');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $faq)
    {
        $faq->delete();

        return to_route('faq.index')->with('success', 'Question Moved to Trash');
    }
}
