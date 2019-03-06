 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>agenda</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css">
  <link rel="shortcut icon" href="imagenes/labsol/banner1b.jpeg" type="image/x-icon">
  <link href='js/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
  <link href='js/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />

</head>
<body>
<!--Menu-->
<?php 
  include("menu.php");
?> 
<!--Fin Menu-->   


<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-1">
        
      </div>
      <div class="col-md-10">
        <h3 class="text-dark display-5 text-center">
          Agenda
        </h3>
         <div id='calendar'></div>
        <hr>
      </div>
      
    </div>
  </div>

</div>




 <!--Footer-->
  <?php 
    include("fotter.php");
  ?>
 <!--fin Footer--> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src='js/fullcalendar/lib/moment.min.js'></script>
  <script src='js/fullcalendar/lib/jquery.min.js'></script>
  <script src='js/fullcalendar/fullcalendar.min.js'></script>
  <script src='js/fullcalendar/locale-all.js'></script>
</body>
</html>

<script>

  $(document).ready(function() {
    var initialLocaleCode = 'es';

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'liajsdl',
        right: 'month,agendaWeek,agendaDay,listMonth'
      }, 
      locale: initialLocaleCode,
      buttonIcons: true, // show the prev/next text
      weekNumbers: true,
      navLinks: true, // can click day/week names to navigate views
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: [ 
        {
          title: 'Confirmar verticales y rúbricas para su publicación',
          start: '2019-02-15',
          end: '2019-02-15'
        },
        {
          title: 'Lanzamiento de Convocatoria InnovaHack “eSalud”',
          start: '2019-02-17',
          end: '2019-02-17'
        }, 
        {
          title: 'Recepción de proyectos e ideas propuestas para las verticales',
          start: '2019-02-17',
          end: '2019-02-17'
        },
        {
          title: 'Lanzamiento de plataforma de colaboración y desarrollo IH2018',
          start: '2019-02-17',
          end: '2019-02-17'
        },
        {
          title: 'Rueda de Prensa para Presentar Innova Hack 2018',
          start: '2019-03-07',
          end: '2019-03-07'
        },
        {
          title: 'Cierre de recepción de proyectos',
          start: '2019-03-10',
          end: '2019-03-10'
        },
        {
          title: 'Cierre de Plataforma',
          start: '2019-03-10',
          end: '2019-03-10'
        },
        {
          title: 'Publicación de Proyectos Aceptados para InnovaHack “eSalud”',
          start: '2019-03-12',
          end: '2019-03-12'
        },
        {
          title: 'Taller para el Desarrollo de Proyectos de Innovación para Empresarios',
          start: '2019-03-12',
          end: '2019-03-12'
        },
        {
          title: 'Reunión de planeación con mentores y jurados',
          start: '2019-03-20',
          end: '2019-03-20'
        },
        {
          title: 'Capacitación de mentores y jueces',
          start: '2019-03-20',
          end: '2019-03-20'
        },
        {
          title: 'Taller Especializado a Mentores y Jueces',
          start: '2019-03-20',
          end: '2019-03-20'
        },

        {
          title: 'Arranque de InnovaHack',
          start: '2019-03-22',
          end: '2019-03-22'
        },
        {
          title: 'Presentación de verticales y rúbricas por vertical ',
          start: '2019-03-22',
          end: '2019-03-22'
        },
        {
          title: 'Conferencia Magistral ',
          start: '2019-03-22',
          end: '2019-03-22'
        },
        {
          title: 'Apertura Oficial de InnovaHack',
          start: '2019-03-22',
          end: '2019-03-22'
        },
        {
          title: 'Apertura de la Arena Hacker',
          start: '2019-03-22',
          end: '2019-03-22'
        },
        {
          title: 'Apertura de la Zona de Camping para Hackers',
          start: '2019-03-22',
          end: '2019-03-22'
        },


        {
          title: 'Llegada de Participantes e instalación en zona camping',
          start: '2019-03-23T07:00:00' 
        },
        {
          title: 'Llegada de Mentores y Especialistas',
          start: '2019-03-23T09:00:00' 
        },
        {
          title: 'Primera Evaluación de ideas',
          start: '2019-03-23T12:00:00' 
        },
        {
          title: 'Platica Temática',
          start: '2019-03-23T17:00:00' 
        },
        {
          title: 'Segunda evaluación de ideas',
          start: '2019-03-23T20:00:00' 
        },
        {
          title: 'Reunión estratégica con Mentores y Jueces',
          start: '2019-03-23T21:00:00' 
        }, 

        
        {
          title: 'Actividad de reactivación',
          start: '2019-03-24T08:00:00' 
        },
        {
          title: 'Tercera evaluación de ideas',
          start: '2019-03-24T10:00:00' 
        },
        {
          title: 'Platica temática',
          start: '2019-03-24T10:00:00' 
        },
        {
          title: 'Publicación de los 3 mejores proyectos por vertical',
          start: '2019-03-24T12:00:00' 
        },
        {
          title: 'Evaluación Final de ideas',
          start: '2019-03-24T14:00:00' 
        },
        {
          title: 'Publicación de Ganadores por Vertical',
          start: '2019-03-24T15:00:00' 
        },
        {
          title: 'Presentación de ganadores y entrega de premios',
          start: '2019-03-24T15:30:00' 
        },
        {
          title: 'Clausura de InnovaHack “eSalud”',
          start: '2019-03-24T16:00:00' 
        }
         
      ]
    });

     
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>


 