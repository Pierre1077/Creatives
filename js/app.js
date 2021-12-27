console.log('fichier chargé');

/*const h1 = document.querySelector('h1');


const intro = 'CREATIVES';


//p1.innerHTML = text;
//p2.innerHTML = text2;

let i = 0;
let j = 0;
const interval = setInterval(() => {
    h1.innerHTML += intro[i];
    i++;
    if (i >= intro.length){
        clearInterval(interval);
    }
}, 200)*/

const h1 = document.querySelector('h1');

new Typewriter(h1, {
    deleteSpeed : 20
})
    .typeString('CREATIVES')
    .start()



const ratio = .5;
var options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}

const handleIntersect = function (entries, observer){
    entries.forEach(function (entry){
        if (entry.intersectionRatio > ratio){
            console.log('visible');
            entry.target.classList.add('reveal-visible');
            entry.target.classList.remove('reveal');
            observer.unobserve(entry.target);
        }
    })
}

var observer = new IntersectionObserver(handleIntersect, options);

    document.querySelectorAll('[class*="reveal-"]').forEach(function (r){
        observer.observe(r);
    })
