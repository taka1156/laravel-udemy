
## docker-composeコマンド一覧(よく使うやつ)
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