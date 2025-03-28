@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="contact-container" style="max-width: 100%; padding: 0 15px; box-sizing: border-box;">
    <div class="form-section">
        <h2>Contact us</h2>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="eg. Abdun Nur Wasit" style="background-color: #F5F5F5;">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="eg. abdunnurwasit@gmail.com" style="background-color: #F5F5F5;">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone-number</label>
                    <input type="tel" id="phone" name="phone" placeholder="eg. +8801753807123" style="background-color: #F5F5F5;">
                </div>
                <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="text" id="fax" name="fax" placeholder="eg. +8809554711263" style="background-color: #F5F5F5;">
                </div>
            </div>

            <div class="form-group full-width">
                <label for="message">Shortly explain why you want to connect</label>
                <textarea id="message" name="message" placeholder="eg. you can explain your query and ask in here by this" style="background-color: #F5F5F5;"></textarea>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms">
                <label for="terms">I agree on the terms and conditions</label>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <div class="contact-info">
        <h3>Contact Via</h3>
        <div class="info-block" style="text-align: left;">
            <strong>EMAIL</strong>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.708 2.825L15 11.383V5.383zM1 5.383v6l4.708-2.825L1 5.383zm5.354 3.354L1 12.617V13a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-.383l-5.354-3.88L8 9.383l-1.646-1.646z"/>
                </svg>
                info@globaloutsourcingpartners.com
            </p>
        </div>
        <div class="info-block" style="text-align: left;">
            <strong>PHONE</strong>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 1 .58-.326h2.59c.24 0 .462.145.58.326l.853 1.366c.12.192.145.43.07.646l-.857 2.571a.678.678 0 0 1-.646.46h-.857c-.24 0-.462-.145-.58-.326L4.21 4.21a11.42 11.42 0 0 0 4.58 4.58l1.366-.853c.192-.12.43-.145.646-.07l2.571.857c.216.072.326.34.326.58v2.59a.678.678 0 0 1-.326.58l-1.366.853a1.745 1.745 0 0 1-.646.07c-2.01-.48-4.01-1.48-5.98-3.45C2.48 7.01 1.48 5.01 1 3c-.072-.216-.072-.454.07-.646l.853-1.366a.678.678 0 0 1 .58-.326h.151z"/>
                </svg>
                +1-800-123-4567
            </p>
        </div>
        <div class="info-block" style="text-align: left;">
            <strong>ADDRESS</strong>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.26.35-.578.75-.94 1.166-.73.84-1.578 1.75-2.226 2.516a.5.5 0 0 1-.8 0c-.648-.766-1.496-1.676-2.226-2.516-.362-.416-.68-.816-.94-1.166C4.07 7.84 3.5 6.5 3.5 5a4.5 4.5 0 1 1 9 0c0 1.5-.57 2.84-1.334 3.94zM8 15s6-5.686 6-10A6 6 0 1 0 2 5c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                </svg>
                123 Global Solutions Drive, Innovation City, USA
            </p>
        </div>
    </div>
</div>
@endsection
@section('footer')
    @include('components.footer')
@endsection
