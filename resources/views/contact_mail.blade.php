@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => "Welcome $guestName",
        'level' => 'strong',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p class="content-mail">Hi there, thank you for visiting my website and sending your message. Your opinion is very important to me and i'm very appreciate it </p>
        <br>
        <p class="content-mail">I hope we can work together in the future</p><br>
        <p class="content-mail sign">Best Regard</p>
        <p class="content-mail sign">Huy</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
            'title' => 'Click me',
            'link' => 'https://www.facebook.com/huydq2510'
    ])
@stop