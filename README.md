# UdemyのLaravel講座
※ Dockerの使用やvueの導入など少し環境が変わってます。
(動画では、環境がMAMPでUIはBootStrap)

## [docker-composeコマンド一覧](./docker_command.md)


[PHPからLaravelまで はじめてのプログラミング入門 - udemy](https://www.udemy.com/share/102HImBksceVdWTHw=/)
プロゲートの様に駆け足気味で学ぶにはちょうどいい量

### やったこと
- Modelの作成 (Models/Test.php)
- migrationの作成、実行
- tinkerでのデータ挿入
- Routing -> Controller(viewにデータを渡す) -> Viewの表示<br>
- コレクション(chunkを使ってみた)
- クエリビルダ
- ファサード確認(config/app.php)
- バリデーションの設定(https://github.com/minoryorg/laravel-resources-lang-ja)
- フォームリクエストのバリデーション
- Usersテーブルのシーダーの作成
- contactform, userのfactoryを作成
- ページネーションの作成
- 検索機能の追加

## 規則
- modelは単数、マイグレートファイルは複数形

## [artisanコマンド一覧](./artisan_command.md)

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
