@extends('layout.app')

@section('content')


<section class="service-quote">
    <div class="service-quote-sub">
        <h2>Service Quote Form</h2>
        <form>
            <input type="text" id="first_name" name="fname" placeholder="First Name">
            <input type="text" id="last_name" name="fname" placeholder="Last Name">
            <input type="text" id="email" name="email" placeholder="Email">
            <input type="text" id="password" name="password" placeholder="Password">
       
        <div class="cleaning-service">
            <h2>Cleaning Services</h2>
            <p>Select those that apply</p>
            <div class="cleaning-service-sub">
                <div class="cleaning-service-left">
                    <div class="cleaning-service-left-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Vacuum and mop floors</h4>
                    </div>
                    <div class="cleaning-service-left-inner">
                        <input type="checkbox" />
                        <h4 style="color:black" >Dust and wipe surfaces</h4>
                    </div>
                    <div class="cleaning-service-left-inner">
                        <input type="checkbox" />
                        <h4 style="color:black" >Cleaning and sanitize bathrooms</h4>
                    </div>
                    <div class="cleaning-service-left-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Cleaning and sanitize kitchen</h4>
                    </div>
                    <div class="cleaning-service-left-inner">
                        <input type="checkbox" />
                        <h4 style="color:black" >Empty trash cans and replace liners</h4>
                    </div>
                    <div class="cleaning-service-left-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Cleaning and sanitize bedrooms</h4>
                    </div>
                    <div class="cleaning-service-left-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Cleaning and sanitize living room</h4>
                    </div>
                </div>
                <div class="cleaning-service-right">
                    <div class="cleaning-service-right-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Fridge cleaning</h4>
                    </div>
                    <div class="cleaning-service-right-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Empty trash cans and replace liners</h4>
                    </div>
                    <div class="cleaning-service-right-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Flower cleaning</h4>
                    </div>
                    <div class="cleaning-service-right-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Private Car Washing</h4>
                    </div>
                    <div class="cleaning-service-right-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Dishwashing</h4>
                    </div>
                    <div class="cleaning-service-right-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Deep Cleaning</h4>
                    </div>
                    <div class="cleaning-service-right-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">House Shopping </h4>
                    </div>
                    <div class="cleaning-service-right-inner">
                        <input type="checkbox" />
                        <h4 style="color:black">Cleaning and Sanitizing dining room</h4>
                    </div>
                </div>
            </div>
            <div>
                 <a href="{{ route('serviceRequest') }}" class="btn request_btn" style="text-decoration: none;">Request Quote</a>

            </div>
        </div>
    </form>
    </div>
    <div class="other_service_heading">Other Service</div>
    <div class="other-service-card-container">
        <div class="other-service-card">
            <p>Accommodation (Air bnb)</p>
             <a href="{{ route('serviceRequest') }}" class="btn request_btn" style="text-decoration: none;">Request Quote</a>

        </div>
        <div class="other-service-card">
            <p>Visa
                Application</p>
                <a href="{{ route('serviceRequest') }}" class="btn request_btn" style="text-decoration: none;">Request Quote</a>

        </div>
        <div class="other-service-card">
            <p>Forklift
                Training/Service</p>
             <a href="{{ route('serviceRequest') }}" class="btn request_btn" style="text-decoration: none;">Request Quote</a>

        </div>
        <div class="other-service-card">
            <p>Legal Services</p>
             <a href="{{ route('serviceRequest') }}" class="btn request_btn" style="text-decoration: none;">Request Quote</a>

        </div>
        <div class="other-service-card">
            <p>Accountant
                Services</p>
             <a href="{{ route('serviceRequest') }}" class="btn request_btn" style="text-decoration: none;">Request Quote</a>

        </div>
        <div class="other-service-card">
            <p>Flight
                Booking</p>
             <a href="{{ route('serviceRequest') }}" class="btn request_btn" style="text-decoration: none;">Request Quote</a>

        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="contact-main">
        <h2>Contact Us</h2>
        <div class="address">
            <div>
                <div class="address-heading"><img class="contact-icons" src="{{ URL::asset('assets/images/location.png')}}"
                        alt="location" />
                    <h3>Office Address</h3>
                </div>
                <h6>19 Grove Ln, Handsworth, Birmingham B21 9ES</h6>

            </div>
            <div>
                <div class="address-heading"><img class="contact-icons" src="{{ URL::asset('assets/images/phone.png')}}" alt="phone" />
                    <h3>Phone</h3>
                </div>
                <h6>+44 01214484501</h6>
                <h6>+44 7485705519</h6>
                <h6>+44 7449688883</h6>

            </div>
            <div>
                <div class="address-heading"><img class="contact-icons" src="{{ URL::asset('assets/images/mail.png')}}" alt="mail" />
                    <h3>Email</h3>
                </div>
                <h6>agency@humucarecleaning.co.uk</h6>

            </div>
        </div>
        <div class="map">
            <img src="{{ URL::asset('assets/images/map.png')}}" alt="map" />

        </div>
    </div>
</section>

@endsection