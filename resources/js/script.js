
/* Show Incremental Numbers */
let divNumbers = document.querySelector('#numbers');
divNumbers.style.display = "none";
let btnNumbers = document.querySelector('#btnNumbers')
let arrow = document.querySelector('#arrow');

/* Incremental Numbers */

let firstNumber = document.querySelector('#firstNumber')
let secondNumber = document.querySelector('#secondNumber')
let thirdNumber = document.querySelector('#thirdNumber')
let fourthNumber = document.querySelector('#fourthNumber')


function createInterval(total, element, timing){
    let counter = 0;

    let interval = setInterval(()=>{
        if (counter < total){
            counter++
            element.innerHTML = counter;
        }else{
            clearInterval(interval)
        }
    }, timing)
}

let check = true;

btnNumbers.addEventListener('click', ()=>{
    if(divNumbers.style.display === "none"){
        if(check){
            btnNumbers.classList.add('rotate-180')
            divNumbers.style.display = "block";
            createInterval(1500, firstNumber, 10)
            createInterval(2500, secondNumber, 6)
            createInterval(500, thirdNumber, 30)
            createInterval(1000, fourthNumber, 15)
            check = false;
            setTimeout(()=>{
                check=true;
            },15000)
        }else{
            btnNumbers.classList.add('rotate-180')
            divNumbers.style.display = "block";
        }

    }else{
        btnNumbers.classList.remove('rotate-180');
        divNumbers.style.display = "none";
        /* clearInterval(interval); */
    }
})






