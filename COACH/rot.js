const secret_key = "MULTIMEDIA";
const letters = [];

for(const ch of secret_key){
    if(letters.includes(ch)) continue ;

    letters.push(ch);
}

console.log(letters);

// join en JS

const letters_str = letters.join('');
const alphabets = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

// Essaye de retirer les lettres qui se trouvent dans letters dans alphabets
const sanitize = [] ;

for(const ch of alphabets){
    if(letters.includes(ch)) continue ; // on passe à l'itération suivante

    // si la lettre n'est pas présente on ne la garde pas
    sanitize.push(ch);
}

document.write(`<h3>Alphabet crypté : ${letters + sanitize.join('')}</h3>`);