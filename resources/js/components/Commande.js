import React, { Component, Fragment } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class Commande extends Component {


    constructor(props) {

        super(props)
        this.state = {
            file: '',
            langueDuDoc: '',
            typeDeDoc: '',
            nombreDeMot: '',
            delaiDuDoc: '',
            domaineDuDoc: '',
            montant: '',
            load: true

        }
    }


    onFileChange(e) {

        let headers = {
            Authorization: "token",
            'Content-Type': 'multipart/form-data'
        };


        const formData = new FormData();
        var file = e.target.files[0];
        // console.log(e.target.files[0])


        formData.append('file', file);


        if (formData.has('file')) {
            // alert()
            axios.post('http://127.0.0.1:8000/api/file-count', formData, {
                headers
            }).then((response) => {
                var data = response.data
                //    if (!data) {
                //        console.log('rien')
                //    }
                //     else 
                if (data.success === 0) {
                    alert('Vous devez choisir un fichier .pdf ou .doc')
                } else {
                    var nbre = data.chaine
                    console.log(data)
                    this.setState({
                        nombreDeMot: nbre,
                        montant: nbre * 0.5,
                        load:false
                    })
                }
            })
        }









        // var file=e.target.files[0]
        // this.setState({
        //     file:e.target.files[0]
        // })

        // var file = this.state.file;
        // var res1

        // if (e) {

        //     let r = new FileReader();
        //     r.onload = function(e) { 
        //         var contents = e.target.result;
        //         var str = contents.toString('UTF-8') 
        //         res1 = str.split("\n").length
        //         var res = contents.split("\n").filter(function(n) { return n != "" }); 
        //         var resultat = res.length
        //         // console.log(res1)
        //         // $("#val").text(res1);
        //         // console.log(resultat)
        //     }
        //     r.readAsText(e.target.files[0],'UTF-8');
        //     // this.setState({
        //     //     nombreDeMot:res1
        //     // })
        //     setTimeout(() => {
        //        this.setState({
        //            nombreDeMot: res1,
        //            montant: res1*0.5
        //        })
        //     }, 1000);
        // }

    }













    render() {
        return (




            <Fragment>

                <section className="standard-blog-area pt-120 pb-60" id="form">

                    <div className="container" >
                        <div className="row">
                            <h2 className="title">1 - Télécharger votre document *</h2>
                            <div className="col-xl-8 col-lg-7">
                                <div className="card" style={{ width: "50rem" }} >
                                    <h5 className="card-header text-center">Fichier</h5>
                                    <div className="card-body">
                                        <form action="#" className="contact-form" encType="multipart/form-data">
                                            {/* <input type="hidden" name="csrf-token" content="{{ csrf_token() }}"/> */}
                                            <div className="row">
                                                <div className="col-md-12">
                                                    <div className="form-grp">
                                                        <input type="file" id="doc" onChange={this.onFileChange.bind(this)} autoComplete="off" required className="input-file-container" accept=".pdf,.doc,.docx" />
                                                        {/* accept=".pdf,.doc,.docx" */}
                                                        <label htmlFor="doc">Fichier Pdf ou Word*</label>
                                                    </div>
                                                </div>

                                                <div className="col-md-12">
                                                    <p className="text-center">Fichiers selectionnees</p>
                                                </div>

                                                <div className="col-md-6">
                                                    <div className="form-grp">
                                                        <select className="form-select" value={this.state.langueDuDoc} aria-label="Default select example" onChange={(e) => this.setState({ langueDuDoc: e.target.value })}>
                                                            <option value="null">Langue du document </option>
                                                            <option value="Français">Français</option>
                                                            <option value="Anglais">Anglais</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div className="col-md-6">
                                                    <div className="form-grp">
                                                        <select className="form-select" aria-label="Default select example" value={this.state.typeDeDoc} onChange={(e) => this.setState({ typeDeDoc: e.target.value })}>
                                                            <option value="null">Type de documents</option>
                                                            <option value="Mémoire">Mémoire</option>
                                                            <option value="Thèse">Thèse</option>
                                                            <option value="Livre">Livre</option>
                                                            <option value="Rapport">Rapport</option>
                                                            <option value="Autre">Autre</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <h2 className="title  mt-5">2 - Sélection du délai *</h2>
                                <div className="card mt-5" style={{ width: "50rem" }} >
                                    <div className="card-body">
                                        <form action="#" className="contact-form">
                                            <div className="row">

                                                <div className="col-md-3">
                                                    <p className="contact-form-check">
                                                        <input type="radio" value="1" checked={this.state.delaiDuDoc === 1} onChange={(e) => this.setState({ delaiDuDoc: e.target.value })} className="form-check-input" />
                                                        <label htmlFor="cookies-consent" className="form-check-label">1 semaine</label>
                                                    </p>
                                                </div>

                                                <div className="col-md-3">
                                                    <p className="contact-form-check">
                                                        <input type="radio" value="2" checked={this.state.delaiDuDoc === 2} onChange={(e) => this.setState({ delaiDuDoc: e.target.value })} className="form-check-input" />
                                                        <label htmlFor="cookies-consent" className="form-check-label">2 semaine</label>
                                                    </p>
                                                </div>

                                                <div className="col-md-3">
                                                    <p className="contact-form-check">
                                                        <input type="radio" value="3" checked={this.state.delaiDuDoc === 3} onChange={(e) => this.setState({ delaiDuDoc: e.target.value })} className="form-check-input" />
                                                        <label htmlFor="cookies-consent" className="form-check-label">3 semaine</label>
                                                    </p>
                                                </div>

                                                <div className="col-md-3">
                                                    <p className="contact-form-check">
                                                        <input type="radio" value="4" checked={this.state.delaiDuDoc === 4} onChange={(e) => this.setState({ delaiDuDoc: e.target.value })} className="form-check-input" />
                                                        <label htmlFor="cookies-consent" className="form-check-label">4 semaine</label>
                                                    </p>
                                                </div>


                                                <div className="col-md-3">
                                                    <p className="contact-form-check">
                                                        <input type="radio" value="6" checked={this.state.delaiDuDoc === 6} onChange={(e) => this.setState({ delaiDuDoc: e.target.value })} className="form-check-input" />
                                                        <label htmlFor="cookies-consent" className="form-check-label">6 semaine</label>
                                                    </p>
                                                </div>



                                                <div className="col-md-3">
                                                    <p className="contact-form-check">
                                                        <input type="radio" value="8" checked={this.state.delaiDuDoc === 8} onChange={(e) => this.setState({ delaiDuDoc: e.target.value })} className="form-check-input" />
                                                        <label htmlFor="cookies-consent" className="form-check-label">8 semaine</label>
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            <div className="col-xl-4 col-lg-5">
                                <form action="valider-la-commande" method="get">
                                    {/* <input type="text" name="" id="" name="_token" value="" /> */}

                                    <div className="card" style={{ width: "25rem" }}>
                                        <h5 className="card-header">Commande relecture et correction</h5>
                                        <div className="card-body">
                                            <ul className="list-group">
                                                <li className="list-group-item">Nombre de mots : {' ' + this.state.nombreDeMot} <span id="val"></span> </li>
                                                <li className="list-group-item">Langue document : {' ' + this.state.langueDuDoc}</li>
                                                <li className="list-group-item">Type du document : {' ' + this.state.typeDeDoc}</li>
                                                <li className="list-group-item">Délai : {' ' + this.state.delaiDuDoc > 1 ? `${this.state.delaiDuDoc + ' '}Semaines` : `${this.state.delaiDuDoc + ' '}Semaine`} </li>
                                                <li className="list-group-item">Domaine : </li>
                                            </ul>
                                            <hr />
                                            <p>
                                                Montant : {this.state.montant ? this.state.montant + ' ' + 'FCFA' : ''}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div className="col-md-6 mt-4">
                                            <button href="valider-la-commande" type="submit" className="btn" disabled={this.state.load}>Continuer la commande</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </section>
            </Fragment>

        )
    }
}


if (document.getElementById('commande')) {
    ReactDOM.render(<Commande />, document.getElementById('commande'));
}
