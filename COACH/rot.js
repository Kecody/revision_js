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