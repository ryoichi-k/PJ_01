# PHP8（Laravel8） + MySQL + nginx + phpMyAdmin + mailhog のフルスタック環境のひな型用リポジトリ

## 本リポジトリ作成の背景
laravelの書籍では、Laravel Sailが使われていたり、PostgreSQLとの組み合わせも多くあったため、自身が最も慣れ親しんできたPHPとMySQLの組み合わせのDocker環境を一から作ろうと考えた。
これからの個人開発においても環境構築に困ることを防ぐことができる。
Dockerfile,composeファイルと環境を自作。本環境をクローンすると、Laravel入りのLEMP環境が作成できる。

## フォルダの解説
docker -- 各種Dockerfile

src -- Laravelのプロジェクトファイル。コンテナ内ではappにマウント

## Laravelでの新規プロジェクト作成

phpコンテナ内でフォルダが何もないことをlsで確認する。

phpコンテナ（phpのコンテナ）内で下記コマンドを実行。プロジェクト名は不要。
```php
composer create-project --prefer-dist "laravel/laravel=^8.*" .
```

localhost:8081にアクセスして、ブラウザでLaravelのウェルカムページが表示できるかを確認。

この時に、storageのpermissionエラーが出るので下記コマンドを実行。

```php
chmod -R 777 /storage
```

## Laravel側の設定（laravel新規プロジェクト作成後に設定）
場所　src > config > app.php

```php
'timezone' => 'Asia/Tokyo',
```


```php
'locale' => 'ja',
```

```php
'faker_locale' => 'ja_JP',
```

場所 src

```php
php -r "copy('https://readouble.com/laravel/8.x/ja/install-ja-lang-files.php', 'install-ja-lang.php');"
php -f install-ja-lang.php
php -r "unlink('install-ja-lang.php');"
```

上記コマンドを実行すれば、自動的にファイルが生成される。
