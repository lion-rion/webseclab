


## SQLインジェクションコンテナ

### SQL初期化

`sqli/docker/initdb.d/init.sql`のファイルを編集することでSQLにデータを挿入できます

### Port割当

| ホスト側Port | コンテナ側Port | 
| ---- | ---- | 
| 20001 | 80:tcp |
| 20002 | 3306:mysql8.0 |


