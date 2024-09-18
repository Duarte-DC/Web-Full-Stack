let dados = [

    ['nome', 'Duarte Artur Chamo Charles'],
    ['profissional', [
        ['site', 'duartecharles.com'],
        ['profissão', 'Engenheiro de software']
    ]],
    ['hobbies', ['musculação', 'programar']],
    ['país', 'Moçambique']
]

console.log (Object.fromEntries (dados))
/*  
    Em Javascript:
        »   Não temos suporte a arrays associativos
        »   objetos: chave e valor

*/