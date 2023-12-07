const textSpeechButtonss = document.getElementById('textSpeechButton');
const assistantButtonss = document.querySelector('.assistant-button');
const floatingButtonss = document.getElementById('floatingButton');
const formFields = document.querySelectorAll('.custom-form input, .custom-form select, .custom-form textarea');
const recognition = new webkitSpeechRecognition() || new SpeechRecognition();
recognition.lang = 'es-ES';

let isDragging = false;
let offset = { x: 0, y: 0 };
let currentIndex = 0;

function startDragging(e) {
    isDragging = true;
    const rect = floatingButtonss.getBoundingClientRect();
    offset.x = e.clientX - rect.left;
    offset.y = e.clientY - rect.top;
    floatingButtonss.style.transition = 'none';
}

function stopDragging() {
    isDragging = false;
    floatingButtonss.style.transition = '';
}

function drag(e) {
    if (isDragging) {
        const x = e.clientX - offset.x;
        const y = e.clientY - offset.y;
        floatingButtonss.style.left = x + 'px';
        floatingButtonss.style.top = y + 'px';
    }
}

function focusNextField() {
    if (currentIndex < formFields.length - 1) {
        formFields[currentIndex].blur();
        currentIndex++;
        formFields[currentIndex].focus();

        const currentField = Array.from(formFields).find(field => document.activeElement === field);

        if (currentField) {
            speak('Complete el campo ' + currentField.name);
        } else {
            speak('Por favor, ingrese sus datos');
        }
    }
}

function fillCurrentField(value) {
    formFields[currentIndex].value = value;
}

function speak(text) {
    const synth = window.speechSynthesis;
    const utterance = new SpeechSynthesisUtterance(text);
    synth.speak(utterance);
}

floatingButtonss.addEventListener('mousedown', startDragging);
document.addEventListener('mouseup', stopDragging);
document.addEventListener('mousemove', drag);
floatingButtonss.addEventListener('mouseleave', () => {
    if (isDragging) {
        isDragging = false;
        floatingButtonss.style.transition = '';
    }
});
//********************************************************************************************* */
assistantButtonss.addEventListener('click', () => {
    const activeField = document.activeElement;
    
    if (activeField.tagName === 'INPUT' || activeField.tagName === 'TEXTAREA') {
        speak('Dime tus comandos');
        recognition.start();
    } else {
        speak('No hay campo de texto seleccionado');
    }
});

recognition.onresult = function (event) {
    const transcript = event.results[0][0].transcript;
    const words = transcript.toLowerCase().split(' ');

    if (words.length >= 2) {
        const value = words.slice(1).join(' ');

        if (document.activeElement.tagName === 'TEXTAREA' || (document.activeElement.tagName === 'INPUT' && document.activeElement.type === 'text')) {
            // Solo llena el campo actual si es un campo de texto o un área de texto
            document.activeElement.value = value;
        }

        recognition.stop();
        focusNextField();
    }
};

textSpeechButtonss.addEventListener('click', () => {
    // Resto del código para el botón de texto a voz
});
