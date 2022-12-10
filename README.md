# PHP8（Laravel8） + MySQL + nginx + phpMyAdmin + mailhog のフルスタック環境のひな型用リポジトリ

## 本リポジトリ作成の背景
laravelの書籍では、Laravel Sailが使われていたり、PostgreSQLとの組み合わせも多くあったため、自身が最も慣れ親しんできたPHPとMySQLの組み合わせのDocker環境を一から作ろうと考えた。
これからの個人開発においても環境構築に困ることを防ぐことができる。
Dockerfile,composeファイルと環境を自作。本環境をクローンすると、Laravel入りのLEMP環境が作成できる。

## フォルダの解説
docker -- 各種Dockerfile

src -- Laravelのプロジェクトファイル。コンテナ内ではappにマウント
