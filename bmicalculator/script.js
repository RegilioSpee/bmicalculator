let bereken = document.getElementById('bereken');
let lengte = document.getElementById('lengte');
let gewicht = document.getElementById('gewicht');
let resultaat = document.getElementById('resultaat');
let input = document.getElementById('input');

gewicht.addEventListener('focus', function() {
	gewicht.value = '';
})
lengte.addEventListener('focus', function() {
	lengte.value = '';
})

bereken.addEventListener('click', berekenDit);

function clearResult(){}
function berekenDit(){
    ajax(gewicht.value, lengte.value);
}