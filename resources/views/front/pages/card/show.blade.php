<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}" />
    <title>{{$card->name." ".$card->last_name}}</title>
</head>
<body>
<main id=app>

    <h1>ستاد انتخابات دکتر پزشکیان - تابستان 1403 </h1>

    <aside class="card-front">
        <label class="number" for="cardNumber">
            نام: {{$card->name." ".$card->last_name}}
        </label>
        <label class="name" for="cardHolder">
             مشگین شهر {{$card->location ? ' - '.$card->location : ''}}
        </label>
        <label class="expiry" for="expiryMonth" >
            {{$card->committee ? 'کمیته '.$card->committee : 'کمیته ی مردمی'}}
        </label>
        <img class="cardLogo" data-v-5d206127="" data-v-8fcb32d4="" style="opacity: 1;" src="{{$card->image ?? asset('front/assets/img/no_image.png')}}">


        <div class="chip">
            <svg role="img" viewBox="0 0 100 100" aria-label="Chip">
                <use href="#chip-lines" />
            </svg>
        </div>
        <svg class="contactless" role="img" viewBox="0 0 24 24" aria-label="Contactless">
            <use href="#contactless">
        </svg>
    </aside>
</main>
<svg id="chip">
    <g id="chip-lines">
        <polyline points="0,50 35,50"></polyline>
        <polyline points="0,20 20,20 35,35"></polyline>
        <polyline points="50,0 50,35"></polyline>
        <polyline points="65,35 80,20 100,20"></polyline>
        <polyline points="100,50 65,50"></polyline>
        <polyline points="35,35 65,35 65,65 35,65 35,35"></polyline>
        <polyline points="0,80 20,80 35,65"></polyline>
        <polyline points="50,100 50,65"></polyline>
        <polyline points="65,65 80,80 100,80"></polyline>
    </g>
</svg>


<svg id="contactless">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M9.172 15.172a4 4 0 0 1 5.656 0"></path>
    <path d="M6.343 12.343a8 8 0 0 1 11.314 0"></path>
    <path d="M3.515 9.515c4.686 -4.687 12.284 -4.687 17 0"></path>
</svg>


</body>
</html>
