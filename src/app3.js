
const questionNumber= document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContiner = document.querySelector(".answer-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");

let questionCounter = 0;
let currentQuestion;
let availableQuestion = [];
let availableOptions = [];
let attempt = 0;
let correctAnswer = 0;

//pushin question into this function
function setAvailableQuestion(){

    const totalQuestion = quiz3.length;
    for(let i=0; i<totalQuestion; i++){
        availableQuestion.push(quiz3[i])
    }
    
}

function getNewQuestion(){

    //set question text
    questionNumber.innerHTML = "Question " + (questionCounter + 1) + " of " + quiz3.length;
    //get random question
    const quesitonIndex = availableQuestion[Math.floor(Math.random() * availableQuestion.length)]
    currentQuestion = quesitonIndex;
    questionText.innerHTML = currentQuestion.q;
    //get 'questionIndex' from availableQuestion Array 
    const index1 = availableQuestion.indexOf(quesitonIndex);
    //remove question that already displayed, so that the question doesn't repeat
    availableQuestion.splice(index1, 1);

    const optionLen = currentQuestion.options.length;
    for(let i=0; i<optionLen; i++){

        availableOptions.push(i)
    }
    //onclick 'next', go to the other question
    optionContainer.innerHTML = '';

    let animationDelay = 0.15;

    //create options in html file
    for(let i=0; i<optionLen; i++){
        
        //generate random option, same concept of creating random question
        const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)]; 
        const index2 = availableOptions.indexOf(optionIndex);
        availableOptions.splice(index2, 1);
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optionIndex];
        option.id = optionIndex;

        //set animation for the option
        option.style.animationDelay = animationDelay + 's';
        animationDelay = animationDelay + 0.15;

        option.className = "option";
        optionContainer.appendChild(option);

        //set option can be chosen w/ getResult function
        option.setAttribute("onclick", "getResult(this)");
    }
    questionCounter++;
}

//get result of current question
function getResult(element){
    
    const id = parseInt(element.id);
    
    if(id === currentQuestion.answer){

        element.classList.add("correct");
        updateAnswerIndicator("correct");
        correctAnswer++;
        console.log("correct: " + correctAnswer);

    }
    else{

        element.classList.add("wrong");
        updateAnswerIndicator("wrong");

        const optionLen = optionContainer.children.length;
        for(let i=0; i<optionLen; i++){
            if(parseInt(optionContainer.children[i].id) === currentQuestion.answer){

                optionContainer.children[i].classList.add("correct");
                //customize it later
            }
        }
    }
    attempt++;
    optionUnclickable();
}

function optionUnclickable(){

    const optionLen = optionContainer.children.length;
    for(let i=0; i<optionLen; i++){
        optionContainer.children[i].classList.add("already-answered");
    }
}

function answersIndicator(){
    
    answersIndicatorContiner.innerHTML = '';
    const totalQuestion = quiz3.length;
    for(let i=0; i<totalQuestion; i++){

        const indicator = document.createElement("div");
        answersIndicatorContiner.appendChild(indicator);
    }
}

function updateAnswerIndicator(markType){

    answersIndicatorContiner.children[questionCounter-1].classList.add(markType);
}

function next(){

    if(questionCounter === quiz3.length){

        console.log("quiz over");
        quizOver();
    }
    else{

        getNewQuestion();
    }
}

function quizOver(){

    quizBox.classList.add("hide");
    resultBox.classList.remove("hide");
    quizResult();
}

function quizResult(){

    const percentage = (correctAnswer/quiz3.length) * 100;

    resultBox.querySelector(".total-question").innerHTML = quiz3.length;
    resultBox.querySelector(".total-attempt").innerHTML = attempt;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswer;
    resultBox.querySelector(".total-wrong").innerHTML = attempt - correctAnswer;
    resultBox.querySelector(".percentage").innerHTML = percentage.toFixed(2) + "%";
    resultBox.querySelector(".total-score").innerHTML = correctAnswer + "/" + quiz3.length;
    
}

function resetQuiz(){

    questionCounter = 0;
    correctAnswer = 0;
    attempt = 0; 

}

function tryAgain(){

    resultBox.classList.add("hide");
    quizBox.classList.remove("hide");
    resetQuiz();
    start();
}

function start(){

    homeBox.classList.add("hide");
    quizBox.classList.remove("hide");
    setAvailableQuestion();
    getNewQuestion();
    answersIndicator();
}

function redirectToPage(){
    window.location.replace("katakana.html");
}

window.onload = function(){

    homeBox.querySelector(".total-question").innerHTML = quiz3.length;
}