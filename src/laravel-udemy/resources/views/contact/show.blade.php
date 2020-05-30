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

                    showです。<br>
                    {{ $contact->your_name }}<br>
                    {{ $contact->title }}<br>
                    {{ $contact->email }}<br>
                    {{ $contact->url }}<br>
                    {{ $gender }}<br>
                    {{ $age }}<br>
                    {{ $contact->contact }}<br>
                    {{ $contact->crated_at }}

                    <form method="GET" action="{{ route('contact.edit', ['id' => $contact->id ]) }}">
                        @csrf

                        <div class="d-flex flex-row-reverse">
                            <button class="btn btn-primary">編集</button>
                        </div>
                    </form>

                    <form id="delete_{{ $contact->id }}" method="POST" 
                        action="{{ route('contact.destroy', ['id' => $contact->id ]) }}"
                    >
                        @csrf

                        <div class="d-flex flex-row-reverse">
                            <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除してよろしいですか?')) {
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}


</script>

@endsection
