document.addEventListener('DOMContentLoaded', function() {
       
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
        
      },
      

     
      
      eventClick: function(element) {
        
      
       $("#modalCalendar").modal('show');
       $("#modalCalendar #tituloModal").text('Visualizar');
     
        let title = element.event.title;
        $("#modalCalendar #nomeR").text(title);

        let cidade = element.event.extendedProps.cidade;
        $("#modalCalendar #cidade").text(cidade);

        let bairro = element.event.extendedProps.bairro;
        $("#modalCalendar #bairro").text(bairro);

        let rua = element.event.extendedProps.rua;
        $("#modalCalendar #rua").text(rua);

        let numero = element.event.extendedProps.numero;
        $("#modalCalendar #numero").text(numero);

        let tamanho = element.event.extendedProps.tamanho;
        $("#modalCalendar #tamanho").text(tamanho);

        let pagamento = element.event.extendedProps.pagamento;
        $("#modalCalendar #pagamento").text(pagamento);

       
        
        

      },
      maxTime: 24,
      
      locale:'pt-br',
      dayMaxEvents: true,
      navLinks:true,
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      

      events:routeEvents('routeCarrega'),



      

    });
    calendar.render();

  });

  


 
