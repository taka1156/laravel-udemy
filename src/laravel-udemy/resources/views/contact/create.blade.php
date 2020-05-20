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
                    <a href="{{ route('contact.index') }}" class="text-primary">戻る</a>

                    createです。

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <fieldset class="border p-4 border-info">
                            <legend>お問い合わせフォーム</legend> 
                            <!--入力画面-->
                            <div class="form-group">
                                <label>氏名 *:</label>
                                <input type="text" class="form-control" name="your_name" placeholder="お名前">
                            </div>

                            <div class="form-group">
                                <label>タイトル *:</label>
                                <input type="text" class="form-control" name="title" placeholder="タイトル">
                            </div>
            
                            <div class="form-group">
                                <label>メールアドレス *:</label>
                                <input type="mail" class="form-control" name="email" placeholder="xxx@xxx.jp">
                            </div>
                        
                            <div class="form-group">
                                <label> ホームページ:</label>
                                <input type="url" class="form-control" name="url" placeholder=https://xxx.com>
                            </div>
            
                            <div class="form-group">
                                <label>性別 *:</label>
                                <div class="custom-control custom-radio">
                                    <input id="radio-gender-0" type="radio" class="custom-control-input" name="gender">
                                    <label for="radio-gender-0" class="custom-control-label">男性</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="radio-gender-1" type="radio" class="custom-control-input" name="gender">
                                    <label for="radio-gender-1"  class="custom-control-label">女性</label>
                                </div>
                            </div>
            
                            <div class="form-group">
                                <label>年齢 *:</label>
                                <select class="custom-select" name="age">
                                    <option value="">選択して下さい</option>
                                    <option value="1">~19歳</option>
                                    <option value="2">20~29歳</option>
                                    <option value="3">30~39歳</option>
                                    <option value="4">40~49歳</option>
                                    <option value="5">50〜59歳</option>
                                    <option value="6">60歳~</option>
                                </select>
                            </div>
            
                            <div class="form-group">
                                <label>お問い合わせ内容 *:</label>
                                <textarea class="form-control" name="contact"></textarea>
                            </div>
            
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="check-caption" type="checkbox" class="custom-control-input" name="caption" value="1">
                                    <label for="check-caption" class="custom-control-label">注意事項を確認しました。</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row-reverse">
                                <button type="submit" class="btn btn-primary">確認</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
