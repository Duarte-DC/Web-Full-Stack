class Agenda {
    #titulo = ''
    eventos = []

    static config = {}
    static #eventosRecorrentes = []

    constructor (titulo, eventos) {
        
        console.log ('Executando o construtor')

        this.#titulo = titulo;
        this.eventos = eventos;
    }
    //  blocos estáticos são executados na inicialização da classe
    static {
        console.log ('Executando bloco estático de código')
    }
    //  se conectam ao contexto da clase
    static {
        this.config = {
            tema: 'dark',
            visualizacao: 'mensal'
        }
    }
    static {
        this.eventosRecorrentes = 'Feriado 1'
        this.eventosRecorrentes = 'Feriado 2'
    }
    static get eventosRecorrentes () {
        return this.#eventosRecorrentes
    }
    static set eventosRecorrentes (evento) {
        this.#eventosRecorrentes.push (evento)
    }
}
const agenda = new Agenda ('Cliente 1', ['Reunião 1', 'Reunião 2'])
const agenda2 = new Agenda ('Cliente 2', ['Shopping 1', 'Ginasio 2'])

console.log (agenda)
console.log (agenda2)
console.log (Agenda.eventosRecorrentes)
console.log (Agenda.config)