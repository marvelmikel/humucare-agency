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
                <a href="{{ route('serviceRequest') }}">
            <button class="btn req-btn">Request a service</button>
            </a>
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
                <div class="address-heading">
                    <img class="contact-icons" src="{{ URL::asset('assets/images/location.png')}}" alt="location" />
                    <h3>Office Address</h3>
                </div>
                <p class="address-paragraph">19 Grove Ln, Handsworth, Birmingham B21 9ES</p>

            </div>
            <div>
                <div class="address-heading"><img class="contact-icons" src="{{ URL::asset('assets/images/phone.png')}}" alt="phone" />
                    <h3>Phone</h3>
                </div>
                <p class="address-paragraph">+44 01214484501</p>
                <p class="address-paragraph">+44 7485705519</p>
                <p class="address-paragraph">+44 7449688883</p>

            </div>
            <div>
                <div class="address-heading"><img class="contact-icons" src="{{ URL::asset('assets/images/mail.png')}}" alt="mail" />
                    <h3>Email</h3>
                </div>
                <p class="address-paragraph">agency@humucarecleaning.co.uk</p>

            </div>
        </div>
        <div class="map">
            <div style="width: 100%">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Birmingham+(humucare)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps systems</a>
                </iframe>
            </div>
        </div>
    </div>
</section>
@endsection
