<?php
  $ch = curl_init();
  $url = "https://demo.yebo-api.com.br/api/v2/products";

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_TIMEOUT, 15);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);
  $json_response = json_decode($response);

  var_dump($json_response->products);

