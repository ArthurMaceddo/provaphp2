@extends('layouts.app')

@section('title', 'Contact')



@section('content')
<div class='page-content'>
    <div class='page-title'>
        <h1>Entre em contato conosco</h1>
    </div>
    <div class='page-info'>
        <div class='main-contact'>
            @component('components.contactform')
            @endcomponent
        </div>
    </div>
</div>
@endsection
