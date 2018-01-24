# MultiLightBlockExplorer Library
[![GitHub license](https://img.shields.io/github/license/zinntikumugai/MultiLightBlockExplorerAPI.svg)](https://github.com/zinntikumugai/MultiLightBlockExplorerAPI/blob/master/LICENSE)
[![GitHub last commit](https://img.shields.io/github/last-commit/zinntikumugai/MultiLightBlockExplorerAPI.svg)](https://github.com/zinntikumugai/MultiLightBlockExplorerAPI)
[![GitHub top language](https://img.shields.io/github/languages/top/zinntikumugai/MultiLightBlockExplorerAPI.svg)](https://github.com/zinntikumugai/MultiLightBlockExplorerAPI)

namuyan氏提供の[MultiLightBlockExplorer](http://namuyan.dip.jp/MultiLightBlockExplorer/)を使いやすくするためを目的としたAPIライブラリです。  
**途中で名称を変えたため、プログラム上では`MultiLightBlockExplorerAPI`となっています。**
# 動作条件
- PHP 7.x
    - curl

# 使い方
```
require_once __DIR__ .'/MultiLightBlockExplorerAPI.php';
$MLBE = new MultiLightBlockExplorerAPI('BitZeny');  //多少リファレンス通りでなくても動くようになっています。(リファレンスでは"zeny")
echo $MLBE->getBlock('000000003253d1aafab7f245994e0268409a61964fc05b43feb99e8067b87e9f');
```
そのほかは、`Examples.php`を参考にしてください。  
[MultiLightBlockExplorerのAPIはこちらです](http://namuyan.dip.jp/MultiLightBlockExplorer/APIlist.html)

# API対応表
関数名を多少変えてる部分があるためご注意ください。  

| API名 | URL(一部) | 関数名 |
----|----|----
| ﾌﾞﾛｯｸ情報取得 | `/api/block/[:hash]` | getBlock($hash) |
| ﾌﾞﾛｯｸﾊｯｼｭ取得 | `/api/block-index/[:height]` | getBlockIndex($height) |
| ﾄﾗﾝｻﾞｸｼｮﾝﾃﾞｰﾀ取得 | `/api/tx/[:txid]` | getTx($txid) |
| 生ﾄﾗﾝｻﾞｸｼｮﾝﾃﾞｰﾀ取得 | `/api/rawtx/[:rawid]` | getRawTx($rawTxid) |
| アドレス確認 | `/api/addr-validate/[:addr]` | getAddrValidate($addr) |
| アドレスﾃﾞｰﾀ取得 | `/api/addr/[:addr]` | getAddr($addr) |
| アドレスﾃﾞｰﾀ(Balance)取得 | `/api/addr/[:addr]/balance` | getAddrBalance($addr) |
| アドレスﾃﾞｰﾀ(TotalRecived)取得 | `/api/addr/[:addr]/totalReceived` | getAddrTotalRecived($addr) |
| アドレスﾃﾞｰﾀ(TotalSent)取得 | `/api/addr/[:addr]/totalSent` | getAddrTotalSent($addr) |
| アドレスﾃﾞｰﾀ(UnconfirmedBalance)取得 | `/api/addr/[:addr]/unconfirmedBalance` | getAddrUnconfirmedBalance($addr) |
| アドレスﾃﾞｰﾀ(Utxo)取得 | `/api/addr/[:addr]/utxo` | getAddrUtxo($addr) |
| 未使用TXID取得 | `/api/addrs/[:addrs]/utxo` | getAddrsUtxos($addr = []) |
| 未使用TXID取得 POSTメソッド | `/api/addrs/utxo` [POST] | (未実装) |
| ﾌﾞﾛｯｸ内TXID取得 | `/api/txs/?block=HASH` | getBlockTxid($hash) |
| アドレス関連TXID取得 | `/api/txs/?address=ADDR` | getAddrTxid($addr) |
| アドレス関連TXID取得(複数) | `/api/addrs/[:addrs]/txs[?from=&to=]` | (動作確認できなかったため未実装) |
| アドレス関連TXID取得(複数) POSTメソッド | `/api/addrs/txs` [POST] | (未実装) |
| トランザクションブロードキャスト POSTメソッド | `/api/tx/send` [POST] | (未実装) |
| APIステータス取得() | `/api/status?q=getInfo` | getAPIGetInfo() |
| APIステータス取得() | `/api/status?q=getBlockCount` | getAPIGetBlockCount() |
| APIステータス取得() | `/api/status?q=getDifficulty` | getAPIGetDifficulty() |
| APIステータス取得(上記全て) | (独自追加) | getAPIStatus() |
| Coind同期状態取得 | `/api/sync` | getCoindSync() |

# Donation
_BitZeny_
`Zi7ryQ9xJ9Qxu4jHU5tJNYA4rdzSs2Lmgk`  
_MonaCoin_
`MTAMPypAxdaMHfRQRHrZCVhkp3JqhkDzri`  
_BitCoin_
`1FTx4P9tuko3u8cHnAM23aeEvx7MLpNhwW`
