let currentStep = 1;
let applyContainer = document.querySelector('.apply-container');
let firstStep = document.querySelector('.first-step');
let secondStep = document.querySelector('.second-step');
let thirdStep = document.querySelector('.third-step');
let prevButton = document.querySelector('.steps-buttons button.prev');
let nextButton = document.querySelector('.steps-buttons button.next');
let prevButtonCb = document.querySelector('.cb-buttons .cb-prev');
let nextButtonCb = document.querySelector('.cb-buttons .cb-next');
let singleStepInputs = document.querySelectorAll('.single-step input.required');
let whyTextarea = document.querySelector('textarea#why');
let appContainer = document.querySelector('div#app');
let tcInput = document.querySelector('.third-step input');
let socialsLabel = document.querySelector('.socials-label');
let educationSelect = document.querySelector('#education');
let collegeInput = document.querySelector('.college-input');

function scrollToUp() {
    appContainer.scrollIntoView();
}

educationSelect.addEventListener('change', function() {
    if(this.value !== 'High school or equivalent' && this.value !== 'Other') {
        collegeInput.parentElement.classList.add('active');
    } else {
        collegeInput.parentElement.classList.remove('active');
    }
});

socialsLabel.addEventListener('click', function () {
    this.parentElement.querySelector('.socials-inner').classList.toggle('active');
    this.classList.toggle('active');
});

singleStepInputs.forEach((singleInput) => {
    singleInput.addEventListener('input', function() {
        if(singleInput.value === '') {
            singleInput.classList.add('empty');
        } else {
            singleInput.classList.remove('empty');
        }
    });
});

whyTextarea.addEventListener('input', function() {
    if(this.value === '') {
        this.parentElement.classList.add('empty');
    } else {
        this.parentElement.classList.remove('empty');
    }
});

prevButton.addEventListener('click', function() {
    let activeStep = document.querySelector('.single-step.active');
    if(activeStep) {
        activeStep.classList.remove('active');
    }

    firstStep.classList.add('active');
    this.classList.add('disabled');
    currentStep = 1;
    scrollToUp();
});

nextButton.addEventListener('click', function () {
    if(currentStep === 1) {
        let empty = false;
        singleStepInputs.forEach((input) => {
            if(input.value === '') {
                if(!empty) {
                    input.focus();
                    input.classList.add('empty');
                    input.scrollIntoView();
                    empty = true;
                }
            }
        });
        if(!empty) {
            secondStep.classList.add('active');
            prevButton.classList.remove('disabled');
            let activeStep = document.querySelector('.single-step.active');
            if(activeStep) {
                activeStep.classList.remove('active');
            }
            currentStep++;
            scrollToUp();
        }
    } else if(currentStep === 2) {
        if(whyTextarea.value !== '') {
            let activeStep = document.querySelector('.single-step.active');
            if(activeStep) {
                activeStep.classList.remove('active');
            }
            thirdStep.classList.add('active');
            this.classList.add('disabled');
            prevButton.classList.add('disabled');
            applyContainer.classList.add('active-third');
            currentStep++;
            scrollToUp();
        } else {
            whyTextarea.focus();
            whyTextarea.parentElement.classList.add('empty');
            whyTextarea.scrollIntoView();
        }
    }
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
    scrollToUp();
});

tcInput.addEventListener('click', function() {
    tcInput.parentElement.querySelector('span').classList.remove('empty');
});

nextButtonCb.addEventListener('click', function(e) {
    e.preventDefault();
    if(tcInput.checked) {
        this.parentElement.parentElement.parentElement.submit();
    } else {
        tcInput.parentElement.querySelector('span').classList.add('empty');
    }
});
