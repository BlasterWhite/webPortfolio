let age = document.getElementById("age");

function getAge(date) { 
    var diff = Date.now() - date.getTime();
    var age = new Date(diff); 
    return `${(age / (1000 * 3600 * 24 * 365.25)).toFixed(7)} ans`;
}

setInterval(() => {
    age.innerHTML = getAge(new Date("2003, 08, 18"));
},2000);

age.innerHTML = getAge(new Date("2003, 08, 18"));
