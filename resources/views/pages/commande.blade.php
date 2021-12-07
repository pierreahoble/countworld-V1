@extends('base')



@section('style')
<style>
    #form{
        background-color:#f5f5f5;
    }
</style>
    
@endsection


@section('contenu')


<div id="commande">

    <!-- blog-area -->
    
    <section class="standard-blog-area pt-120 pb-60" id="form">
        
        <div class="container" style="">
            <div class="row">    
    
               <h2 class="title">1 - Télécharger votre document *</h2>
               <div class="col-xl-8 col-lg-7">
                   <div class="card" style="width: 50rem;" >
                       <h5 class="card-header text-center">Fichier</h5>
                       <div class="card-body">
                           <form action="#" class="contact-form">
                               <div class="row">    
                                   <div class="col-md-12">
                                       <div class="form-grp">
                                           <input type="file" id="email" autocomplete="off" required class="input-file-container">
                                           <label for="email">Fichier Pdf ou Word*</label>
                                       </div>
                                   </div>
    
                                   <div class="col-md-12">
                                   <p class="text-center">Fichiers selectionnees</p>
                                   </div>
    
                                   <div class="col-md-6">
                                       <div class="form-grp">
                                           <select class="form-select" aria-label="Default select example">
                                               <option selected="" disabled="">Langue du document </option>
                                               <option value="1">Français</option>
                                               <option value="2">Anglais</option>
                                           </select>
                                       </div>
                                   </div>
    
                                   <div class="col-md-6">
                                       <div class="form-grp">
                                           <select class="form-select" aria-label="Default select example">
                                               <option selected="" disabled="">Type de documents</option>
                                               <option value="1">Mémoire</option>
                                               <option value="2">Thèse</option>
                                               <option value="3">Livre</option>
                                               <option value="4">Rapport</option>
                                               <option value="5">Autre</option>
                                           </select>
                                       </div>
                                   </div>
    
                               </div>
                           </form>
                       </div>
                     </div>
    
                     <h2 class="title  mt-5">2 - Sélection du délai *</h2>
                     <div class="card mt-5" style="width: 50rem;" >
                       <div class="card-body">
                           <form action="#" class="contact-form">
                               <div class="row">                              
    
                                   <div class="col-md-3">
                                       <p class="contact-form-check">
                                           <input type="checkbox" class="form-check-input" id="cookies-consent">
                                           <label for="cookies-consent" class="form-check-label">1 semaine</label>
                                       </p>
                                   </div>
    
                                   <div class="col-md-3">
                                       <p class="contact-form-check">
                                           <input type="checkbox" class="form-check-input" id="cookies-consent">
                                           <label for="cookies-consent" class="form-check-label">2 semaine</label>
                                       </p>
                                   </div>
    
                                   <div class="col-md-3">
                                       <p class="contact-form-check">
                                           <input type="checkbox" class="form-check-input" id="cookies-consent">
                                           <label for="cookies-consent" class="form-check-label">3 semaine</label>
                                       </p>
                                   </div>
    
                                   <div class="col-md-3">
                                       <p class="contact-form-check">
                                           <input type="checkbox" class="form-check-input" id="cookies-consent">
                                           <label for="cookies-consent" class="form-check-label">4 semaine</label>
                                       </p>
                                   </div>
    
    
                                   <div class="col-md-3">
                                       <p class="contact-form-check">
                                           <input type="checkbox" class="form-check-input" id="cookies-consent">
                                           <label for="cookies-consent" class="form-check-label">6 semaine</label>
                                       </p>
                                   </div>
    
    
    
                                   <div class="col-md-3">
                                       <p class="contact-form-check">
                                           <input type="checkbox" class="form-check-input" id="cookies-consent">
                                           <label for="cookies-consent" class="form-check-label">8 semaine</label>
                                       </p>
                                   </div>
                               </div>
                           </form>
                       </div>
                     </div>
               </div>
               
    
               <div class="col-xl-4 col-lg-5">
                   
                   <div class="card" style="width: 25rem;">
                       <h5 class="card-header">Commande relecture et correction</h5>
                       <div class="card-body">
    
                           <ul class="list-group">
                               <li class="list-group-item">Nombre de mots: 0</li>
                               <li class="list-group-item">Langue document :</li>
                               <li class="list-group-item">Type du document :</li>
                               <li class="list-group-item">Délai :</li>
                               <li class="list-group-item">Domaine :</li>
                             </ul>
                             <hr/>
                             <p>
                                 Montant :
                             </p>
                       </div>
                   </div>

                   <div>
                       <div class="col-md-6 mt-4">
                           <button type="submit" class="btn">Continuer la commande</button>
                       </div>                       
                   </div>
                    
               </div>



           </div>
       </div>
    </section>
    
    <!-- blog-area-end -->

</div>


@section('script')
<script src="{{ asset('js/app.js') }}"></script>    
@endsection



    
@endsection