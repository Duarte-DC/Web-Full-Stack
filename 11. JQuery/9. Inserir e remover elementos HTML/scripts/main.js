$ (() => {
/*
    prepend ()   »   no inicio
    append ()   »   no fim
*/

    $ ('#lista1').prepend ('<li>Item 0</li>')
    $ ('#lista1').append ('<li>Item 4</li>')

    $ ('#lista2').prepend ('<div>Item 0</div>')
    $ ('#lista2').append ('<div>Item 4</div>')

/* 
    before ()  »   Antes da tag
    after ()   »   Depois da tag
*/

    $ ('lista2').before ("<p>Eu fui inserido antes da div</p>")
    $ ('lista2').after ("<p>Eu fui inserido após a div</p>")

/* 
    html ()    »   Substitui todo o conteúdo da tag selecionada
    remove ()  »   Remove a tag selecionada e todo elemento contido nela
*/

    $ ('#lista1').html ('<p>Eu substituí todo o elemento contido na tag</p>')
    $ ('#lista2').remove ()
    $ ('hr'). remove ()
})