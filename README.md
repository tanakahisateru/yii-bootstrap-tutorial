# Yii-Bootstrap チュートリアル

Yii フレームワークの Bootstrap 拡張を使うチュートリアルです。
コミットログが説明になっています。

## チュートリアルの準備

想定しているディレクトリ構成は以下のようになっています。

```
/your/working/dir/
    yii/                     (こうなるようにYiiフレームワークを展開します)
        framework/
    yii-bootstrap-tutorial/  (ここかWebサーバで公開するアプリケーションです)
```

初期アプリケーションは以下のように作成されます。これの実行結果はすでにリポジトリのコミットに含まれています。

```
cd /your/working/dir
yii/framework/yiic webapp yii-bootstrap-tutorial
```

Yii-Bootstrap拡張を `protected/extensions/bootstrap` に展開します。
拡張のソースコードはこのリポジトリみません。初期アプリケーション生成後のフォルダに手動で展開してください。

```
cd yii-bootstrap-tutorial/protected/extensions
wget [Yii-Bootstrap拡張の最新版]
unzip -d bootstrap yii-bootstrap-*.zip
```

展開後はこのような配置になります。

```
protected/extensions/
    bootstrap/
        assets/
        components/
        gii/
        lib/
        widgets/
        LICENSE.txt
```

- - -

### 特定バージョンにおける注意

このチュートリアルを作ったときの最新リリース yii-bootstrap-1.1.0.r298.zip には発見しにくいバグがあります。
PHPコードそのものではなく、PHPコードのテンプレートが、間違った文法のコードを生成するというものです。

https://bitbucket.org/Crisu83/yii-bootstrap/pull-request/48/missing-comma/diff

該当するバージョンを使っている人は、`gii/bootstrap/templates/default/_search.php` の以下を修正しましょう。

```
array(
    'buttonType'=>'submit'  // <--- ここの末尾カンマがない
    'type'=>'primary',
```

また、この付近には改行コードがCRLFになっているものが複数あり、GiiでそれをテンプレートにするとLFのビューファイルとCRLFのビューファイルができてしまって気持ち悪いです。修正しておければそれに越したことはありません。

- - -

データベースは生成したアプリケーションの `protected/data/` に最初から含まれている SQLite のファイルを使うことにします。

Yii のお約束で、Apache がユーザ権限で動いていない場合は、`assets` と `protected/runtime` のパーミッションを書き込み可能にしておきましょう。

## 学習のしかた

Git のコミットを順に追っていきます。

GitHub をブラウザで開き、コミット履歴を観るのが早いでしょう。
わからなくなったら、特定のコミットの SHA をチェックアウトして全ソースを取得してください。

## おことわり

モデル層のこと、テスト、認証、ルーティング、国際化、チューニング等はいっさいやりません。デフォルトのままです。
また、ビューもできるだけ Gii で生成されたものをカスタマイズしない方針で、 Bootstrap を使うことだけをピックアップします。

実際のアプリケーションでは、他の大事なこともビューのカスタマイズ(とくにajaxUpdateやajaxVaridation)も、ちゃんと考慮しましょう。

