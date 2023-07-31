let currentStep = 1;

let applyContainer = document.querySelector('.apply-container');

let firstStep = document.querySelector('.first-step');
let secondStep = document.querySelector('.second-step');
let thirdStep = document.querySelector('.third-step');

let prevButton = document.querySelector('.steps-buttons button.prev');
let nextButton = document.querySelector('.steps-buttons button.next');

let prevButtonCb = document.querySelector('.cb-buttons .cb-prev');
let nextButtonCb = document.querySelector('.cb-buttons .cb-next');

prevButton.addEventListener('click', function() {
    let activeStep = document.querySelector('.single-step.active');
    if(activeStep) {
        activeStep.classList.remove('active');
    }

    firstStep.classList.add('active');
    this.classList.add('disabled');
    currentStep = 1;
});

nextButton.addEventListener('click', function () {
    let activeStep = document.querySelector('.single-step.active');
    if(activeStep) {
        activeStep.classList.remove('active');
    }

    if(currentStep === 1) {
        secondStep.classList.add('active');
        prevButton.classList.remove('disabled')
    } else if(currentStep === 2) {
        thirdStep.classList.add('active');
        this.classList.add('disabled');
        prevButton.classList.add('disabled');
        applyContainer.classList.add('active-third');
    }

    currentStep++;
});

prevButtonCb.addEventListener('click', function() {
    let activeStep = document.querySelector('.single-step.active');
    if(activeStep) {
        activeStep.classList.remove('active');
    }

    secondStep.classList.add('active');
    prevButton.classList.remove('disabled');
    nextButton.classList.remove('disabled');
    applyContainer.classList.remove('active-third');

    currentStep--;
});
