const secret_key = "MULTIMEDIA";

const alphabets = [];

for (const ch of secret_key) {
    if (alphabets.includes(ch)) continue;
    alphabets.push(ch);
}
console.log(alphabets);

const letters = alphabets.join(''); //new secret key

const Alphabets = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
const sanitize = [];

for (const ch of Alphabets) {
    if (alphabets.includes(ch)) {
        continue;
    }
    sanitize.push(ch);
}

const res = letters + sanitize.join('')

document.write(`<h3>Alphabet crypté : ${res}</h3>`);