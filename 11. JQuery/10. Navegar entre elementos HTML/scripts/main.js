$ (() => {

//  parent ()   »   elemento pai
    console.log ($ ('.secao1'). parent ())
    console.log ($ ('.item'). parent ())

//  closest ()  »   procura por elementos pais
    console.log ($ ('.subSecao'). closest ('#pagina'))
    console.log ($ ('.subSecao'). closest ('.secao1'))
    console.log ($ ('.item'). closest ('#topo'))
    console.log ($ ('.item'). closest ('ul'))

//  find ()     »   procura por elementos filhos
    console.log ($ ('#rodape'). find ('p'))
    console.log ($ ('#topo'). find ('.item:last'))
    console.log ($ ('#topo'). find ('li:first'))

//  combinação de elementos de navegação
    console.log ($ ('.secao1'). parent (). find ('h1'))
    console.log ($ ('.secao1'). closest ('#pagina'). find ('h1'))
})