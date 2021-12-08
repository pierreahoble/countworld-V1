@extends('base')

@section('contenu')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="breadcrumb-content">
                    <h3 class="title">About Us</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">A propos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-area pt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wrap">
                    <img src="asset/img/images/about_img01.jpg" alt="">
                    <img src="asset/img/images/about_img02.jpg" class="main-img" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title mb-30">
                    <h2 class="title">- Qui sommes-nous?</h2>
                </div>
                <div class="about-content">
                    <p>
                        AFRIKA SCRIBE a été fondée en 2015 par des professionnels africains issus de la diaspora et de l'Afrique. Aujourd’hui, nous sommes une équipe solide, expérimentée et internationale avec plus de 300 correcteurs à travers le monde.
                    </p>   
                    <p>
                        Nous sommes de véritables experts en correction et relecture de mémoires, thèses de doctorat, rapports de stage, rapports professionnels et autres documents. Nous travaillons avec détermination pour assister les étudiants et les professionnels à atteindre leurs objectifs universitaires ou professionnels.
                    </p>               
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
            {{-- <div class="col-lg-3 col-sm-6">

                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">                        
                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/download.png" alt="" style="width: 100px">
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                        <p>
                            Téléchargez le fichier que vous souhaitez traduire.
                        </p>
                    </div>
                </div>
                <div class="counter-item">
                    <h2 class="title"><span class="odometer odometer-auto-theme" data-count="10"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h2>
                    <p>Avis</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
    
@endsection