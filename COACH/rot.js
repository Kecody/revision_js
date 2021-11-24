const secret_key = "MULTIMEDIA";
const letters = [];

for(const ch of secret_key){
    if(letters.includes(ch)) continue ;

    letters.push(ch);
}

console.log(letters);