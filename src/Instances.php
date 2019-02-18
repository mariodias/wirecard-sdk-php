<?php

namespace Wirecard;

use Wirecard\Contracts\WirecardClient;
use Wirecard\Resources\Accounts;
use Wirecard\Resources\Anticipations;
use Wirecard\Resources\BankAccounts;
use Wirecard\Resources\Conciliations;
use Wirecard\Resources\Customers;
use Wirecard\Resources\Entries;
use Wirecard\Resources\Multiorders;
use Wirecard\Resources\Multipayments;
use Wirecard\Resources\NotificationPreferences;
use Wirecard\Resources\Orders;
use Wirecard\Resources\Payments;
use Wirecard\Resources\Refunds;
use Wirecard\Resources\Statements;
use Wirecard\Resources\Transfers;
use Wirecard\Resources\Webhooks;

/**
 * Class Instances.
 */
class Instances
{
    /**
     * @var stdClass.
     */
    protected $client;

    /**
     * @var stdClass Customers.
     */
    protected $customers;

    /**
     * @var stdClass Orders.
     */
    protected $orders;

    /**
     * @var stdClass Payments.
     */
    protected $payments;

    /**
     * @var stdClass Refunds.
     */
    protected $refunds;

    /**
     * @var stdClass NotificationPreferences.
     */
    protected $notificationPreferences;

    /**
     * @var stdClass Webhooks.
     */
    protected $webhooks;

    /**
     * @var stdClass Accounts.
     */
    protected $accounts;

    /**
     * @var stdClass Anticipations.
     */
    protected $anticipations;

    /**
     * @var stdClass BankAccounts.
     */
    protected $bankAccounts;

    /**
     * @var stdClass Conciliations.
     */
    protected $conciliations;

    /**
     * @var stdClass Entries.
     */
    protected $entries;

    /**
     * @var stdClass Multiorders.
     */
    protected $multiorders;

    /**
     * @var stdClass Multipayments.
     */
    protected $multipayments;

    /**
     * @var stdClass Statements.
     */
    protected $statements;

    /**
     * @var stdClass Transfers.
     */
    protected $transfers;

    /**
     * @param sdtClass WirecardClient.
     */
    public function __construct(WirecardClient $client)
    {
        $this->client = $client;
        $this->customers = new Customers($this->client);
        $this->orders = new Orders($this->client);
        $this->payments = new Payments($this->client);
        $this->refunds = new Refunds($this->client);
        $this->notificationPreferences = new NotificationPreferences($this->client);
        $this->webhooks = new Webhooks($this->client);
        $this->accounts = new Accounts($this->client);
        $this->anticipations = new Anticipations($this->client);
        $this->bankAccounts = new BankAccounts($this->client);
        $this->conciliations = new Conciliations($this->client);
        $this->entries = new Entries($this->client);
        $this->multiorders = new Multiorders($this->client);
        $this->multipayments = new Multipayments($this->client);
        $this->statements = new Statements($this->client);
        $this->transfers = new Transfers($this->client);
    }

    /**
     * Create a new Customer instance.
     *
     * @return \Wirecard\Resources\Customers
     */
    public function customers()
    {
        return $this->customers;
    }

    /**
     * Create a new Order instance.
     *
     * @return \Wirecard\Resources\Orders
     */
    public function orders()
    {
        return $this->orders;
    }

    /**
     * Create a new Payment instance.
     *
     * @return \Wirecard\Resources\Payments
     */
    public function payments()
    {
        return $this->payments;
    }

    /**
     * Create a new Refund instance.
     *
     * @return \Wirecard\Resources\Refunds
     */
    public function refunds()
    {
        return $this->refunds;
    }

    /**
     * Create a new Notification Preference instance.
     *
     * @return \Wirecard\Resources\NotificationPreferences
     */
    public function notificationPreferences()
    {
        return $this->notificationPreferences;
    }

    /**
     * Create a new Webhook instance.
     *
     * @return \Wirecard\Resources\Webhooks
     */
    public function webhooks()
    {
        return $this->webhooks;
    }

    /**
     * Create a new Account instance.
     *
     * @return \Wirecard\Resources\Accounts
     */
    public function accounts()
    {
        return $this->accounts;
    }

    /**
     * Create a new Anticipation instance.
     *
     * @return \Wirecard\Resources\Anticipations
     */
    public function anticipations()
    {
        return $this->anticipations;
    }

    /**
     * Create a new Bank Account instance.
     *
     * @return \Wirecard\Resources\BankAccounts
     */
    public function bankAccounts()
    {
        return $this->bankAccounts;
    }

    /**
     * Create a new Conciliation instance.
     *
     * @return \Wirecard\Resources\Conciliation
     */
    public function conciliations()
    {
        return $this->conciliations;
    }

    /**
     * Create a new Entrie instance.
     *
     * @return \Wirecard\Resources\Entries
     */
    public function entries()
    {
        return $this->entries;
    }

    /**
     * Create a new Multiorder instance.
     *
     * @return \Wirecard\Resources\Multiorders
     */
    public function multiorders()
    {
        return $this->multiorders;
    }

    /**
     * Create a new Multipayment instance.
     *
     * @return \Wirecard\Resources\Multipayments
     */
    public function multipayments()
    {
        return $this->multipayments;
    }

    /**
     * Create a new Statement instance.
     *
     * @return \Wirecard\Resources\Statements
     */
    public function statements()
    {
        return $this->statements;
    }

    /**
     * Create a new Transfer instance.
     *
     * @return \Wirecard\Resources\Transfers
     */
    public function transfers()
    {
        return $this->transfers;
    }
}
