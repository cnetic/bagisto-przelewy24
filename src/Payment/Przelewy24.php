<?php

namespace CNetic\Przelewy24\Payment;

use Webkul\Payment\Payment\Payment;
use CNetic\Payment\Contracts\PaymentContract;

/**
 * Przelewy24 payment method class
 *
 * @author    Dariusz Męciński <d.mecinski@cnetic.pl>
 * @copyright 2019 CNetic Sp. z.o.o (http://www.cnetic.pl)
 */
class Przelewy24 extends Payment implements PaymentContract
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'przelewy24_standard';

    public function getRedirectUrl()
    {
        return route('przelewy24.standard.redirect');
    }

    public function testApi()
    {
        // code...
    }

    public function testSandbox()
    {
        // code...
    }
}
