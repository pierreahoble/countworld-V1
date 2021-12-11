@extends('base')




@section('contenu')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="breadcrumb-content">
                    <h3 class="title">Notre Expertise</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Notre equipe</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="best-team-area pt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="best-team-images">
                    <img src="asset/img/images/best_team01.png" class="main-img" alt="">
                    <img src="asset/img/images/best_team02.png" class="second-img" alt="">
                    <h4 class="overlay-content">We Are <br> The Best Team Ever</h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title mb-30">
                    <h2 class="title">- Qui sommes-nous?</h2>
                </div>
                <div class="experience-content">
                    <p>AFRIKA SCRIBE a été fondée en 2015 par des professionnels africains issus de la diaspora et de
                        l'Afrique. Aujourd’hui, nous sommes une équipe solide, expérimentée et internationale avec plus
                        de 300 correcteurs à travers le monde.</p>
                    <br>
                    <p>
                        Nous sommes de véritables experts en correction et relecture de mémoires, thèses de doctorat,
                        rapports de stage, rapports professionnels et autres documents. Nous travaillons avec
                        détermination pour assister les étudiants et les professionnels à atteindre leurs objectifs
                        universitaires ou professionnels.
                    </p>
                    <div class="progress-item">
                        <span class="title">Technique</span>
                        <div class="progress--bar" data-percentage="95%">
                            <div class="progress-number" style="left: 95%;">
                                <span class="percent">95%</span>
                            </div>
                            <div class="progress-bg">
                                <div class="progress-fill" style="width: 95%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="progress-item">
                        <span class="title">Support</span>
                        <div class="progress--bar" data-percentage="80%">
                            <div class="progress-number" style="left: 80%;">
                                <span class="percent">80%</span>
                            </div>
                            <div class="progress-bg">
                                <div class="progress-fill" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="progress-item">
                        <span class="title">Networking</span>
                        <div class="progress--bar" data-percentage="65%">
                            <div class="progress-number" style="left: 65%;">
                                <span class="percent">65%</span>
                            </div>
                            <div class="progress-bg">
                                <div class="progress-fill" style="width: 65%;"></div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>


<section class="counter-area pt-115 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">

                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">                       
                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/group.png" alt="" style="width: 100px">
                        </ul>
                    </div>
                    <h6 class="title">Des correcteurs professionnels</h6> 
                    <div class="pricing-three-list">
                        <p>
                            ls sont des professeurs d'universités en fonction ou retraités, de hauts cadres d'institutions internationales et des structures socio-professionnelles. Ils connaissent les exigences d'un travail de qualité et sont en mesure de répondre à vos besoins.
                        </p>
                    </div>
                </div>

                <div class="counter-item">
                    <h2 class="title"><span class="odometer odometer-auto-theme" data-count="50"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h2>
                    <p>Client</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">                        
                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/anonymat.png" alt="" style="width: 100px">
                        </ul>
                    </div>
                    <h6 class="titlw">Anonymat et discrétion</h6>
                    <div class="pricing-three-list">
                        <p>
                            Nous corrigeons votre document dans l'anonymat total et vos données restent confidentielles. Nos correcteurs sont soumis à une règle d'éthique et prennent un engagement ferme de respect de l'anonymat et de la confidentialité. Le système dématérialisé ne leur permet pas de connaître l'identité de l'auteur de la commande.
                        </p>
                    </div>
                </div>

                <div class="counter-item">
                    <h2 class="title"><span class="odometer odometer-auto-theme" data-count="25"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span>k+</h2>
                    <p>Projets</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">                        
                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/translation.png" alt="" style="width: 100px">
                        </ul>
                    </div>
                    <h6 class="title">Délais respectés</h6>
                    <div class="pricing-three-list">
                        <p>
                            Nous prenons l'engagement de respecter les délais. Recevez un email quand votre document est corrigé.
                        </p>
                    </div>
                </div>

                <div class="counter-item">
                    <h2 class="title"><span class="odometer odometer-auto-theme" data-count="23"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span></div></span>k+</h2>
                    <p>Correcteurs</p>
                </div>
            </div>
            
        </div>
    </div>
</section>





















<section class="team-area pt-110 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="section-title text-center mb-50">
                    <h2 class="title">Nos correspondants</h2>
                </div>
                <p class="text-justify">
                    Nous nous assurons que tout se passe parfaitement bien. Nous répondons à vos questions, trouvons le meilleur correcteur pour vous, et nous garantissons la meilleure qualité de relecture et correction pour votre travail.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item text-center">
                    <div class="team-thumb">
                        <img src="asset/img/team/team_img01.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4 class="title">Brandon Tailor</h4>
                        <span class="designation">Sr. Technician</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item text-center">
                    <div class="team-thumb">
                        <img src="asset/img/team/team_img02.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4 class="title">Daniel Brayan Hamel</h4>
                        <span class="designation">Customer Support</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item text-center">
                    <div class="team-thumb">
                        <img src="asset/img/team/team_img03.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4 class="title">Shane Decruse</h4>
                        <span class="designation">HR Executive</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item text-center">
                    <div class="team-thumb">
                        <img src="asset/img/team/team_img04.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4 class="title">Nikole Haraf Badol</h4>
                        <span class="designation">Customer Support</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item text-center">
                    <div class="team-thumb">
                        <img src="asset/img/team/team_img05.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4 class="title">John Schrimsher</h4>
                        <span class="designation">Technical Support</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item text-center">
                    <div class="team-thumb">
                        <img src="asset/img/team/team_img06.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4 class="title">Charles Bradford</h4>
                        <span class="designation">Customer Support</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item text-center">
                    <div class="team-thumb">
                        <img src="asset/img/team/team_img07.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4 class="title">Elizabeth Paulsen</h4>
                        <span class="designation">Sr. Executive</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item text-center">
                    <div class="team-thumb">
                        <img src="asset/img/team/team_img08.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <h4 class="title">Thomas Deloach</h4>
                        <span class="designation">Jr. Executive</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- <section class="team-hiring-area">
    <div class="container">
        <div class="hiring-bg wow fadeInUp" data-wow-delay=".2s" data-background="asset/img/bg/hiring_bg.jpg"
            style="background-image: url(&quot;img/bg/hiring_bg.jpg&quot;); visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="team-hiring-content">
                        <h2 class="title">We're Hiring Technicians to Our team</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hiring-btn text-center text-lg-end">
                        <a href="contact.html" class="btn transparent-btn">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection