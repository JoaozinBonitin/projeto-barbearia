const input = document.querySelector('format')

input.addEventListener('keypress', () => {
    let tamanho = input.value.length

    // MAX LENGHT 19 CARTÃO
    if (tamanho == 4 || tamanho == 9 || tamanho == 14) {
        input.value += ' '
    }

    // // MAX LENGHT 14  CPF
    // if (inputLength == 3 || inputLength == 7) {
    //     input.value += '.'
    // }else if (inputLength == 11) {
    //     input.value += '-'
    // }

    // MAX LENGHT 12  RG
    // if (inputLength == 2 || inputLength == 6) {
    //     input.value += '.'
    // }else if (inputLength == 10) {
    //     input.value += '-'
    // }
})