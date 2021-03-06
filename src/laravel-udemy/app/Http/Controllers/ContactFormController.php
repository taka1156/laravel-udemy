<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ContactForm;
use App\Services\CheckFormData;
use App\Services\SplitSearchData;
use App\Http\Requests\StoreContactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 検索機能の追加
        $search = $request->input('search');

        $query = DB::table('contact_forms');

        if ($search !== null) {
            $searches = SplitSearchData::splitSeach($search);

            // 単語をループで回す
            foreach($searches as $value) {
                $query->where('your_name', 'like', '%'.$value.'%');
            }
        }

        $query->select('id', 'title', 'your_name', 'created_at');
        $query->orderBy('id', 'asc');
        $contacts = $query->paginate(10);

        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactForm $request)// バリデーション
    {
        // 登録
        $contact = new ContactForm();

        // $_POST => $request(DI)
        $contact->your_name = $request->input('your_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        // DBに保存
        $contact->save();

        return redirect('contact/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // データを一つだけ取得
        $contact = ContactForm::find($id);

        $gender = CheckFormData::checkGender($contact);
        $age = CheckFormData::checkAge($contact);

        return view('contact.show', compact('contact', 'gender', 'age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // データの編集
        $contact = ContactForm::find($id);

        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // データの更新
        $contact = ContactForm::find($id);

        // 上書き
        $contact->your_name = $request->input('your_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        // DBに保存
        $contact->save();

        return redirect('contact/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // データを削除
        $contact = ContactForm::find($id);
        $contact->delete();

        return redirect('contact/index');
    }
}
