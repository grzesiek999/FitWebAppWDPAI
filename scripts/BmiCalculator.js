const calculateButton = document.querySelector('#b1');
const weight = document.querySelector('#weight');
const height = document.querySelector('#height');
const resultDiv = document.querySelector('.result-div');
const resultsContainer = document.querySelector('.results-container');
const resultDivText = document.querySelector('.text-result-div');


function calculate(){
    let bmi = weight.value / Math.pow((height.value/100), 2);
    if(bmi >= 40) resultDivText.innerHTML = "Twoje BMI wskazuje na: Otyłość skrajna";
    else if(bmi < 40 && bmi >= 35) resultDivText.innerHTML = "Twoje BMI wskazuje na: II stopień otyłości";
    else if(bmi < 35 && bmi >= 30) resultDivText.innerHTML = "Twoje BMI wskazuje na: I stopień otyłości";
    else if(bmi < 30 && bmi >= 25) resultDivText.innerHTML = "Twoje BMI wskazuje na: Nadwaga";
    else if(bmi < 25 && bmi >= 18.5) resultDivText.innerHTML = "Twoje BMI wskazuje na: Waga prawidłowa";
    else if(bmi < 18.5 && bmi >= 17) resultDivText.innerHTML = "Twoje BMI wskazuje na: Niedowaga";
    else if(bmi < 17 && bmi >= 16) resultDivText.innerHTML = "Twoje BMI wskazuje na: Wychudzenie";
    else if(bmi < 16) resultDivText.innerHTML = "Twoje BMI wskazuje na: Wygłodzenie";
    else resultDivText.innerHTML = "calculate error";
    bmi = bmi.toFixed(2);
    resultDiv.innerHTML=bmi;
    resultsContainer.style = "display: block;";
}

calculateButton.addEventListener('click', calculate);