import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  constructor () {}

  precoAlcool: number = 0
  precoGasolina: number = 0
  resultado: String = ""
  imagemLocal: String = "../assets/logo.png"

  calcular () {
    if (this.precoAlcool && this.precoGasolina) {

      var alcool = this.precoAlcool
      var gasolina = this.precoGasolina

      var result = alcool / gasolina

      if (result >= 0.7) {
        this.resultado = "Melhor usar gasolina"

      } else {
          this.resultado = "Melhor usar álcool"
        }
      
    } else {

      this.resultado = "Preencha os campos corretamente!"
      }
  }

}
