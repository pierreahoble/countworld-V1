@extends('base')



@section('contenu')


 <!-- breadcrumb-area -->
 <section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="breadcrumb-content">
                    <h3 class="title">Nous Contacter</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
<section class="contact-area pt-115 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-title">
                    <h3 class="title">Entrer en contact</h3>
                </div>
                <form action="{{ url('nous-contacter') }}" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="text" id="name" autocomplete="off" required name="nom">
                                <label for="name">Votre nom *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="email" id="phone" autocomplete="off" required name="email">
                                <label for="phone">Votre email *</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-grp">
                                <input type="text" id="email" autocomplete="off" required name="sujet">
                                <label for="email">Sujet*</label>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-grp">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled>Sujet</option>
                                    <option value="1">Broadband Connection</option>
                                    <option value="2">Wi-Fi Internet</option>
                                    <option value="3">Satellite TV Box</option>
                                    <option value="4">Netfix TV Box</option>
                                    <option value="5">Mobile Connection</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <div class="form-grp">
                        <textarea name="message" id="message" autocomplete="off" required name="message"></textarea>
                        <label for="message">Messages</label>
                    </div>
                    <p class="contact-form-check">
                        <input type="checkbox" class="form-check-input" id="cookies-consent">
                        <label for="cookies-consent" class="form-check-label">Je suis d'accord avec cela, mes données sont enregistrées pour un contact ultérieur, voir notre <a href="#">  politique de confidentialité</a> </label>        
                    </p>
                    <button type="submit" class="btn">Submit Message</button>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-wrap">
                    <h3 class="contact-info-title"> Contacteer nous </h3>
                    {{-- <p>We are the broadband internet service provider at New</p> --}}
                    <ul class="contact-info-list">
                        <li><i class="fal fa-phone"></i> <a href="tel:123">+1 (202) 670-6562</a></li>
                        <li><i class="fal fa-envelope"></i> <a href="mailto:info@example.com">contact@afrikascribe.com</a></li>
                        <li><i class="fal fa-map-marker-alt"></i> <span>3741 Hamilton Drive Huntingtown, <br> MD 20639</span></li>
                    </ul>
                </div>
                {{-- <div class="contact-info-wrap">
                    <h3 class="contact-info-title">Live Chat</h3>
                    <p>We are the broadband internet service provider at New</p>
                    <div class="live-chat">
                        <div class="icon"><i class="flaticon-chat"></i></div>
                        <a href="#" class="live-chat-link">Live Chat to Executive</a>
                    </div>
                </div>
                <div class="contact-info-wrap">
                    <h3 class="contact-info-title">Not interested to talk?</h3>
                    <p>Please check out or best suggested <a href="#">Help Center & FAQ</a></p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- contact-area-end -->

<!-- contact-map -->
<div id="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd" allowfullscreen loading="lazy"></iframe>
</div>
<!-- contact-map-end -->

<!-- brand-area -->
{{-- <div class="brand-area pt-120 pb-120">
    <div class="container">
        <div class="row brand-active">
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{asset ('asset/img/brand/brand_item01.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('asset/img/brand/brand_item02.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('asset/img/brand/brand_item03.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('asset/img/brand/brand_item04.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="{{ asset('asset/img/brand/brand_item05.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- brand-area-end -->
<br><br>

    

@endsection