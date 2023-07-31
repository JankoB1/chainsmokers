let currentStep = 1;

let firstStep = document.querySelector('.first-step');
let secondStep = document.querySelector('.second-step');
let thirdStep = document.querySelector('.third-step');

let prevButton = document.querySelector('.steps-buttons button.prev');
let nextButton = document.querySelector('.steps-buttons button.next');

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
    }

    currentStep++;
});
