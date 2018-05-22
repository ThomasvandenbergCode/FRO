// als op een link met een submenu geklikt wordt,
// moet ik niet naar de koppeling gaan

let tweedeSub = document.querySelectorAll('.tweede-submenu > a');
console.log(tweedeSub);

for(let i=0; 1<tweedeSub.length; i++) {
  tweedeSub[i].addEventListener('click', (e)=> e.preventDefault());
}
