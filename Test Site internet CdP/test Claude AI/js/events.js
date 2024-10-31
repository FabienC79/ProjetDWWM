let events = [];

// Chargement des événements depuis le stockage local
function loadEvents() {
    const storedEvents = localStorage.getItem('calendarEvents');
    if (storedEvents) {
        events = JSON.parse(storedEvents);
    }
}

// Sauvegarde des événements dans le stockage local
function saveEvents() {
    localStorage.setItem('calendarEvents', JSON.stringify(events));
}

// Ajout d'un nouvel événement
function addEvent(newEvent) {
    events.push(newEvent);
    saveEvents();
}

// Vérification de la présence d'un événement à une date donnée
function hasEvent(dateStr) {
    return events.some(event => event.date === dateStr);
}

// Récupération des événements pour une date donnée
function getEventsForDate(dateStr) {
    return events.filter(event => event.date === dateStr);
}

// Suppression d'un événement
function deleteEvent(index) {
    events.splice(index, 1);
    saveEvents();
    updateCalendar();
}

// Modification d'un événement
function editEvent(index, updatedEvent) {
    events[index] = updatedEvent;
    saveEvents();
    updateCalendar();
}