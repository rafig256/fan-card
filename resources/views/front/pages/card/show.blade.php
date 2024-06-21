<div>نام و فامیل: {{$card->name." ".$card->last_name}}</div>
<div>منطقه: {{$card->location}}</div>
<div>جنسیت: {{$card->sex == 'male' ? "آقا" : 'خانم'}}</div>
<div>کد ملی: {{$card->national_code}}</div>
<div>کمیته: {{$card->committee}}</div>
<div>وضعیت: {{$card->status ? 'فعال' : 'غیرفعال'}}</div>
