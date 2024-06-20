@extends('admin.layout.master')

@section('content')
    <div class="raf-main-box">
        <table class="table table-striped">
            <tr>
                <td>شناسه</td>
                <td>نام و فامیل</td>
                <td>کد ملی</td>
                <td>تلفن</td>
                <td>موقعیت</td>
                <td>جنسیت</td>
                <td>کمیته</td>
                <td>تصویر</td>
                <td>وضعیت</td>
            </tr>
            @foreach($cards as $card)
                <tr>
                    <td>{{$card->id}}</td>
                    <td>{{$card->name . " ". $card->last_name}}</td>
                    <td>{{$card->national_code}}</td>
                    <td>{{$card->phone}}</td>
                    <td>{{$card->location}}</td>
                    <td>{{$card->sex == 'male' ? 'آقا' : 'خانم'}}</td>
                    <td>{{$card->committee}}</td>
                    <td><img style="max-width: 100px" src="{{$card->image ? asset($card->image) : asset('default/no_image.png')}}"  alt="{{$card->name . " ". $card->last_name}}"/></td>
                    <td>{{$card->status ? 'فعال' : 'غیرفعال'}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
