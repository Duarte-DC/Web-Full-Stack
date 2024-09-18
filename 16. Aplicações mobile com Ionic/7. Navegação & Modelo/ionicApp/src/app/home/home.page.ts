import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {

  pesquisa: String = ""
  resultado: String = ""
  
  constructor (private navegacao: NavController) {

  }
  ngOnInit() {
      
  }
  abrirBotoes () {
    this.navegacao.navigateForward ('botoes')
  }

  abrirLista () {
    this.navegacao.navigateForward ('list')
  }

  recuperar () {
    this.resultado = this.pesquisa
  }

}
