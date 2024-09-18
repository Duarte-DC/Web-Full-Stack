let promise = new Promise ((resolve, reject) => {
/*    
    try {

    }   catch (e) {
            reject(e);
        }
*/

    //  requisição http para recuperar uma relação de usuários

    setTimeout (() => {

        //  requisição foi realizada de algum modo

        let respostaRequisicao = {}

        //  erro no processo de requisição
        if (false) {

            respostaRequisicao = {
                codigo: 1050,
                erro: 'Falha de autorização'
            }
            reject (respostaRequisicao)
        }

        respostaRequisicao = {
            0: {
                id: 1, 
                nome: 'Duarte'
            },
            1: {
                id: 2,
                nome: 'Chamo'
            },
            2: {
                id: 3,
                nome: 'Charles'
            }
        }
        resolve (respostaRequisicao)

    }, 4000)

})  .then (dados => {

        console.log (dados)

        let promise = new Promise ((resolve, reject) => {

            setTimeout (() => {

                //  requisição foi realizada de algum modo
        
                let respostaRequisicao = {}
        
                //  erro no processo de requisição
                if (false) {
        
                    respostaRequisicao = {
                        codigo: 7788,
                        erro: 'Erro ao recuperar os posts dos usuarios'
                    }
                    reject (respostaRequisicao)
                }
        
                respostaRequisicao = {
                    0: {
                        id: 1, 
                        usuarioId: 1,
                        posts: [
                            {id: 1, post: 'Post 1'},
                            {id: 2, post: 'Post 2'}
                        ]
                    },
                    1: {
                        id: 2,
                        usuarioId: 2,
                        posts: [
                            {id: 3, post: 'Post 3'},
                            {id: 4, post: 'Post 4'}
                        ]                    
                    },
                    2: {
                        id: 3,
                        usuarioId: 3,
                        posts: [
                            {id: 5, post: 'Post 5'},
                            {id: 6, post: 'Post 6'}
                        ]
                    }
                }
                resolve (respostaRequisicao)
        
            }, 4000)
            

        })  .then (dados => {

            console.log(dados)

            })  .catch (erro => {

                    console.log(erro.erro)
                })

    })  .then (() => {

            console.log ('Then número 2')

            return 'parametro 2 para o then 3'

        })  .then (parametro => {

                console.log ('Then número 3 ->', parametro)

                return 'parametro 3 para o then 4'
    
            })  .then (parametro => {

                    console.log ('Then número 4 ->', parametro)
        
                })  .catch (erro => {

                        console.log ('Operação sequencial (catch): ')

                        return erro;

                    })
                      .then (erro => {

                            if (erro) {
                                console.log ('»  Codigo: ', erro.codigo)
    
                                return erro.erro
                            }
                
                        })  .then (erro => {

                                if (erro) {
                                    console.log ('»  Erro:', erro)
                                }
                            }) 
                