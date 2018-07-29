<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home()
    {
      return '主页';
    }

    public function banner()
    {
      $data = ['banners'=>[]];

      $item1 = [
      'businessId' => 1,
      'picUrl' => "../../images/product/1.jpg"];
      array_push($data['banners'], $item1);

      $item2 = [
      'businessId' => 2,
      'picUrl' => "../../images/product/2.jpg"];
      array_push($data['banners'],  $item2);

      $item3 = [
      'businessId' => 3,
      'picUrl' => "../../images/product/1.jpg"];
      array_push($data['banners'],  $item3);
      return view('test.test');
//      return response()->json($data);
    }

    public function goods()
    {
      $goods =  [];
      $item4 = [
        "id" => 4,
        "name" => "阳澄湖大闸蟹-步步高升",
        "pic" => "../../images/product/1.jpg",
        "detail" => "3.5两公蟹*5只+2.5两母蟹*5只",
        "minPrice" => 50,
        "originalPrice" => 75
      ];
      array_push($goods, $item4);
      $item5 = [
        "id" => 5,
        "name" => "阳澄湖大闸蟹-步步高升",
        "pic" => "../../images/product/1.jpg",
        "detail" => "3.5两公蟹*5只+2.5两母蟹*5只",
        "minPrice" => 50,
        "originalPrice" => 75
      ];
      array_push($goods,$item5);
      $item6 = [
        "id" => 6,
        "name" => "阳澄湖大闸蟹-步步高升",
        "pic" => "../../images/product/1.jpg",
        "detail" => "3.5两公蟹*5只+2.5两母蟹*5只",
        "minPrice" => 50,
        "originalPrice" => 75
      ];
      array_push($goods,$item6);
      $item7 = [
        "id" => 7,
        "name" => "阳澄湖大闸蟹-步步高升",
        "pic" => "../../images/product/1.jpg",
        "detail" => "3.5两公蟹*5只+2.5两母蟹*5只",
        "minPrice" => 50,
        "originalPrice" => 75
      ];
      array_push($goods,$item7);
      return  response()->json($goods);
    }
}
