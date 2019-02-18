<p align="center">
  <a href="https://dev.wirecard.com.br/v2.0/">
  <img src="https://res.cloudinary.com/dahromtna/image/upload/v1550171887/WIRECARD_LOGO_RGB.png" alt="wirecard logo" width=300><br><img src="https://res.cloudinary.com/dahromtna/image/upload/v1550251527/iconmonstr-plus-2-72.png" alt="plus" width=30><br>
    <img src="https://res.cloudinary.com/dahromtna/image/upload/v1550170842/php-logo2.png" alt="php logo" width=100>
  </a>
</p>
<p align="center">
    The simplest and fastest way to integrate Wirecard into your PHP application. This SDK is based on the Wirecard APIs.
  
  ---
  
 > Current status 
  
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mariodias/wirecard-sdk-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mariodias/wirecard-sdk-php/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/mariodias/wirecard-sdk-php/badges/build.png?b=master)](https://scrutinizer-ci.com/g/mariodias/wirecard-sdk-php/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/mariodias/wirecard-sdk-php/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Code Climate](https://codeclimate.com/github/mariodias/wirecard-sdk-php/badges/gpa.svg)](https://codeclimate.com/github/mariodias/wirecard-sdk-php)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/9e877cf78f844b9a9e40cec175c3aa5a)](https://www.codacy.com/app/mariodias/wirecard-sdk-php?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=moip/moip-sdk-php&amp;utm_campaign=Badge_Grade)
[![StyleCI](https://styleci.io/repos/171332701/shield)](https://styleci.io/repos/171332701)
 
 > Statistics

  [![Total Downloads](https://poser.pugx.org/mariodias/wirecard-sdk-php/downloads)](https://packagist.org/packages/mariodias/wirecard-sdk-php)
  [![Monthly Downloads](https://poser.pugx.org/mariodias/wirecard-sdk-php/d/monthly)](https://packagist.org/packages/mariodias/wirecard-sdk-php)

  > Versions

  [![Latest Stable Version](https://poser.pugx.org/mariodias/wirecard-sdk-php/v/stable)](https://packagist.org/packages/mariodias/wirecard-sdk-php)
  [![Latest Unstable Version](https://poser.pugx.org/mariodias/wirecard-sdk-php/v/unstable)](https://packagist.org/packages/mariodias/wirecard-sdk-php)

  ---
</p>


## Index
- [Installation](#installation)
- [Authenticating and configuring the environment](#authenticating-and-configuring-the-environment)
- [Wirecard accounts](#wirecard-accounts)
  - [Verifying if user already has Wirecard Account](#verifying-if-user-already-has-wirecard-account)
  - [Create Wirecard account](#create-wirecard-account)
  - [Get data from a wirecard account](#get-data-from-a-wirecard-account)
  - [Get public key from a Wirecard account](#get-public-key-from-a-Wirecard-account)
- [Customers](#customers)
  - [Create customer](#create-customer)
  - [Add credit card to a customer](#add-credit-card-to-a-customer)
  - [Delete credit card](#delete-credit-card)
  - [Get data from a customer](#get-data-from-a-customer)
  - [List all customers](#list-all-customers)
- [Orders](#orders)
  - [Create order](#create-order)
  - [Get data from an order](#get-data-from-an-order)
  - [List all orders](#list-all-orders)
- [Payments](#payments)
  - [Create payment (Credit card)](#create-payment-credit-card)
  - [Create payment (Bank slip)](#create-payment-bank-slip)
  - [Create payment (Online debit)](#create-payment-online-debit)
  - [Capture pre-authorized payment](#capture-pre-authorized-payment)
  - [Cancel pre-authorized payment](#cancel-pre-authorized-payment)
  - [Get data from a payment](#get-data-from-a-payment)
  - [Simulate payments](#simulate-payments)
- [Multiorders](#multiorders)
  - [Create multiorder](#create-multiorder)
  - [Get data from a multiorder](#get-data-from-a-multiorder)
- [Multipayments](#multipayments)
  - [Create multipayment](#create-multipayment)
  - [Get data from a multipayment](#get-data-from-a-multipayment)
  - [Capture pre-authorized multipayment](#capture-pre-authorized-multipayment)
  - [Cancel pre-authorized multipayment](#cancel-pre-authorized-multipayment)
  - [Release an escrow](#release-an-escrow)
- [Notifications](#notifications)
  - [Create notification preference to Wirecard account](#create-notification-preference-to-Wirecard-account)
  - [Create notification preference to APP](#create-notification-preference-to-app)
  - [Get data from a notification preference](#get-data-from-a-notification-preference)
  - [List all notification preferences](#list-all-notification-preferences)
  - [Delete a notification preference](#delete-a-notification-preference)
  - [Get data from a webhook notification](#get-data-from-a-webhook-notification)
  - [List all sent webhooks](#list-all-sent-webhooks)
- [Bank accounts](#bank-accounts)
  - [Create bank account](#create-bank-account)
  - [Get data from a bank account](#get-data-from-a-bank-account)
  - [List all bank accounts](#list-all-bank-accounts)
  - [Delete a bank account](#delete-a-bank-account)
  - [Update a bank account](#update-a-bank-account)
- [Wirecard balances](#wirecard-balances)
  - [Get balances](#get-balances)
- [Entries](#entries)
  - [Get data from an entrie](#get-data-from-an-entrie)
  - [List all entries](#list-all-entries)
- [Statements](#statements)
  - [Get statement](#get-statement)
  - [Get details from a statement](#get-details-from-a-statement)
  - [Get future statement](#get-future-statement)
  - [Get details from a future statement](#get-details-from-a-future-statement)
- [Transfers](#transfers)
  - [Create transfer](#create-transfer)
  - [Revert transfer](#revert-transfer)
  - [Get data from a transfer](#get-data-from-a-transfer)
  - [List all transfers](#list-all-transfers)
- [Refunds](#refunds)
  - [Refund payment](#refund-payment)
  - [Refund order](#refund-order)
  - [Partially refund a transaction](#partially-refund-a-transaction)
  - [Get data from a refund](#get-data-from-a-refund)
  - [List refunds from payment](#list-refunds-from-payment)
  - [List refunds from order](#list-refunds-from-order)
- [Conciliations](#conciliations)
  - [Get sales file](#get-sales-file)
  - [Get financial file](#get-financial-file)
- [Anticipations](#anticipations)
  - [Estimates an anticipation](#estimates-an-anticipation)
  - [Create an anticipation of receivables to a seller](#create-an-anticipation-of-receivables-to-a-seller)
  - [Get data from an anticipation](#get-data-from-an-anticipation)
  - [List all anticipations](#list-all-anticipations)
- [Contribuitors](#contribuitors)
- [License](#license)
- [Support](#support)

## Installation
Run the command to install via [Composer](https://getcomposer.org/):

```SHELL
> composer require mariodias/wirecard-sdk-php
```

## Authenticating and configuring the environment

The authentication is done through the accessToken, [click here](https://dev.wirecard.com.br/v2.0/reference#1-criar-um-app) for information on how to generate your accessToken.
You will need your token and key to create the APP, so to access your token and test key, [click here](https://conta-sandbox.wirecard.com/configurations/api_credentials).
In addition to configuring your authentication, you must also configure your environment (production or sandbox).

```PHP
require 'vendor/autoload.php';
use Wirecard\Wirecard;
use Wirecard\Connect;
use Wirecard\Instances;

$accessToken = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx_v2";

$client = new Connect($accessToken, Wirecard::SANDBOX);
```

After defining the authentication and the environment, you should instantiate the classes:

```PHP
$api = new Instances($client);
```

## Wirecard accounts

In this topic we separate all the information regarding the Wirecard Accounts as creation / query of account and request of permission of access to the users. In addition, in this section you have all the information you need to manage the transactions of users associated with your marketplace.

For more information about this resource, visit our documentation: [Accounts](https://dev.wirecard.com.br/v2.0/reference#classical-account-on-boarding)

#### Verifying if user already has Wirecard Account

The search is done through the user's email.

```PHP
$resource = $api->accounts();

$account = $resource->checkExistence(“darth.vader@deathstar.io”);
```
The callback can be:

http = 200 —> The account exists;<br>
http = 404 —> The account don’t exists.

#### Create Wirecard account

```PHP
$resource = $api->accounts();

$data = [  
   "email"=>[  
      "address"=>"seller@email.io"
   ],
   "person"=>[  
      "name"=>"Seller name",
      "lastName"=>"Seller last name",
      "taxDocument"=>[  
         "type"=>"CPF",
         "number"=>"123.456.798-91"
      ],
      "identityDocument"=>[  
         "type"=>"RG",
         "number"=>"434322344",
         "issuer"=>"SSP",
         "issueDate"=>"2000-12-12"
      ],
      "birthDate"=>"1987-06-14",
      "phone"=>[  
         "countryCode"=>"55",
         "areaCode"=>"11",
         "number"=>"999999999"
      ],
      "address"=>[  
         "street"=>"Av. Paulista",
         "streetNumber"=>"1111",
         "district"=>"Bela Vista",
         "zipCode"=>"01234-000",
         "city"=>"São Paulo",
         "state"=>"SP",
         "country"=>"BRA"
      ]
   ],
   "type"=>"MERCHANT"
];

$account = $resource->create($data);

print_r($account);
```

#### Get data from a wirecard account

```PHP
$resource = $api->accounts();

$account_id = "MPA-XXXXXXXXX”;

$account = $resource->get($account_id);

Print_r($account);
```

#### Get public key from a Wirecard account

You must authenticate with the accessToken of the account that you want to get the public key to use this method.

```PHP
$resource = $api->accounts();

$publicKey = $resource->getPublicKey();

print_r($publicKey);
```

## Customers

Customer is the user of a service or the buyer of your online store. This API allows the registration and consultation of a particular client.

For more information about this resource, visit our documentation: [Customers](https://dev.wirecard.com.br/v2.0/reference#1-clientes)

#### Create customer
```PHP

$resource = $api->customers();

$data = [
  "ownId"=> "customer_ownId",
  "fullname"=> "Customer name",
  "email"=> "customer@email.io",
  "birthDate"=> "1990-10-22",
  "taxDocument"=> [
    "type"=> "CPF",
    "number"=> "22288866644"
  ],
  "phone"=> [
    "countryCode"=> "55",
    "areaCode"=> "11",
    "number"=> "888888888"
  ],
  "shippingAddress"=> [
    "city"=> "São Paulo",
    "complement"=> "10",
    "district"=> "Itaim Bibi",
    "street"=> "Avenida Faria Lima",
    "streetNumber"=> "500",
    "zipCode"=> "01234000",
    "state"=> "SP",
    "country"=> "BRA"
  ]
];

$customer = $resource->create($data);

print_r($customer);
```

#### Add credit card to a customer
```PHP

$resource = $api->customers();


$data = [
  "method"=> "CREDIT_CARD",
  "creditCard"=> [
    "expirationMonth"=> "05",
    "expirationYear"=> "22",
    "number"=> "4012001037141112",
    "cvc"=> "123",
    "holder"=> [
      "fullname"=> "Customer name",
      "birthdate"=> "1990-10-22",
      "taxDocument"=> [
        "type"=> "CPF",
        "number"=> "11111111111"
      ],
      "phone"=> [
        "countryCode"=> "55",
        "areaCode"=> "11",
        "number"=> "777777777"
      ]
    ]
  ]
];

$customer_id = "CUS-XXXXXXXXXXXX”;

$customer = $resource->addCreditCard($customer_id, $data);

print_r($customer);

```

#### Delete credit card
```PHP
$resource = $api->customers();

$creditcard_id = "CRC-XXXXXXXXXXXX”;

$customer = $resource->deleteCreditCard($creditcard_id);

print_r($customer);

```

#### Get data from a customer
```PHP
$resource = $api->customers();

$customer_id = "CUS-XXXXXXXXXXXX”;

$customer = $resource->get($customer_id) ;

print_r($customer);
```

#### List all customers
```PHP
$resource = $api->customers();

$customers = $resource->getCustomers() ;

print_r($customers);
```

## Orders

The Order is the representation of the shopping cart of your site. This API makes it possible to create, query and list orders.

For more information about this resource, visit our documentation: [Orders](https://dev.wirecard.com.br/v2.0/reference#2-pedidos)

#### Create order
```PHP
$resource = $api->orders();

$data = [
  "ownId"=> "order_ownId",
  "amount"=> [
    "currency"=> "BRL",
    "subtotals"=> [
      "shipping"=> 15000
    ]
  ],
  "items"=> [
    [
      "product"=> "Go Pro Hero7",
      "category"=> "CAMERAS",
      "quantity"=> 1,
      "detail"=> "Photo camera, model hero 7, color black",
      "price"=> 280000
    ]
  ],
  "customer"=> [
    "ownId"=> "customer_ownId",
    "fullname"=> "Customer name",
    "email"=> "customer@email.io",
    "birthDate"=> "1980-05-15",
    "taxDocument"=> [
      "type"=> "CPF",
      "number"=> "22222222222"
    ],
    "phone"=> [
      "countryCode"=> "55",
      "areaCode"=> "11",
      "number"=> "666666666"
    ],
    "shippingAddress"=> [
      "street"=> "Av. 23 de Maio",
      "streetNumber"=> 654,
      "complement"=> 12,
      "district"=> "Centro",
      "city"=> "Sao Paulo",
      "state"=> "SP",
      "country"=> "BRA",
      "zipCode"=> "01244500"
    ]
  ]
];

$order = $resource->create($data);

print_r($order);
```

#### Get data from an order
```PHP
$resource = $api->orders();

$order_id = "ORD-XXXXXXXXXXXX”;

$order = $resource->get($order_id);

print_r($order);
```

#### List all orders
```PHP
$resource = $api->orders();

$orders = $resource->getOrders();

print_r($orders);
```

 ## Payments

The Payment is the financial transaction between Customer and Receiver (you!), Whether through a credit card, a bank slip, or other means of payment. This API allows the creation, consultation and listing of payments.

For more information about this resource, visit our documentation: [Payments](https://dev.wirecard.com.br/v2.0/reference#3-pagamentos)

To increase transaction security, the Wirecard API works with the concept of end-to-end encryption. That is, sensitive credit card data is encrypted in client applications (browser, native apps) and is only decrypted on Wirecard servers. This is important to prevent your buyer from being exposed to interception of the message. For more information about the credit card hash, visit our documentation: [Credit card hash](https://dev.wirecard.com.br/v2.0/reference#criptografia-1)

 #### Create payment (Credit card)
 ```PHP
$resource = $api->payments();

$data = [
  "installmentCount"=> 1,
  "statementDescriptor"=> "your store name",
  "fundingInstrument"=> [
    "method"=> "CREDIT_CARD",
    "creditCard"=> [
      "hash"=> "HhL0kbhfid+jwgj5l6Kt9EPdetDxQN8s7uKUHDYxDC/XoULjzik44rSda3EcWuOcL17Eb8JjWc1JI7gsuwg9P0rJv1mJQx+d3Dv1puQYz1iRjEWWhnB1bw0gTvnnC/05KbWN5M8oTiugmhVK02Rt2gpbcTtpS7VWyacfgesBJFavYYMljYg8p2YGHXkXrMuQiOCeemKLk420d0OTMBba27jDVVJ663HZDrObnjFXJH/4B5irkj+HO5genV+V4PYoLcOESG4nrI3oFAsMGsLLcdJo0NNvkEmJpn0e9GzureKKFYisYU+BEd9EMr/odS0VMvOYRV65HbPTspIkjl2+3Q==",
      "store"=> true,
      "holder"=> [
        "fullname"=> "Card holder name",
        "birthdate"=> "1988-12-30",
        "taxDocument"=> [
          "type"=> "CPF",
          "number"=> "33333333333"
        ],
        "phone"=> [
          "countryCode"=> "55",
          "areaCode"=> "11",
          "number"=> "888888888"
          ]
        ]
      ]
    ]
  ];

$payment = $resource->create($order_id, $data);

print_r($payment);
```

#### Create payment (Bank slip)

```PHP
$resource = $api->payments();

$data = [  
   "statementDescriptor"=>"Your store name",
   "fundingInstrument"=>[  
      "method"=>"BOLETO",
      "boleto"=>[  
         "expirationDate"=>"2020-06-20",
         "instructionLines"=>[  
            "first"=>"Attention,",
            "second"=>"Be aware of the ticket due date.",
            "third"=>"Pay at any bank."
         ],
         "logoUri"=>"http=>//www.yourlogo.io/logo.jpg"
      ]
   ]
];

$payment = $resource->create($order_id, $data);

print_r($payment);
```
#### Create payment (Online debit)

**Important** - For now this form of payment can only be used with Itaú bank, code 341.

```PHP
$resource = $api->payments();

$data = [  
   "fundingInstrument"=>[  
      "method"=>"ONLINE_BANK_DEBIT",
      "onlineBankDebit"=>[  
         "bankNumber"=>341,
         "expirationDate"=>"2022-11-22"
      ]
   ]
];

$payment = $resource->create($order_id, $data);

print_r($payment);
```

#### Capture pre-authorized payment

The Pre-authorization is a feature that allows you to "reserve" an amount of a customer's card limit for later capture. This can be used to increase anti-fraud analysis time (if you have a tool of your own). Each pre-authorization can be held for up to 5 days and, if the catch does not occur, the payment will be canceled.

This API allows you to capture a payment that is pre-authorized on Wirecard. So you can pre-authorize use the *delayCapture* attribute when creating a payment. You can only capture a payment that has *PRE_AUTHORIZED* status.

For more information about this resource, visit our documentation: [Pre-authorization](https://dev.wirecard.com.br/v2.0/reference#pagamento-pr%C3%A9-autorizado)

```PHP
$resource = $api->payments();

$payment_id = "PAY-XXXXXXXXXXXX”;

$payment = $resource->capture($payment_id);

print_r($payment);
```

#### Cancel pre-authorized payment
```PHP
$resource = $api->payments();

$payment_id = "PAY-XXXXXXXXXXXX”;

$payment = $resource->void($payment_id);

print_r($payment);
```

#### Get data from a payment
```PHP
$resource = $api->payments();

$payment_id = "PAY-XXXXXXXXXXXX”;

$payment = $resource->get($payment_id);

print_r($payment);
```

#### Simulate payments

*You can only simulate payments in the sandbox environment.*

```PHP
$resource = $api->payments();

$payment_id = "PAY-XXXXXXXXXXXX”;
$value = 10000;

$payment = $resource->simulate($payment_id, $value);

print_r($payment);
```

## Multiorders

The Multi-Order is a collection of orders. Used to enable transactions involving orders to different shopkeepers in the same shopping cart. By charging a multi-order with a single consumer interaction, Wirecard generates multiple payments (eg multiple charges on the customer card) and associates with each order, facilitating the management of marketplaces and platforms.

For more information about this resource, visit our documentation: [Multiorders](https://dev.wirecard.com.br/v2.0/reference#4-multipedidos)

#### Create multiorder
```PHP
$resource = $api->multiorders();

$data = [
  "ownId"=> "multiorder_ownId",
  "orders"=> [
    [
      "ownId"=> "order_ownId_1",
      "amount"=> [
        "currency"=> "BRL",
        "subtotals"=> [
          "shipping"=> 2000
        ]
      ],
      "items"=> [
        [
           "product"=> "Go Pro Hero7",
           "category"=> "CAMERAS",
           "quantity"=> 1,
           "detail"=> "Photo camera, model hero 7, color black",
           "price"=> 280000
        ]
      ],
      "customer"=> [
        "ownId"=> "customer_ownId",
        "fullname"=> "",
        "email"=> "customer@email.io",
        "birthDate"=> "1988-12-30",
        "taxDocument"=> [
          "type"=> "CPF",
          "number"=> "22222222222"
        ],
        "phone"=> [
          "countryCode"=> "55",
          "areaCode"=> "11",
          "number"=> "66778899"
        ],
        "shippingAddress"=>
          [
            "street"=> "Avenida Faria Lima",
            "streetNumber"=> 2927,
            "complement"=> 8,
            "district"=> "Itaim",
            "city"=> "Sao Paulo",
            "state"=> "SP",
            "country"=> "BRA",
            "zipCode"=> "01234000"
          ]
      ],
      "receivers"=> [
        [
          "WirecardAccount"=> [
            "id"=> "MPA-IFYRB1HBL73Z"
          ],
          "type"=> "PRIMARY"
        ]
      ]
    ],
    [
      "ownId"=> "order_ownId_2",
      "amount"=> [
        "currency"=> "BRL",
        "subtotals"=> [
          "shipping"=> 3000
        ]
      ],
      "items"=> [
        [
          "product"=> "Go Pro Hero5",
           "category"=> "CAMERAS",
           "quantity"=> 1,
           "detail"=> "Photo camera, model hero 5, color white",
           "price"=> 180000
        ]
      ],
      "customer"=> [
        "ownId"=> "customer_ownId",
        "fullname"=> "Joao Sousa",
        "email"=> "customer@email.io",
        "birthDate"=> "1988-12-30",
        "taxDocument"=> [
          "type"=> "CPF",
          "number"=> "22222222222"
        ],
        "phone"=> [
          "countryCode"=> "55",
          "areaCode"=> "11",
          "number"=> "66778899"
        ],
        "shippingAddress"=>
          [
            "street"=> "Avenida Faria Lima",
            "streetNumber"=> 2927,
            "complement"=> 8,
            "district"=> "Itaim",
            "city"=> "Sao Paulo",
            "state"=> "SP",
            "country"=> "BRA",
            "zipCode"=> "01234000"
          ]
      ],
      "receivers"=> [
        [
          "WirecardAccount"=> [
            "id"=> "MPA-IFYRB1HBL73Z"
          ],
          "type"=> "PRIMARY"
        ],
        [
          "WirecardAccount"=> [
            "id"=> "MPA-KQB1QFWS6QNM"
          ],
          "type"=> "SECONDARY",
          "feePayor"=> false,
          "amount"=> [
            "fixed"=> 55
          ]
        ]
      ]
    ]
  ]
];

$multiorder = $resource->create($data);

print_r($multiorder);
```

#### Get data from a multiorder
```PHP
$resource = $api->multiorders();

$$multiorder_id = "MOR-XXXXXXXXXXXX”;

$multiorder = $resource->get($multiorder_id);

print_r($multiorder);
```

## Multipayments

The Multipayment is a collection of payments associated with a multi-order. Used for the implementation of trolleys with more than one shopkeeper and situations where it is necessary to charge differently different items within a single checkout. When you create a multi-pay, Wirecard automatically creates a payment for each order in the multi-order and automatically charges.

In case of credit card, multiple authorizations are generated, one for each payment, separating the charges in the invoice of the customer and with that facilitating the management of the Marketplace or Platform.

For more information about this resource, visit our documentation: [Multipayments](https://dev.wirecard.com.br/v2.0/reference#multipagamentos-1)

#### Create multipayment
```PHP
resource = $api->multipayments();

$data = [
  "installmentCount"=> 1,
  "statementDescriptor"=> "Your store name",
  "fundingInstrument"=> [
    "method"=> "CREDIT_CARD",
    "creditCard"=> [
      "hash"=> "HhL0kbhfid+jwgj5l6Kt9EPdetDxQN8s7uKUHDYxDC/XoULjzik44rSda3EcWuOcL17Eb8JjWc1JI7gsuwg9P0rJv1mJQx+d3Dv1puQYz1iRjEWWhnB1bw0gTvnnC/05KbWN5M8oTiugmhVK02Rt2gpbcTtpS7VWyacfgesBJFavYYMljYg8p2YGHXkXrMuQiOCeemKLk420d0OTMBba27jDVVJ663HZDrObnjFXJH/4B5irkj+HO5genV+V4PYoLcOESG4nrI3oFAsMGsLLcdJo0NNvkEmJpn0e9GzureKKFYisYU+BEd9EMr/odS0VMvOYRV65HbPTspIkjl2+3Q==",
      "store"=> true,
      "holder"=> [
        "fullname"=> "Card holder name",
        "birthdate"=> "1988-12-30",
        "taxDocument"=> [
          "type"=> "CPF",
          "number"=> "33333333333"
        ],
        "phone"=> [
          "countryCode"=> "55",
          "areaCode"=> "11",
          "number"=> "66778899"
        ]
      ]
    ]
  ]
];

$multipayment = $resource->create($multiorder_id, $data);

print_r($multipayment);
```

#### Get data from a multipayment

```PHP
$resource = $api->multipayments();

$multipayment_id = “MPY-XXXXXXXXXXXX”;

$multipayment = $resource->get($multipayment_id);

print_r($multipayment);
```

#### Capture pre-authorized multipayment
```PHP
$resource = $api->multipayments();

$multipayment_id = “MPY-XXXXXXXXXXXX”;

$payment = $resource->capture($multipayment_id);

print_r($multipayment);
```

#### Cancel pre-authorized multipayment
```PHP
$resource = $api->multipayments();

$multipayment_id = “MPY-XXXXXXXXXXXX”;

$multipayment = $resource->void($multipayment_id);

print_r($multipayment);
```

#### Release an escrow
```PHP
$resource = $api->multipayments();

$escrow_id = “ECW-XXXXXXXXXXXX”;

$escrow = $resource->release($escrow_id);

print_r($escrow);
```

## Notifications

The Webhooks are the notifications sent by Wirecard to your system every time your transaction goes through an event and has its status changed. Therefore, through webhooks it is possible to synchronize your system to Wirecard.

For more information about this resource, visit our documentation: [Webhooks](https://dev.wirecard.com.br/v2.0/reference#notifica%C3%A7%C3%B5es)

If you do not have a URL available, you can use a **Webhook Tester** to do your tests and receive the webhooks.

To do this, access this [application](https://webhook.site) and generate a URL automatically.

#### Create notification preference to Wirecard account
```PHP
$resource = $api->notificationPreferences();

$data = [
  "events"=> [
    "ORDER.*",
    "PAYMENT.AUTHORIZED",
    "PAYMENT.CANCELLED"
  ],
  "target"=> "http=>//requestb.in/1dhjesw1",
  "media"=> "WEBHOOK"
];

$preferences = $resource->create($data);

print_r($preferences);
```

#### Create notification preference to APP

```PHP
$resource = $api->notificationPreferences();

$data = [
  "events"=> [
    "ORDER.*",
    "PAYMENT.AUTHORIZED",
    "PAYMENT.CANCELLED"
  ],
  "target"=> "http=>//requestb.in/1dhjesw1",
  "media"=> "WEBHOOK"
];

$app_id = “APP-XXXXXXXXXXXX”;

$preferences = $resource->createPreferenceToApp($app_id, $data);

print_r($preferences);
```
#### Get data from a notification preference

```PHP
$resource = $api->notificationPreferences();

$preference_id = “NPR-XXXXXXXXXXXX”;

$preference = $resource->get($preference_id);

print_r($preference);
```

#### List all notification preferences
```PHP
$resource = $api->notificationPreferences();

$preferences = $resource->getPreferences();

print_r($preferences);
```

#### Delete a notification preference
```PHP
$resource = $api->notificationPreferences();

$preference_id = “NPR-XXXXXXXXXXXX”;

$preference = $resource->delete($preference_id);

print_r($preference);
```

#### Get data from a webhook notification

The webhooks can be listed through the id of the resource used (orders, payments, refunds…).

```PHP
$resource = $api->webhooks();

$resource_id = “ORD-XXXXXXXXXXXX”;

$webhook = $resource->get($resource_id);

print_r($webhook);
```

#### List all sent webhooks

```PHP
$resource = $api->webhooks();

$webhooks = $resource->getNotifications();

print_r($webhooks);
```

## Bank accounts

The Bank Account is the bank domicile of a particular Wirecard Account. This API allows you to create, query and change the data of a Bank Account.

For more information about this resource, visit our documentation: [Bank Accounts](https://dev.wirecard.com.br/v2.0/reference#contas-banc%C3%A1rias-1)

#### Create bank account
```PHP
$resource = $api->bankAccounts();

$data = [
    "bankNumber"=> "237",
    "agencyNumber"=> "12345",
    "agencyCheckNumber"=> "0",
    "accountNumber"=> "12345678",
    "accountCheckNumber"=> "7",
    "type"=> "CHECKING",
    "holder"=> [
        "taxDocument"=> [
            "type"=> "CPF",
            "number"=> "622.134.533-22"
        ],
        "fullname"=> "Wirecard Client"
    ]
];

$account_id = “MPA-XXXXXXXXXXXX”;

$bankAccount = $resource->create($account_id, $data);

print_r($bankAccount);
```

#### Get data from a bank account

```PHP
$resource = $api->bankAccounts();

$bank_account_id = “BKA-XXXXXXXXXXXX”;

$bankAccount = $resource->get($bank_account_id);

print_r($bankAccount);
```

#### List all bank accounts

```PHP
$resource = $api->bankAccounts();

$account_id = “MPA-XXXXXXXXXXXX”;
$bankAccounts = $resource->getBankAccounts($account_id);

print_r($bankAccounts);
```

#### Delete a bank account

```PHP
$resource = $api->bankAccounts();

$bank_account_id = “BKA-XXXXXXXXXXXX”;

$bankAccount = $resource->delete($bank_account_id);

print_r($bankAccount);
```

#### Update a bank account

```PHP
$resource = $api->bankAccounts();

$data = [
    "bankNumber"=> “341”,
    "agencyNumber"=> “88888”,
    "agencyCheckNumber"=> “1”,
    "accountNumber"=> “998788”,
    "accountCheckNumber"=> “3”,
    "type"=> "CHECKING",
    "holder"=> [
        "taxDocument"=> [
            "type"=> "CPF",
            "number"=> "622.134.533-22"
        ],
        "fullname"=> "Wirecard Client"
    ]
];

$bank_account_id = “BKA-XXXXXXXXXXXX”;

$newBankAccount = $resource->update($bank_account_id, $data);

print_r($newBankAccount);
```

## Wirecard Balances

The Balance is the composition of the current available, unavailable (locked) and future values of a particular Wirecard Account.

For more information about this resource, visit our documentation: [Balances](https://dev.wirecard.com.br/v2.0/reference#saldo-moip-1)

#### Get balances

```PHP
$resource = $api->accounts();

$balance = $resource->getBalances();

Print_r($balance);
```

## Entries

The Entries is a credit or debit in the statement or future account balance of a recipient. It is generated when a payment is authorized, a refund is made or in any other situation where transactions occur in a merchant account.

For more information about this resource, visit our documentation: [Entries](https://dev.wirecard.com.br/v2.0/reference#11-extrato)

#### Get data from an entrie

```PHP
$resource = $api->entries();

$entrie_id = “ENT-XXXXXXXXXXXX”;

$entrie = $resource->get($entrie_id);

Print_r($entrie);
```

#### List all entries

```PHP
$resource = $api->entries();

$entries = $resource->getEntries();

Print_r($entries);
```

## Statements

The Statement is a consolidation of the postings of an account grouped by day and by type.

For more information about this resource, visit our documentation: [Statements](https://dev.wirecard.com.br/v2.0/reference#11-extrato)

#### Get statement

```PHP
$resource = $api->statements();

$begin = ‘2019-01-01’;

$end = ‘2019-02-01’;

$statement = $resource->getStatementList($begin, $end);

Print_r($statement);
```

#### Get details from a statement

```PHP
$resource = $api->statements();

$type = 1;

$date = ‘2019-01-01’;

$statementDetails = $resource->getStatementDetails($type, $date);

Print_r($statementDetails);
```

#### Get future statement

```PHP
$resource = $api->statements();

$begin = ‘2019-02-01’;

$end = ‘2019-03-01’;

$futureStatement = $resource->getFutureStatementList($begin, $end);

Print_r($futureStatement);
```

#### Get details from a future statement

```PHP
$resource = $api->statements();

$type = 1;

$date = ‘2019-03-01’;

$futureStatementDetails = $resource->getFutureStatementDetails($type, $date);

Print_r($futureStatementDetails);
```

Statement type, available in the [statement types](https://dev.wirecard.com.br/v2.0/reference#tipos-de-lan%C3%A7amentos)

## Transfers

The Transfer is a transfer of funds between a Wirecard Account and another payment account (it can be a Bank Account or a certain Wirecard Account).

For more information about this resource, visit our documentation: [Transfers](https://dev.wirecard.com.br/v2.0/reference#transfer%C3%AAncias-1)

#### Create transfer

```PHP
$resource = $api->transfers();

$data = [
    "amount"=> 500,
    "transferInstrument"=> [
        "method"=> "BANK_ACCOUNT",
        "bankAccount"=> [
            "type"=> "CHECKING",
            "bankNumber"=> "001",
            "agencyNumber"=> "1111",
            "agencyCheckNumber"=> "2",
            "accountNumber"=> "9999",
            "accountCheckNumber"=> "8",
            "holder"=> [
                "fullname"=> "Bank account holder name",
                "taxDocument"=> [
                    "type"=> "CPF",
                    "number"=> "22222222222"
                ]
            ]
        ]
    ]
];

$transfer = $resource->create($data);

print_r($transfer);
```

#### Revert transfer

```PHP
$resource = $api->transfers();

$transfer_id = “TRA-XXXXXXXXXXXX”;

$transfer = $resource->revert($transfer_id);

print_r($transfer);
```

#### Get data from a transfer

```PHP
$resource = $api->transfers();

$transfer_id = “TRA-XXXXXXXXXXXX”;

$transfer = $resource->get($transfer_id);

print_r($transfer);
```

#### List all transfers

```PHP
$resource = $api->transfers();

$transfers = $resource->getTransfers();

print_r($transfers);
```

## Refunds

Is there a problem and need to cancel the purchase for your customer? No problems!

Refund is the return of a payment to the consumer. Through this API you can make refunds and see the details of a certain refund.

For more information about this resource, visit our documentation: [Refunds](https://dev.wirecard.com.br/v2.0/reference#reembolsos-1)

The fundamental difference between a refund and a reimbursement is the form of payment in which the transaction was processed. Transactions processed via credit cards, in the event of cancellation, generate a direct chargeback on the buyer's invoice, transactions made via bank or debit account, generate a refund to Wirecard account or buyer's bank account.

#### Refund payment

```PHP
$resource = $api->refunds();

$payment_id = “PAY-XXXXXXXXXXXX”;

$refund = $resource->refundPayment($payment_id);

print_r($refund);
```

#### Refund order

```PHP
$resource = $api->refunds();

$data = [
  "refundingInstrument"=> [
    "method"=> "BANK_ACCOUNT",
    "bankAccount"=> [
      "type"=> "CHECKING",
      "bankNumber"=> "001",
      "agencyNumber"=> 4444444,
      "agencyCheckNumber"=> 2,
      "accountNumber"=> 1234,
      "accountCheckNumber"=> 1,
      "holder"=> [
        "fullname"=> "Customer name",
        "taxDocument"=> [
          "type"=> "CPF",
          "number"=> "22222222222"
        ]
      ]
    ]
  ]
];

$order_id = “ORD-XXXXXXXXXXXX”;

$refund = $resource->create($order_id, $data);

print_r($refund);
```

#### Partially refund a transaction

It's possible refund partially a payment, it can be done through definition of the value that will be refunded.

```PHP
$resource = $api->refunds();

$data = [
"amount" => 2000
];

$payment_id = “PAY-XXXXXXXXXXXX”;

$refund = $resource->create($payment_id, $data);

print_r($refund);
```

#### Get data from a refund

```PHP
$resource = $api->refunds();

$refund_id = “REF-XXXXXXXXXXXX”;

$refund = $resource->get($refund_id);

print_r($refund);
```

#### List refunds from payment

```PHP
$resource = $api->refunds();

$payment_id = “PAY-XXXXXXXXXXXX”;

$refunds = $resource->listPaymentRefunds($payment_id);

print_r($refunds);
```

#### List refunds from order

```PHP
$resource = $api->refunds();

$order_id = “ORD-XXXXXXXXXXXX”;

$refunds = $resource->listOrderRefunds($order_id);

print_r($refunds);
```

## Conciliations

This API is responsible for generating your financial reconciliation.

**Important** - By default, Conciliation is disabled in your Wirecard account and you can not use it in a sandbox environment.
To access Conciliation in your account, please contact integracao@moip.com.br.

For more information about this resource, visit our documentation: [Conciliations](https://dev.wirecard.com.br/v2.0/reference#concilia%C3%A7%C3%A3o-2)

#### Get sales file

```PHP
$resource = $api->conciliations();

$date = “20190101”;

$sales = $resource->getSalesFile($date);

print_r($sales);
```

#### Get financial file
```PHP
$resource = $api->conciliations();

$date = “2019-01-01”;

$financial = $resource->getFinancialFile($date);

print_r($financial);
```

## Anticipations

The anticipation API is used to anticipate receivables from your Wirecard account.

#### Estimates an anticipation

```PHP
$resource = $api->anticipations();

$amount = 10000;

$estimates = $resource->estimates($amount);

print_r($estimates);
```

#### Create an anticipation of receivables to a seller

```PHP
$resource = $api->anticipations();

$amount = 10000;

$anticipation = $resource->create($amount);

print_r($anticipation);
```

#### Get data from an anticipation

```PHP
$resource = $api->anticipations();

$anticipation_id = “ANT-XXXXXXXXXXXX”;

$anticipation = $resource->get($anticipation_id);

print_r($anticipation);
```

#### List all anticipations

```PHP
$resource = $api->anticipations();

$anticipations = $resource->getAnticipations();

print_r($anticipations);
```

## Contribuitors

This project exists thanks to all the people who contribute. :rocket: :rocket: :rocket: :rocket: :rocket: :rocket: <br> [[Click here](CONTRIBUTING.md)] to access our contributing guidelines.


## License

[The MIT License](https://github.com/mariodias/wirecard-sdk-php/blob/master/LICENSE)

## Support

Questions? Talk with us on [Slack](https://slackin-cqtchmfquq.now.sh) [![Slack](https://user-images.githubusercontent.com/4432322/37355972-ba0e9f32-26c3-11e8-93d3-39917eb24109.png)](https://slackin-cqtchmfquq.now.sh)
