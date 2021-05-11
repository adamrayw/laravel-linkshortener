@extends('layout.template')

@section('title', 'Shortku | Home')

@section('content')
<section id="header" class="header-container">
    <div class="header">
        <div class="header-title">
            <h1>Copy, Paste, Short it!</h1>
        </div>
        <div class="url-field">
            <label for="">
                <input type="text" placeholder="Paste your link">
            </label>
        </div>
        <div class="short-btn">
            <a href="#"><i class="fas fa-link fa-lg"></i> Short Now!</a>
        </div>
    </div>
</section>
@endSection