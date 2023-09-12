
let display=0;

function showHide(){
    if(display==1){

    }
}

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

createInterval(1500, firstNumber, 100)
createInterval(2500, secondNumber, 10)
createInterval(500, thirdNumber, 500)
createInterval(1000, fourthNumber, 300)
