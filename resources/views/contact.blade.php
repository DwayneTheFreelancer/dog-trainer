@extends('main')

@section('title', 'Contact Us')

@section('content')
    <div class="container-fluid contact-main px-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Us</h1>
                <div class="info">
                    <p>example@email.com</p>
                    <p>(555)-555-5555</p>
                </div>
                <div class="address">
                    <p>123 Main St</p>
                    <p>New York, NY 12345</p>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <form action="#" method="POST">
                    <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">First name</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Last name</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control" />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="message" rows="4"></textarea>
                        <label class="form-label" for="message">Message</label>
                    </div>
                    <button class="btn" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection