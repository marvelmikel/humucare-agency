@extends('layout.app')

@section('content')
<section class="about" id="about">
    <div>
        <div class="about-sub">
            <h2>About Us</h2>
            <p>Humucare is your ultimate destination for top-quality cleaning and care services. Our dedicated
                team
                consists of caregivers, nannies, cleaners, and childminders who are committed to providing
                exceptional
                assistance and support. With a focus on cleanliness and hygiene, we ensure that your home,
                school,
                office, or any other space receives the best cleaning service possible.</p>
            <button class="btn req-btn">Request a service</button>
            <div class="nurse-container">
                <img class="nurse" src="{{ URL::asset('assets/images/nurse.png')}}" alt="Nurse" />
            </div>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <div class="contact-main">
        <h2>Contact Us</h2>
        <div class="address">
            <div>
                <div class="address-heading"><img class="contact-icons" src="{{ URL::asset('assets//images/location.png')}}"
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
