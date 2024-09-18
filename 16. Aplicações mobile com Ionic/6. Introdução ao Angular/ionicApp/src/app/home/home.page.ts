import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  public titulo: String = "Meu primeiro app"

  public imagemAleatoria: String = "https://ionicframework.com/docs/img/demos/card-media.png"

  public imagemLocal: String = "../assets/icone-celular.png"

  public titulo2: String = "Event Binding"

  public atualiza (): void {
    this.titulo2 = "Texto Alterado"
  }

  public acao (): void {
    this.titulo2 = "Botão clicado"
  }
}
