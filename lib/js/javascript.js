(function (win, doc) {
  'use strict';

  let calendarEl = doc.querySelector('.calendar');
  let calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      start: 'prev, today, next',
      center: 'title',
      end: 'dayGridMonth, timeGridWeek, timeGridDay'
    },
    buttonText: {

      today: 'hoje',
      month: 'mês',
      week: 'semana',
      day: 'dia',
      list: 'lista'

    },
    locale: 'pt-br',
    dateClick: function (info) {
      alert('Clicked on: ' + info.dateStr);
      alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
      alert('Current view: ' + info.view.type);
      info.dayEl.style.backgroundColor = 'red';
    },
    events: 'lib/js/events.json',
    eventClick: function(info){
      win.location.href=`https://www.adddfm.org.br/evento/${info.event.id}`
    }

  });
  calendar.render();


})(window, document)