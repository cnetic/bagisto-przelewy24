<?php

namespace CNetic\Przelewy24\Payment;
use Webkul\Payment\Payment\Payment;


/**
 * Przelewy24 payment method class
 *
 * @author    Dariusz Męciński <d.mecinski@cnetic.pl>
 * @copyright 2019 CNetic Sp. z.o.o (http://www.cnetic.pl)
 */
class Przelewy24 extends Payment
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
}
