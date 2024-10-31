let currentDate = new Date();

// Initialisation du calendrier
function initCalendar() {
    updateCalendar();
}

// Mise à jour de l'affichage du calendrier
function updateCalendar() {
    const calendarEl = document.getElementById('calendar');
    calendarEl.innerHTML = '';

    const daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();
    const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1).getDay();

    // Ajouter les jours vides du début du mois
    for (let i = 0; i < firstDayOfMonth; i++) {
        const emptyDay = document.createElement('div');
        emptyDay.classList.add('calendar-day', 'empty');
        calendarEl.appendChild(emptyDay);
    }

    // Ajouter les jours du mois
    for (let i = 1; i <= daysInMonth; i++) {
        const dayEl = document.createElement('div');
        dayEl.classList.add('calendar-day');
        dayEl.textContent = i;

        const dateStr = `${currentDate.getFullYear()}-${(currentDate.getMonth() + 1).toString().padStart(2, '0')}-${i.toString().padStart(2, '0')}`;
        if (hasEvent(dateStr)) {
            dayEl.classList.add('has-event');
        }

        dayEl.addEventListener('click', () => selectDate(dateStr));
        calendarEl.appendChild(dayEl);
    }
}

// Sélection d'une date
function selectDate(dateStr) {
    document.getElementById('event-date').value = dateStr;
    showEventForm();
}

// Navigation dans le calendrier
function previousMonth() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
}

function nextMonth() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    updateCalendar();
}