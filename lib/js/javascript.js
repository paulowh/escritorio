(function(win,doc){
  'use strict';

  //Exibir o calendário
  function getCalendar(perfil, div)
  {
      let calendarEl=doc.querySelector(div);
      let calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          headerToolbar:{
              start: 'prev,next,today',
              center: 'title',
              end: 'dayGridMonth, timeGridWeek, timeGridDay'
          },
          buttonText:{
              today:    'hoje',
              month:    'mês',
              week:     'semana',
              day:      'dia'
          },
          locale:'pt-br',
          events: '../../controllers/ControllerEvents.php',
          dateClick: function(info) {
              if(perfil == 'manager'){
                  alert('vai pra pagina do manager');
              }else{
                  if(info.view.type=='dayGridMonth'){
                    calendar.changeView('timeGrid', info.dateStr);
                  } else{
                    win.location.href='../../views/user/add.php?date='+info.dateStr;
                  }
              }
              /*alert('Clicked on: ' + info.dateStr);
              alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
              alert('Current view: ' + info.view.type);*/
          },
          
          eventClick: function(info) {
              if(perfil == 'manager'){
                  win.location.href=`/view/manager/editar?id=${info.event.id}`;
              }
          }
      });
      calendar.render();
  }

  if(doc.querySelector('.calendarUser')){
      getCalendar('user','.calendarUser');
  }else if(doc.querySelector('.calendarManager')){
      getCalendar('manager','.calendarManager');
  }

})(window,document);