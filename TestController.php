<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index($room = "")
  {
    if ($room == "" || !is_numeric($room)) {
      return "建物です";
    } 

    $roomNumber = (int)$room;
    return "部屋番号は" . $roomNumber . "です";
  }
}