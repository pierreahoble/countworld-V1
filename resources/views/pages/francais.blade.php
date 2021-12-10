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


            <div class="col-xl-12 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">Des livrables irréprochables !</h4>

                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/book.png" alt="" style="width: 100px">
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                        <p>
                            Lors de la relecture de votre document, le correcteur améliorera le texte. Il suggérera la
                            suppression des fautes (grammaire, orthographe, conjugaison, syntaxe, ponctuation...),
                            proposera les mots les plus adaptés pour transmettre vos idées.
                            Nos correcteurs ont pour mission de traquer les fautes afin que votre document soit
                            irréprochable d’un point de vue linguistique et universitaire !
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">De l'aide sur la clarté</h4>

                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/book_1.png" alt="" style="width: 100px">
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                        <p>
                            Le correcteur pourra également vous aider sur la clarté et la logique. Un rapport sur vos erreurs linguistiques fréquentes accompagnera le document corrigé. Il contiendra des conseils pour améliorer votre style rédactionnel.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-xl-12 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">Un avis extérieur et des conseils personnalisés </h4>

                        <ul class="devices-icon-wrap">
                            <img src="asset/img/icons/book_2.png" alt="" style="width: 100px">
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                        <p>
                            Le correcteur ajoutera également des commentaires dans le texte, afin de vous indiquer vos erreurs les plus fréquentes. Il mettra en commentaire, certaines règles.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>



<section class="pricing-three-area pt-110 pb-90">
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-xl-6 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">Vérification de la clarté</h4>

                        <ul class="devices-icon-wrap">
                            {{-- <img src="asset/img/icons/headset.png" alt="" style="width: 50px"> --}}
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                        <ul>
                            <li>Des listes de vérifications claires et précises sur la clarté.</li>
                            <li>Clarification de vos propos.</li>
                            <li>Vérification de votre argumentation.</li>
                            <li>Avis d’un professionnel sur la clarté et logique de votre texte.</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-4 col-md-6 col-sm-8">
                <div class="pricing-three-item mb-30">
                    <div class="pricing-three-head">
                        <h4 class="title">Références et Mise en page</h4>

                        <ul class="devices-icon-wrap">
                            {{-- <img src="asset/img/icons/headset.png" alt="" style="width: 50px"> --}}
                        </ul>
                    </div>
                    <div class="pricing-three-list">
                       <ul>
                           <li>Observation sur les références et sources.</li>
                           <li>Observation sur les citations dans le texte.</li>
                           <li>Observation sur la mise en page.</li>
                           <li>Observation sur la qualité du document.</li>
                       </ul>
                    </div>
                </div>
            </div>


          


        </div>
    </div>
</section>






@endsection