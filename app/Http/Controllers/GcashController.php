<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GcashController extends Controller
{
   public function store () {
      // Set your X-API-KEY with the API key from the Customer Area.
      $client = new \Adyen\Client();
      $client->setEnvironment(\Adyen\Environment::TEST);
      $client->setXApiKey("YOUR_X-API-KEY");
      $service = new \Adyen\Service\Checkout($client);
      
      $params = array(
         "merchantAccount" => "YOUR_MERCHANT_ACCOUNT",
         "countryCode" => "NL",
         "shopperLocale" => "nl-NL",
         "amount" => array(
            "currency" => "EUR",
            "value" => 1000
         ),
         "channel" => "Web"
      );
      $result = $service->paymentMethods($params);
      
      // Pass the response to your front end
         }
}
