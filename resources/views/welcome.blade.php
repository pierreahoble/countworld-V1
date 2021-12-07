@extends('base')




@section('contenu')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="breadcrumb-content">
                    <h3 class="title">AfrikaScrib</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Equipe</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="pricing-three-area pt-110 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="section-title text-center mb-50">
                    <h2 class="title"> Nos Services</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">Relecture et correction</h4>
                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/edit.png" alt="" style="width: 50px">
                            {{-- <li><i class="flaticon-clock"></i></li> --}}
                            {{-- <li><i class="flaticon-wifi-router-1"></i></li> --}}
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                       <p>
                        Faites relire et corriger vos documents (Mémoires, thèses, projets professionnels, rapport de stage et autres) par un expert
                       </p>
                    </div>
                    {{-- <h2 class="pricing-three-price"><span>From</span> 15.99<span>/mon</span></h2> --}}
                    <a href="{{ url('services-additionnels') }}" class="btn transparent-btn">Decouvrir</a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">Traduction professionnelle</h4>
                        {{-- <span class="devices-support">03 Devices</span> --}}
                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/translation.png" alt="" style="width: 50px">
                            {{-- <li><i class="flaticon-tv"></i></li> --}}
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                        <p>
                            La traduction professionnelle exige une double expertise linguistique et technique. Nos experts en traduction possedent les deux.
                        </p>
                    </div>
                    {{-- <h2 class="pricing-three-price"><span>From</span> 25.99<span>/mon</span></h2> --}}
                    <a href="{{ url('traduction-professionnelle') }}" class="btn transparent-btn">Decouvrir</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">Certification de documents</h4>
                        {{-- <span class="devices-support">04 Devices</span> --}}
                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/certificate.png" alt="" style="width: 50px">
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                       <p>
                        Nous vous accompagnons également dans les procédures de certifications de documents grâce à notre vaste réseau de correspondants.
                       </p>
                    </div>
                    {{-- <h2 class="pricing-three-price"><span>From</span> 45.99<span>/mon</span></h2> --}}
                    <a href="{{ url('certification-de-documents') }}" class="btn transparent-btn">Decouvrir</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">Assistance particulière(AP)</h4>
                        {{-- <span class="devices-support">Any Devices</span> --}}
                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/headset.png" alt="" style="width: 50px">
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                        <p>
                            Le service AP couvre l'accompagnement en rédaction de thèses et autres documents, mentoring, orientation universitaire et autres.
                        </p>
                    </div>
                    {{-- <h2 class="pricing-three-price"><span>From</span> 85.99<span>/mon</span></h2> --}}
                    <a href="{{ url('assistance-particuliere') }}" class="btn transparent-btn">Decouvrir</a>
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
                    <h2 class="title">Notre équipe</h2>
                </div>
                <div class="experience-content">
                    <p>
                        Afrika Scribe est une équipe formée par des professionnels africains d'horizons diverses réunis
                        sous la bannière de la rigueur et du travail de qualité. Nous sommes une équipe expérimentée et
                        internationale avec plus de 300 correcteurs à travers le monde juste pour répondre aux besoins
                        de l'Afrique. Nous sommes de véritables experts en correction et relecture de mémoires, thèses
                        de doctorat et de tout type de document. Nous oeuvrons avec sérieux et dynamisme; nous
                        accompagnons les professionnels et les étudiants dans l'amélioration de la qualité de leurs
                        écrits grâce à nos services de relecture et correction.
                    </p>

                    <ul class="contact-info-list">
                        <li><i class="fal fa-phone"></i> <a href="tel:123">+1 872 670 780</a></li>
                        <li><i class="fal fa-envelope"></i> <a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="fal fa-map-marker-alt"></i> <span>3741 Hamilton Drive Huntingtown, <br> MD
                                20639</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="shop-details-area pt-120 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="shop-details-img">
                    <img src="asset/img/products/shop_details01.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shop-details-content">
                    {{-- <div class="product-stock-status">
                        <span>In Stock</span>
                    </div> --}}
                    <h2 class="title">Notre mission</h2>
                    <p>Notre priorité, c'est votre réussite académique et professionnelle.</p> <br>

                    <p>Que ce soit dans la relecture ou correction, la traduction professionnelle, le mentorship,
                        l'orientation universitaire... ou la rédaction d'articles utiles et autres. Notre but est
                        d'accompagner les étudiants et professionnels africains dans l'atteinte de leur objectifs.
                    </p>


                    <div class="container">
                        <div class="row align-items-center align-items-xl-end">
                            <div class="col-lg-12">
                                <div class="section-title mb-40">
                                    <h2 class="title">Frequently Asked Questions</h2>
                                </div>
                                <div class="faq-wrapper">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    <h4>Pour les études</h4>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample"
                                                style="">
                                                <div class="accordion-body">
                                                    Nous pensons que chaque étudiant doit avoir accès aux meilleurs
                                                    outils pour réussir, indispensable pour l'excellence.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <h4>En tant qu'experts</h4>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
                                                style="">
                                                <div class="accordion-body">
                                                    Nous nous assurons que vos écrits et autres productions répondent
                                                    aux standards de qualité et de rigueur.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


<section class="services-area pt-110 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7">
                <div class="section-title text-center mb-50">
                    <h2 class="title">Assistances particulières</h2>
                    <p>
                        Pour toute demande de service d'assistance particulière, veuillez nous contacter par mail (contact@afrikascribe.com)
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <i class="flaticon-internet-banking"></i>
                    </div>
                    <div class="services-content">
                        <h3 class="title"><a href="#">Aide à la rédaction</a></h3>
                        <p>
                            Notre vaste réseau de compétences nous permet de mettre à la disposition de nos clients des experts à même de les accompagner dans la rédaction de leurs document (thèse, mémoire et autres.
                        </p>
                        {{-- <a href="#" class="btn btn-link">Read more</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <i class="flaticon-wifi-router"></i>
                    </div>
                    <div class="services-content">
                        <h3 class="title"><a href="#">Le Mentoring</a></h3>
                        <p>
                            L'un des secrets de la réussite dans tous les domaines notamment universitaire ou professionnel est de trouver une personne qui vous conseille et vous oriente. Afrika scribe pourra sur demande vous connecter à un mentor après étude de profils                            
                        </p>
                        {{-- <a href="#" class="btn btn-link">Read more</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <i class="flaticon-satellite-dish"></i>
                    </div>
                    <div class="services-content">
                        <h3 class="title"><a href="#">L'Orientation universtaire</a></h3>
                        <p>
                            L'une des grandes raisons d'échecs universitaires qui conduisent plus tard au chômage surtout dans les pays africains, c'est l'absence d'orientation universitaire. AFRIKA SCRIBE pour contribuer à la solution, offre un service d'orientation.
                        </p>
                        {{-- <a href="#" class="btn btn-link">Read more</a> --}}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        demo modal
      </button>
       --}}
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              {{-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> --}}
              <img src="asset/img/products/shop_details01.png" alt="">              
            </div>
            <div class="modal-body">
             <p>
                En ces temps de covid-19, évitez les contacts, respectez les mesures barrières en commandant vos services de correction et relecture, traduction, certification et autres en ligne.
             </p>
             <h5 class="text-center">Ensemble contre le Covid-19 !</h5>
            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    
    
    
    @section('script')
    
    <script>
      $('document').ready(function(){
        //   alert('bien')
          $('#exampleModalCenter').modal('show')
      })
    //   window.$('#exampleModalCenter').modal();
    </script>
        
    @endsection











@endsection