<?php

namespace Barion\common;

abstract class PurchaseType
{
    const GoodsAndServicePurchase = "GoodsAndServicePurchase";
    const CheckAcceptance = "CheckAcceptance";
    const AccountFunding = "AccountFunding";
    const QuasiCashTransaction = "QuasiCashTransaction";
    const PrePaidVacationAndLoan = "PrePaidVacationAndLoan";
}
