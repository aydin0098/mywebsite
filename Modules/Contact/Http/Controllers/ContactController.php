<?php

namespace Modules\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Contact\Entities\Contact;
use function back;
use function toastr;
use function view;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage_contact')->only(['index']);
        $this->middleware('can:manage_contact')->only(['delete']);

    }

    public function index()
    {
        return view('contact::contacts.index');

    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        toastr()->success('نظر انتخاب شده حذف شد');
        return back();


    }
}
