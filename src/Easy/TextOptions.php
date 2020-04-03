<?php

namespace Apility\DIBS\Easy;

/**
 * @property-read string $completePaymentButtonText
 */
class TextOptions extends DIBSEasyType
{
  /** @var array */
  protected $timestamps = [];

  const COMPLETE_PAYMENT_BUTTON_PAY = 'pay';
  const COMPLETE_PAYMENT_BUTTON_SUBSCRIBE = 'subscribe';
  const COMPLETE_PAYMENT_BUTTON_PURCHASE = 'purchase';
  const COMPLETE_PAYMENT_BUTTON_ORDER = 'order';
  const COMPLETE_PAYMENT_BUTTON_BOOK = 'book';
  const COMPLETE_PAYMENT_BUTTON_RESERVE = 'reserve';
  const COMPLETE_PAYMENT_BUTTON_SIGNUP = 'signup';
  const COMPLETE_PAYMENT_BUTTON_ACCEPT = 'accept';
}
