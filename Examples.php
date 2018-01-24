<?php
require_once __DIR__ .'/MultiLightBlockExplorerAPI.php';

$MLBE = new MultiLightBlockExplorerAPI('BitZeny');
var_dump([
/*
    'getBlock' =>$MLBE->getBlock('000000003253d1aafab7f245994e0268409a61964fc05b43feb99e8067b87e9f'),
    'getBlockIndex' =>$MLBE->getBlockIndex('1117227'),
    'getTx' =>$MLBE->getTx('bf5a5c967f97a45f2b0fba95f21b1e143e937fdafcd465a20dc4715d9d60804b'),
    'getRawTx' =>$MLBE->getRawTx('bf5a5c967f97a45f2b0fba95f21b1e143e937fdafcd465a20dc4715d9d60804b'),
    'getAddrValidate' =>$MLBE->getAddrValidate('ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr'),
    'getAddr' =>$MLBE->getAddr('ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr'),
    'getAddrBalance' =>$MLBE->getAddrBalance('ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr'),
    'getAddrTotalRecived' =>$MLBE->getAddrTotalRecived('ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr'),
    'getAddrTotalSent' =>$MLBE->getAddrTotalSent('ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr'),
    'getAddrUnconfirmedBalance' =>$MLBE->getAddrUnconfirmedBalance('ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr'),
    'getAddrUtxo' =>$MLBE->getAddrUtxo('ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr'),

    'getAddrUtxo1' =>$MLBE->getAddrUtxo('ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr'),
    'getAddrUtxo2' =>$MLBE->getAddrUtxo('ZmXbmQEjG7zZMbuxLsBnCfLrPTjzbTcxX9'),
    'getAddrsUtxos' =>$MLBE->getAddrsUtxos(['ZyYnLrFLpVWfMCinTezUtsJPjYmX8zVFpr','ZmXbmQEjG7zZMbuxLsBnCfLrPTjzbTcxX9']),

    'getBlockTxid' =>$MLBE->getBlockTxid('000000003253d1aafab7f245994e0268409a61964fc05b43feb99e8067b87e9f'),
    'getAddrTxid' =>$MLBE->getAddrTxid('ZmXbmQEjG7zZMbuxLsBnCfLrPTjzbTcxX9'),

    'getAPIGetInfo' => $MLBE->getAPIGetInfo(),
    'getAPIGetBlockCount' => $MLBE->getAPIGetBlockCount(),
    'getAPIGetDifficulty' => $MLBE->getAPIGetDifficulty(),
    'getAPIStatus' => $MLBE->getAPIStatus(),
    */
    'getCoindSync' => $MLBE->getCoindSync()
]);
?>
