# Copilot Instructions for AI Agents

## プロジェクト概要
このリポジトリは、LaravelベースのTODOアプリのためのDocker開発環境を提供します。主要なサービスは `docker/` ディレクトリで管理され、MySQL・Nginx・PHP の各コンテナ設定が分離されています。

## 主要ディレクトリ・ファイル
- `docker/`
  - `mysql/` : MySQL 設定 (`my.cnf`)、永続化データ (`data/`)
  - `nginx/` : Nginx 設定 (`default.conf`)
  - `php/`   : PHP 設定 (`php.ini`)、Dockerfile
- `docker-compose.yml` : サービス連携のためのComposeファイル（現状空ですが、将来的にサービス定義を記述）
- `src/` : Laravel アプリ本体（現状空）

## 開発・ビルド・デバッグワークフロー
- Dockerコンテナの起動・停止・再構築は、通常 `docker-compose` コマンドを利用します。
  - 例: `docker-compose up -d` で全サービス起動
  - 例: `docker-compose down` で全サービス停止
- 各サービスの設定は `docker/` 配下の個別ファイルで管理。設定変更後は該当サービスの再ビルド・再起動が必要です。
- Laravelのコードは `src/` 配下に配置。現状は空ですが、今後 `src/` にアプリケーションコードが追加される想定です。

## プロジェクト固有のパターン・注意点
- サービスごとに設定ファイルが分離されているため、設定変更は該当ディレクトリ内で行うこと。
- `docker-compose.yml` や各設定ファイルは現状空ですが、今後の拡張に備えて構造を維持。
- Laravelのマイグレーションやテストは、PHPコンテナ内で `php artisan` コマンドを利用する想定。
- データベース永続化は `docker/mysql/data/` で管理。

## 例: 新サービス追加時の手順
1. `docker/` 配下に新サービス用ディレクトリ・設定ファイルを作成
2. `docker-compose.yml` にサービス定義を追加
3. 必要に応じて `src/` のLaravelコードを修正

## 参考: よく使うコマンド
- `docker-compose up -d` : バックグラウンドで全サービス起動
- `docker-compose down` : 全サービス停止
- `docker-compose build` : イメージ再ビルド
- `docker-compose logs` : ログ確認

## 注意
- 各設定ファイルが空の場合は、今後の拡張や初期化のためのプレースホルダーです。
- 主要な開発・運用フローはDocker Composeベースで統一。

---
この内容で不明点や追加したい情報があればご指摘ください。