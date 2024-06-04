// Lista de preguntas y opciones
const questions = [
    {
        question: '¿Cúal es el sistema operativo mas usado en el mundo?',
        options: ['Windows', 'MacOS', 'Linux', 'RedHat'],
        correctAnswer: 0
    },
    {
        question: '¿En que año se lanzo Windows 11?',
        options: ['2021', '2023', '2010', '2020'],
        correctAnswer: 0
    },
    {
        question: '¿Quién es el cofundador de Microsoft"?',
        options: ['Steve Jobs', 'Bill Gates', 'Warren Buffet', 'Elon Musk'],
        correctAnswer: 1
    },

    {
        question: '¿Cual seria un ejemplo correcto de un hola mundo en C#"?',
        options: ['Console.WriteLine("Hello World!");', 'Console.ReadLine("Hello World");'],
        correctAnswer: 0
    },
    // Agregar más preguntas aquí
];

const questionElement = document.getElementById('question');
const optionsElement = document.getElementById('options');
const nextButton = document.getElementById('nextButton');
const questionIndicator = document.getElementById('questionIndicator');
const timerElement = document.getElementById('timer');

let userAnswers = [];
let remainingQuestions = [...questions];
let currentQuestionIndex = 0;
let totalQuestions = questions.length;
let timeLimit = 45 * 60; // 45 minutos en segundos

// Recuperar la marca de tiempo del localStorage
const startTime = localStorage.getItem('startTime');

if (startTime) {
    // Calcular el tiempo transcurrido desde que comenzó el examen
    const elapsedTime = (Date.now() - parseInt(startTime)) / 1000;
    timeLimit -= elapsedTime;

    // Verificar si se ha agotado el tiempo
    if (timeLimit <= 0) {
        alert('Tiempo agotado');
    }
}

function loadNextQuestion() {
    if (remainingQuestions.length === 0) {
        alert('Fin del examen');
        return;
    }

    const randomIndex = Math.floor(Math.random() * remainingQuestions.length);
    const currentQuestion = remainingQuestions.splice(randomIndex, 1)[0];

    questionElement.textContent = `Pregunta ${userAnswers.length + 1}: ${currentQuestion.question}`;
    optionsElement.innerHTML = '';

    currentQuestion.options.forEach((option, i) => {
        const optionElement = document.createElement('div');
        optionElement.className = 'option';
        optionElement.innerHTML = `
            <input type="radio" name="answer" value="${i}" id="option${String.fromCharCode(65 + i)}">
            <label for="option${String.fromCharCode(65 + i)}">${String.fromCharCode(97 + i)}) ${option}</label>`;
        optionsElement.appendChild(optionElement);
    });

    currentQuestionIndex++;
    questionIndicator.textContent = `Pregunta ${currentQuestionIndex} de ${totalQuestions}`;
}

function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = seconds % 60;
    return `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
}

function updateTimer() {
    timerElement.innerHTML = formatTime(timeLimit);
}

function startTimer() {
    if (!startTime) {
        // Iniciar el temporizador solo si no se ha iniciado antes
        localStorage.setItem('startTime', Date.now());
    }

    const timerInterval = setInterval(() => {
        if (timeLimit <= 0) {
            clearInterval(timerInterval);
            alert('Tiempo agotado');
        } else {
            if (timeLimit <= 10) {
                timerElement.style.color = 'red';
                timerElement.style.animation = 'timerAnimation 1s ease infinite';
            }
            updateTimer();
            timeLimit--;
        }
    }, 1000);
}

loadNextQuestion();
startTimer();

nextButton.addEventListener('click', () => {
    const selectedOptionIndex = document.querySelector('input[name="answer"]:checked');
    if (selectedOptionIndex) {
        userAnswers.push(selectedOptionIndex.value);
    }
    loadNextQuestion();
});
