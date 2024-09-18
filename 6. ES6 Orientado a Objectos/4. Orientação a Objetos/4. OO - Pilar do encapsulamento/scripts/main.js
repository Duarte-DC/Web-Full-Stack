class Televisao {
    constructor () {
        this._relacaoCanais = [2, 4, 5, 7, 10]
        this._canalAtivo = 5
        this._volume = 5
    }
    // getters & setters
    get canalAtivo () {
        return this._canalAtivo
    }
    set canalAtivo (canal) {
        let x = this._relacaoCanais.indexOf (canal)

        if (x === -1)
            console.log ('Canal não localizado')
        else 
            this._canalAtivo = canal
    }
}
let tv = new Televisao ()

// set
tv.canalAtivo = 7

// get
console.log (`canal ativo: ${tv.canalAtivo}`)