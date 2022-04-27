<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use React\Promise\FulfilledPromise;

class TestController extends Controller
{
    public function lessonOne() {
        return 'Моя первая программа';
    }
    public function lessonTow(Request $request) {
        $data = [ ];
        if($request->has('text'))
            $data['text'] = $request->input('text');
        $data['token'] = $request->input('token', 'none-token');
        return $data;
    }

    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }


        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';


        return view('template', compact('detachment', 'user'));
    }

    public function Task1()
    {
        return "Я люблю учится в ЧРТ";
    }
    public function Task2(Request $request)
    {
        if($request->has('name'))
            $name =$request->name;
        return "Меня зовут".$name;
    }
    public function Task3(Request $request)
    {
        if($request->has('name'))
            $name =$request->name;
        if($request->has('food'))
            $food =$request->food;
        return "Меня зовут".$food."И я люблю есть".$food;
    }
    public function Task4()
    {
        $num1 = 1200;
        $num2 = 122;
        return "Сумма числа".$num1."и".$num2."равна".$num1+$num2;
    }
    public function Task5(Request $request)
    {
        if($request->has('num1'))
            $num1 =$request->num1;
        if($request->has('num2'))
            $num2 =$request->num2;
        return "Сумма числа".$num1."и".$num2."равна".$num1+$num2;
    }
    public function Task6(Request $request)
    {
        if($request->has('cipher'))
            if($request->cipher=='keyOneTest')
                return "Я взломал шифр!";
            else
                return "У тебя нет доступа";
    }

    public function ConfidentialityTemplateOne()
    {
        return view('ConfidentialityTemplateOne');
    }

    public function ConfidentialityTemplateTwo()
    {
        $ConfidentialityName = "Политика конфиденциальности персональных данных";
        return view('ConfidentialityTemplateTwo', compact('ConfidentialityName'));
    }

    public function favouriteStringTemplate()
    {
        $Text = "У каждой истории есть начало и конец. У каждой истории есть своя канва, синопсис, содержание, ключевые моменты, прологи и эпилоги. И нет такой книги, в которой при каждом новом прочтении не открывались бы вещи, на которые раньше не обращал внимания. У каждой истории есть начало и конец. Почти у каждой...";
        return view('favouriteString', compact('Text'));
    }

    public function ArrayListTemplate1()
    {
        $arrData = ["JavaScript","PHP","C#","GoLang"];
        return view('ArrayList1', compact('arrData'));
    }

    public function ArrayListTemplate2()
    {
        $arrCalibre = ["5.45x39","5.56x45","7.62x39","7.62x51"];
        return view('ArrayList2', compact('arrCalibre'));
    }

    public function arrayNumbersTemplate()
    {
        $arrNumber = [32, 342, 176, 1, 5, 410, 1487, 882, 1773, 2];
        return view('arrayNumbers', compact('arrNumber'));
    }
}
