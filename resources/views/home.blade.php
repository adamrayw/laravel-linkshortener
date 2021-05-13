@extends('layout.template')

@section('title', 'Shortku - Persingkat link anda dengan mudah!')

@section('content')
<section id="header" class="header-container">
    <div class="header">
        <div class="header-title">
            <h1>Copy, Paste, Short it!</h1>
        </div>
        <form action="/generate-link" method="POST">
            @csrf
            <div class="url-field">
                <label for="">
                    <input type="text" name="link" placeholder="Paste your link">
                </label>
            </div>
            @if(Session::has('success'))
            <p style="text-align: center; font-size: 14px;">{{ Session::get('success') }}</p>
            @endif
            <div class="short-btn">
                <button type="submit"><i class="fas fa-link fa-lg"></i> Short Now</button>
                <!-- <button type="submit"><i class="fas fa-link fa-lg"></i> Custom Link</button> -->
            </div>
        </form>
    </div>


</section>
@endSection