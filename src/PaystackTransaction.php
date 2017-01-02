<?php
/*
 * This file was created by Michael Obi <ask4myk@gmail.com> as part of the Laravel Paystack package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Unicodeveloper\Paystack;

/**
 * Builds a typesafe paystack transaction to be made
 */
class PaystackTransaction
{
    /**
     * Transaction amount
     * @var int
     */
    private $amount;

    /**
     * Unique transaction reference
     * @var string
     */
    private $reference;

    /**
     * The customer's email address.
     * @var string
     */
    private $email;

    /**
     * Plan code for subscription based transactions
     * @var mixed
     */
    private $plan;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * Use this to override the callback url set in the dashboard
     * @var string
     */
    private $callbackUrl;

    /**
     * A Stringified JSON object. Add a custom_fields attribute which has an array of objects if you
     * would like the fields to be added to your transaction when displayed on the dashboard.
     * @var string
     */
    private $metadata;

    /**
     * PaystackTransaction constructor.
     * @param int $amount
     * @param string $reference
     * @param string $email
     * @param mixed $plan
     * @param string $firstName
     * @param string $lastName
     * @param string $callbackUrl
     * @param string $metadata
     */
    public function __construct(
        $amount,
        $email,
        $reference,
        $firstName = null,
        $lastName = null,
        $callbackUrl = null,
        $plan = null,
        $metadata = null
    ) {
        $this->amount = $amount;
        $this->reference = $reference;
        $this->email = $email;
        $this->plan = $plan;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->callbackUrl = $callbackUrl;
        $this->metadata = $metadata;
    }

    public function toArray()
    {
        return [
            'amount' => $this->getAmount(),
            'email' => $this->getEmail(),
            'reference' => $this->getReference(),
            'plan' => $this->getPlan(),
            'metadata' => $this->getMetadata(),
            'callback_url' => $this->getCallbackUrl(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName()
        ];
    }


    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return PaystackTransaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return PaystackTransaction
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return PaystackTransaction
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param mixed $plan
     * @return PaystackTransaction
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param string $metadata
     * @return PaystackTransaction
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     * @return PaystackTransaction
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return PaystackTransaction
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return PaystackTransaction
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

}