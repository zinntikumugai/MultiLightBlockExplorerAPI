<?php

use zinntikumugai\MultiLightBlockExplorerAPI\MultiLightBlockExplorerAPI;

class MultiLightBlockExplorerAPITest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    private $case = [
        'mona' => ['Monacoin','MonaCoin','mona'],
        'kuma' => ['Kumacoin','KumaCoin','kuma'],
        'zeny' => ['Bitzeny','BitZeny','zeny'],
        'saya' => ['Sayacoin','SayaCoin','saya'],
        'sha1' => ['SHA1coin','SHA1Coin','sha1'],
        '1337' => ['1337'],
        'ringo' => ['Ringo','ringo'],
        'fuji' => ['Fujicoin','FujiCoin','fuji'],
        'esp2' => ['Esper2','esp2']
    ];

    public function testGetCoin() {
        foreach ($this->case as $crypto => $names) {
            foreach ($names as $name) {
                $MLBE = new MultiLightBlockExplorerAPI($name);
                $this->assertEquals($crypto, $MLBE->getCoin());
            }
        }
    }
}
