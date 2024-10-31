// Initialisation de l'application
document.addEventListener('DOMContentLoaded', () => {
    initCalendar();
    initEventListeners();
    loadEvents();
});

// Initialisation des écouteurs d'événements
function initEventListeners() {
    const themeToggle = document.getElementById('theme-toggle');
    themeToggle.addEventListener('click', toggleTheme);

    const addEventButton = document.getElementById('add-event-button');
    addEventButton.addEventListener('click', showEventForm);

    const cancelEventButton = document.getElementById('cancel-event');
    cancelEventButton.addEventListener('click', hideEventForm);

    const addEventForm = document.getElementById('add-event-form');
    addEventForm.addEventListener('submit', handleAddEvent);
}

// Fonction pour basculer entre les thèmes
function toggleTheme() {
    document.body.classList.toggle('dark-theme');
}

// Fonction pour afficher le formulaire d'événement
function showEventForm() {
    const eventForm = document.getElementById('event-form');
    eventForm.classList.remove('hidden');
}

// Fonction pour masquer le formulaire d'événement
function hideEventForm() {
    const eventForm = document.getElementById('event-form');
    eventForm.classList.add('hidden');
}

// Fonction pour gérer l'ajout d'un événement
function handleAddEvent(e) {
    e.preventDefault();
    const title = document.getElementById('event-title').value;
    const date = document.getElementById('event-date').value;
    const time = document.getElementById('event-time').value;
    const description = document.getElementById('event-description').value;
    const participants = document.getElementById('event-participants').value.split(',').map(p => p.trim());

    const newEvent = {
        title,
        date,
        time,
        description,
        participants
    };

    addEvent(newEvent);
    updateCalendar();
    hideEventForm();
    e.target.reset();
}