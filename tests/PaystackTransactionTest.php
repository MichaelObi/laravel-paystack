<?php
/**
 * Created by PhpStorm.
 * User: MichaelObi
 * Date: 02/01/2017
 * Time: 1:00 AM
 */

namespace Unicodeveloper\Paystack\Test;


use Unicodeveloper\Paystack\PaystackTransaction;
use Mockery as m;
use Unicodeveloper\Paystack\TransRef;


class PaystackTransactionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var PaystackTransaction
     */
    protected $paystackTransaction;

    public function setUp()
    {
        $this->paystackTransaction = new PaystackTransaction(200, "ask4myk@gmail.com", TransRef::getHashedToken());
    }

    public function tearDown()
    {
        m::close();
    }

    public function testTransactionParametersArrayIsReturned() {
        $data = $this->paystackTransaction->toArray();
        $this->assertTrue(is_array($data));
    }
}
