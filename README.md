docker-compose up -d

docker-compose exec app bash

- 
`composer create-project --prefer-dist laravel/laravel=6.x`

- ビルドのし直し
`docker-compose up -d --build`

### やったこと
- Modelの作成 (Models/Test.php)
- migrationの作成、実行 (2020_05_16_131636_create_tests_table.php)
- tinkerでのデータ挿入
- Routing -> Controller(viewにデータを渡す) -> Viewの表示<br>
  (Models/Test.php, TestController ,tests/test.blade.php)
- コレクション(chunkを使ってみた)
- クエリビルダ(を使ってみた)
- ファサード確認(config/app.php)

## 規則
- modelは単数、マイグレートファイルは複数形


## artisanコマンド一覧

#### キャッシュ削除

```
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

#### Routeing

```
# 一覧表示
php artisan route:list
```

##### Controller

```
# コントローラー作成
php artisan make:controller

```

##### Model

```
# モデル作成
php artisan make:model モデル名 [-mc]
```

#### DB

```
# マイグレートファイル作成
php artisan make:migration ファイル名 [--table=テーブル名]
# テーブル作成
php artisan migrate 
```


#### DBの簡易接続
```
php artisan tinker
```

- tinkerの使い方
```php
// 対話形式で一行ずつ入力
$test = new App\Models\Test;
$test->text = 'aaa';
$text->save();
App\Models\Test::all();
```

## よく使うヘルパ関数
※ 後で確認
- route
- auth(認証)
- bcrypt(暗号化)
- collect(コレクション)
- dd(console.log的なやつ)
- env
- factory(ダミーデータ作成)
- old
- view(フロントエンドの表示)

[Laravel6.x - ヘルパ](https://readouble.com/laravel/6.x/ja/helpers.html)


## コレクション関数
※ 後で確認
- all
- chunk
- get
- pluck
- whereIn
- toArray

[Laravel6.x - コレクション](https://readouble.com/laravel/6.x/ja/collections.html)

## クエリビルダ

[Laravel6.x - クエリビルダ](https://readouble.com/laravel/6.x/ja/queries.html)
