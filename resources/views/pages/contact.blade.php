@extends('layout.template')

@section('title', 'Shortku | Contact')

@section('content')

<section class="form">
    <div class="form-container">
        <form action="">
            <h1>Contact</h1><br>
            <p>we are happy to hear your suggestions</p>
            <div class="form-contact">
                <div class="input">
                    <label for="name">
                        <input type="text" placeholder="Your Name" name="yourname">
                    </label>
                </div>
                <div class="input">
                    <label for="email">
                        <input type="text" placeholder="Your Email" name="email">
                    </label>
                </div>
                <div class="input">
                    <label for="message">
                        <textarea placeholder="Your Message" name="message" cols="23" rows="10"></textarea>
                    </label>
                </div>
            </div>
            <div class="submit-btn">
                <a href="#">Submit</a>
            </div>
        </form>
    </div>
</section>

@endSection