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

# seeder

```
# `database/seeds/`の配下にファイルが生成される
php artisan make:seeder UsersTableSeeder
```

# factory

※`'faker_locale' => 'ja_JP'`事前にここを書き換え
```
# `database/factories/`の配下にファイルが生成される
php artisan make:factory ContactFormFactory
``


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