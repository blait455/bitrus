<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index() {
        $newsletters = Newsletter::all();

        return view('admin.newletter.index', compact('newsletters'));
    }

    public function store(Request $request) {
        $ns = new Newsletter();
        $ns->email  = $request->email;
        $ns->save();

        return back();
    }

    public function delete($id) {
        $ns = Newsletter::find($id);
        $ns->delete();

        return back();
    }
}
