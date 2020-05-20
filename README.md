# UdemyのLaravel講座
※ Dockerの使用やvueの導入など少し環境が変わってます。
(動画では、環境がMAMPでUIはBootStrap)

[PHPからLaravelまで はじめてのプログラミング入門 - udemy](https://www.udemy.com/share/102HImBksceVdWTHw=/)
プロゲートの様に駆け足気味で学ぶにはちょうどいい量

## docker-composeのコマンド(よく使うやつ)
- コンテナ起動<br>
`docker-compose up -d`

- コンテナ停止<br>
`docker-compose down`

- appコンテナに入る(artisanやcomposerのコマンドを叩く時)<br>
`docker-compose exec app bash`

- リスタート(nginxでよく使う)<br>
`docker-compose restart (コンテナ名など)`

- laravelプロジェクト作成<br>
`composer create-project --prefer-dist laravel/laravel=6.x`

- ビルドのやり直し<br>
`docker-compose up -d --build`

### やったこと
- Modelの作成 (Models/Test.php)
- migrationの作成、実行 
  (2020_05_16_131636_create_tests_table.php, 2020_05_20_153001_contact_forms_table,2020_05_20_154435_add_title_to_contact_forms_table)
- tinkerでのデータ挿入
- Routing -> Controller(viewにデータを渡す) -> Viewの表示<br>
  (Models/Test.php, TestController ,tests/test.blade.php)
- コレクション(chunkを使ってみた)
- クエリビルダ(を使ってみた)
- ファサード確認(config/app.php)
- バリデーションの設定(https://github.com/minoryorg/laravel-resources-lang-ja)

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
# コントローラー作成(resourceはRESTfulなコントローラー)
php artisan make:controller ~Controller [--resource]

```

##### Model

```
# モデル作成
php artisan make:model モデル名 [-mc]
```

#### DB

```
# マイグレートファイル作成(tableオプションは、テーブルにカラムを追加する際に使用)
php artisan make:migration ファイル名 [--table=テーブル名]
# テーブル作成
php artisan migrate
# マイグレートを一つ前に戻す(stepオプションは、どこまで戻すか指定する際に使用)
php artisan migrate:rollback [--step=3]
# テーブルを全削除
php artisan migrate:reset
# マイグレートの履歴を見る
php artisan migrate:status
```


#### DBの簡易データ登録
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
