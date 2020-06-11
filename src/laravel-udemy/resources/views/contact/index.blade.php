@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('contact.create') }}">
                        <button type="submit" class="btn btn-primary">新規登録</button>
                    </form>

                    <form method="GET" action="{{ route('contact.index') }}" class="form-inline my-2">
                        <input class="col-10 form-control mr-sm-2" name="search" placeholder="検索" type="text">
                        <button class="col-1 btn btn-outline-success my-sm-0" type="submit">検索</button>
                    </form>

                    <!--リスト-->
                    <table class="m-2 table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>名前</th>
                                <th>件名</th>
                                <th>登録日</th>
                                <th>詳細</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->your_name }}</td>
                                <td>{{ $contact->title }}</td>
                                <td>{{ $contact->created_at}}</td>
                                <!--パラメータを渡して個別のページに移動-->
                                <td><a href="{{ route( 'contact.show', ['id' => $contact->id]) }}">詳細</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $contacts->links() }}
                    <!--リスト-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
