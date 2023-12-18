const textSpeechButtonss = document.getElementById('textSpeechButton');
const assistantButtonss = document.querySelector('.assistant-button');
const floatingButtonss = document.getElementById('floatingButton');

let isDragging = false;
let offset = { x: 0, y: 0 };

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

floatingButtonss.addEventListener('mousedown', startDragging); // Corregido: 'mousedown' en floatingButtonss
document.addEventListener('mouseup', stopDragging);
document.addEventListener('mousemove', drag);
floatingButtonss.addEventListener('mouseleave', () => { // Corregido: 'mouseleave' en floatingButtonss
    if (isDragging) {
        isDragging = false;
        floatingButtonss.style.transition = '';
    }
});


//************************************************************************************************ */
 // Obtén una lista de todos los campos de entrada del formulario
 const formFields = document.querySelectorAll('.custom-form input, .custom-form select, .custom-form textarea');
 //const formFields = document.querySelectorAll('.custom-form .form-group .form-control');
 const context = new AudioContext();
 // Variable para realizar un seguimiento del índice del campo actual
 let currentIndex = 0;

 // Función para mover el foco al siguiente campo del formulario
 function focusNextField() {
     if (currentIndex < formFields.length - 1) {
         formFields[currentIndex].blur(); // Pierde el foco en el campo actual
         currentIndex++; // Incrementa el índice
         formFields[currentIndex].focus(); // Establece el foco en el próximo campo
     
             // Encuentra el campo de entrada actual
             const currentField = Array.from(formFields).find(field => document.activeElement === field);
            console.log(currentField);
             if (currentField) {
                 // Dice el nombre del campo en el que se encuentra el puntero
                 speak('Complete el campo ' + currentField.name);
             } else {
                 // Si no se encuentra ningún campo activo, da una respuesta genérica
                 speak('Por favor, ingrese sus datos');
             }
     }

 }

 // Función para llenar el campo actual con el valor proporcionado
 function fillCurrentField(value) {
     formFields[currentIndex].value = value;
 }

 const textSpeechButton = document.getElementById('textSpeechButton');
 const recognition = new webkitSpeechRecognition() || new SpeechRecognition();
 recognition.lang = 'es-ES'; // Establece el idioma adecuado

 let firstTime = true; // Variable para realizar un seguimiento de la primera vez
 let listening = false;
 recognition.maxDuration = 15000; // Límite de 5 segundos



 textSpeechButton.addEventListener('click', () => {
     if (firstTime) {
         // Menciona el mensaje la primera vez
         speak('Hola, vamos a registrar los datos');
         firstTime = false; // Cambia el estado a falso para no repetir el mensaje
         console.log(formFields);
         formFields[0].focus(); // Establece el foco en el primer campo
         // Encuentra el campo de entrada actual
         const currentField = Array.from(formFields).find(field => document.activeElement === field);
console.log(currentField);
         if (currentField) {
             // Dice el nombre del campo en el que se encuentra el puntero
             speak('Complete el campo ' + currentField.name);
         } else {
             // Si no se encuentra ningún campo activo, da una respuesta genérica
             speak('Por favor, ingrese sus datos');
         }
         formFields[0].focus(); // Establece el foco en el primer campo

         // Inicia el reconocimiento después de un breve retraso para dar tiempo al mensaje
         setTimeout(() => {
            recognition.start(context.currentTime + 1, 3, 10) // Inicia el reconocimiento
         }, 2000); // Espera 2 segundos antes de iniciar el reconocimiento
     } else {
         // Si no es la primera vez, inicia el reconocimiento de inmediato
         recognition.start(context.currentTime + 1, 3, 10) // Inicia el reconocimiento
     }
 });

 // Escucha el habla del usuario
 recognition.onresult = function (event) {
  
     const transcript = event.results[0][0].transcript;
     // Divide la transcripción en palabras para interpretar el campo y el valor
     const words = transcript.split(' ');
        console.log(words);
     if (words.length >= 2) {
         const fieldName = words[0]; // La primera palabra es el nombre del campo
         let value = words.slice(1).join(' '); // Las demás palabras son el valor


         // Busca el campo de entrada correspondiente por su nombre
         //const input = document.querySelector(`input[name="${fieldName}"], select[name="${fieldName}"], textarea[name="${fieldName}"]`);
         const input = document.querySelector(`input[name="${fieldName}"]`);
         console.log(input);
         if (input) {
             if (fieldName === 'teléfono') {
                 // Si es el campo "teléfono," elimina los espacios en blanco
                 value = value.replace(/\s/g, '');
             } else if (fieldName === 'email') {
                 // Si es el campo "email," agrega "@gmail.com" al final
                 value = value.replace(/\s/g, '') + '@gmail.com';
             }

             fillCurrentField(value); // Llena el campo actual con el valor
             recognition.stop(context.currentTime + 1) // Inicia el reconocimiento
             focusNextField(); // Mueve el foco al siguiente campo
 
         }
         if (fieldName === 'silencio') {
           
            recognition.stop(context.currentTime + 1)
          }
        
     }
 };

 // Función para convertir texto en voz
 function speak(text) {
     const synth = window.speechSynthesis;
     const utterance = new SpeechSynthesisUtterance(text);
     synth.speak(utterance);
 }

 recognition.onend = function () {
     // Puedes agregar acciones adicionales cuando la grabación finaliza
 };