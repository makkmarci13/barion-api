<?php

namespace Barion\common;

abstract class DeliveryTimeframeType
{
    const ElectronicDelivery = "ElectronicDelivery";
    const SameDayShipping = "SameDayShipping";
    const OvernightShipping = "OvernightShipping";
    const TwoDayOrMoreShipping = "TwoDayOrMoreShipping";
}
