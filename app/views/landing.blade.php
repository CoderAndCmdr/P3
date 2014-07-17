@extends ('_master')

@section('title')
Develepor's Best Friend
@stop 

@section('content')
<img class='logo' src='<?php echo URL::asset('images/loremjpg.jpg'); ?>'alt='LoremIpsumGenerator'>
<br>
<br>
<div class='link'>
<a href='/loremipsum'>Generate Lorem Ipsum Text</a>
- Generate five paragraphs of Lorem Ipsum text.
<hr>
<a href='/users'>Generate User data</a>
- Generate the names, addresses, phone numbers, and emails of five random users.
</div>
@stop  

