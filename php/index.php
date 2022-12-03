<?php
require_once('bdd.php');

// include('mapaches.php');


$sql = "SELECT title,color,descrip,startt FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="../css/calen.css">

    <title>Inicio</title>
	


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>



</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>My journal</h1>
                <p class="lead">Here you will be reading a little bit of what you have registered during the days... :)</p>
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="submit" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
									  <option value="">Seleccionar</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
						  <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
						  <option style="color:#000;" value="#000">&#9724; Negro</option>
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Fecha Final</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" readonly>
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary">Guardar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modificar Evento</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Titulo</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Seleccionar</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
						  <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
						  <option style="color:#000;" value="#000">&#9724; Negro</option>
						  
						</select>
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Eliminar Evento</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->
	<div id="calendar"></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  

</body>
  <!-- jQuery Version 1.11.1 -->
  <script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<script >!function() {

var today = moment();

function Calendar(selector, events) {
  this.el = document.querySelector(selector);
  this.events = events;
  this.current = moment().date(1);
  this.draw();
  var current = document.querySelector('.today');
  if(current) {
	var self = this;
	window.setTimeout(function() {
	  self.openDay(current);
	}, 500);
  }
}

Calendar.prototype.draw = function() {
  //Create Header
  this.drawHeader();

  //Draw Month
  this.drawMonth();

  this.drawLegend();
}

Calendar.prototype.drawHeader = function() {
  var self = this;
  if(!this.header) {
	//Create the header elements
	this.header = createElement('div', 'header');
	this.header.className = 'header';

	this.title = createElement('h1');

	var right = createElement('div', 'right');
	right.addEventListener('click', function() { self.nextMonth(); });

	var left = createElement('div', 'left');
	left.addEventListener('click', function() { self.prevMonth(); });

	//Append the Elements
	this.header.appendChild(this.title); 
	this.header.appendChild(right);
	this.header.appendChild(left);
	this.el.appendChild(this.header);
  }

  this.title.innerHTML = this.current.format('MMMM YYYY');
}

Calendar.prototype.drawMonth = function() {
  var self = this;
  
  this.events.forEach(function(ev) {
   ev.date = self.current.clone().date(Math.random() * (29 - 1) + 1);
  });
  
  
  if(this.month) {
	this.oldMonth = this.month;
	this.oldMonth.className = 'month out ' + (self.next ? 'next' : 'prev');
	this.oldMonth.addEventListener('webkitAnimationEnd', function() {
	  self.oldMonth.parentNode.removeChild(self.oldMonth);
	  self.month = createElement('div', 'month');
	  self.backFill();
	  self.currentMonth();
	  self.fowardFill();
	  self.el.appendChild(self.month);
	  window.setTimeout(function() {
		self.month.className = 'month in ' + (self.next ? 'next' : 'prev');
	  }, 16);
	});
  } else {
	  this.month = createElement('div', 'month');
	  this.el.appendChild(this.month);
	  this.backFill();
	  this.currentMonth();
	  this.fowardFill();
	  this.month.className = 'month new';
  }
}

Calendar.prototype.backFill = function() {
  var clone = this.current.clone();
  var dayOfWeek = clone.day();

  if(!dayOfWeek) { return; }

  clone.subtract('days', dayOfWeek+1);

  for(var i = dayOfWeek; i > 0 ; i--) {
	this.drawDay(clone.add('days', 1));
  }
}

Calendar.prototype.fowardFill = function() {
  var clone = this.current.clone().add('months', 1).subtract('days', 1);
  var dayOfWeek = clone.day();

  if(dayOfWeek === 6) { return; }

  for(var i = dayOfWeek; i < 6 ; i++) {
	this.drawDay(clone.add('days', 1));
  }
}

Calendar.prototype.currentMonth = function() {
  var clone = this.current.clone();

  while(clone.month() === this.current.month()) {
	this.drawDay(clone);
	clone.add('days', 1);
  }
}

Calendar.prototype.getWeek = function(day) {
  if(!this.week || day.day() === 0) {
	this.week = createElement('div', 'week');
	this.month.appendChild(this.week);
  }
}

Calendar.prototype.drawDay = function(day) {
  var self = this;
  this.getWeek(day);

  //Outer Day
  var outer = createElement('div', this.getDayClass(day));
  outer.addEventListener('click', function() {
	self.openDay(this);
  });

  //Day Name
  var name = createElement('div', 'day-name', day.format('ddd'));

  //Day Number
  var number = createElement('div', 'day-number', day.format('DD'));


  //Events
  var events = createElement('div', 'day-events');
  this.drawEvents(day, events);

  outer.appendChild(name);
  outer.appendChild(number);
  outer.appendChild(events);
  this.week.appendChild(outer);
}

Calendar.prototype.drawEvents = function(day, element) {
  if(day.month() === this.current.month()) {
	var todaysEvents = this.events.reduce(function(memo, ev) {
	  if(ev.date.isSame(day, 'day')) {
		memo.push(ev);
	  }
	  return memo;
	}, []);

	todaysEvents.forEach(function(ev) {
	  var evSpan = createElement('span', ev.color);
	  element.appendChild(evSpan);
	});
  }
}
Calendar.prototype.getDayClass = function(day) {
	classes = ['day'];
	if(day.month() !== this.current.month()) {
	  classes.push('other');
	} else if (today.isSame(day, 'day')) {
	  classes.push('today');
	}
	return classes.join(' ');
  }

  Calendar.prototype.openDay = function(el) {
	var details, arrow;
	var dayNumber = +el.querySelectorAll('.day-number')[0].innerText || +el.querySelectorAll('.day-number')[0].textContent;
	var day = this.current.clone().date(dayNumber);

	var currentOpened = document.querySelector('.details');

	//Check to see if there is an open detais box on the current row
	if(currentOpened && currentOpened.parentNode === el.parentNode) {
	  details = currentOpened;
	  arrow = document.querySelector('.arrow');
	} else {
	  //Close the open events on differnt week row
	  //currentOpened && currentOpened.parentNode.removeChild(currentOpened);
	  if(currentOpened) {
		currentOpened.addEventListener('webkitAnimationEnd', function() {
		  currentOpened.parentNode.removeChild(currentOpened);
		});
		currentOpened.addEventListener('oanimationend', function() {
		  currentOpened.parentNode.removeChild(currentOpened);
		});
		currentOpened.addEventListener('msAnimationEnd', function() {
		  currentOpened.parentNode.removeChild(currentOpened);
		});
		currentOpened.addEventListener('animationend', function() {
		  currentOpened.parentNode.removeChild(currentOpened);
		});
		currentOpened.className = 'details out';
	  }

	  //Create the Details Container
	  details = createElement('div', 'details in');

	  //Create the arrow
	  var arrow = createElement('div', 'arrow');

	  //Create the event wrapper

	  details.appendChild(arrow);
	  el.parentNode.appendChild(details);
	}

	var todaysEvents = this.events.reduce(function(memo, ev) {
	  if(ev.date.isSame(day, 'day')) {
		memo.push(ev);
	  }
	  return memo;
	}, []);

	this.renderEvents(todaysEvents, details);

	arrow.style.left = el.offsetLeft - el.parentNode.offsetLeft + 27 + 'px';
  }

  Calendar.prototype.renderEvents = function(events, ele) {
	//Remove any events in the current details element
	var currentWrapper = ele.querySelector('.events');
	var wrapper = createElement('div', 'events in' + (currentWrapper ? ' new' : ''));

	events.forEach(function(ev) {
	  var div = createElement('div', 'event');
	  var square = createElement('div', 'event-category ' + ev.color);
	  var span = createElement('span', '', ev.eventName);

	  div.appendChild(square);
	  div.appendChild(span);
	  wrapper.appendChild(div);
	});

	if(!events.length) {
	  var div = createElement('div', 'event empty');
	  var span = createElement('span', '', 'No Events');

	  div.appendChild(span);
	  wrapper.appendChild(div);
	}

	if(currentWrapper) {
	  currentWrapper.className = 'events out';
	  currentWrapper.addEventListener('webkitAnimationEnd', function() {
		currentWrapper.parentNode.removeChild(currentWrapper);
		ele.appendChild(wrapper);
	  });
	  currentWrapper.addEventListener('oanimationend', function() {
		currentWrapper.parentNode.removeChild(currentWrapper);
		ele.appendChild(wrapper);
	  });
	  currentWrapper.addEventListener('msAnimationEnd', function() {
		currentWrapper.parentNode.removeChild(currentWrapper);
		ele.appendChild(wrapper);
	  });
	  currentWrapper.addEventListener('animationend', function() {
		currentWrapper.parentNode.removeChild(currentWrapper);
		ele.appendChild(wrapper);
	  });
	} else {
	  ele.appendChild(wrapper);
	}
  }

  Calendar.prototype.drawLegend = function() {
	var legend = createElement('div', 'legend');
	var calendars = this.events.map(function(e) {
	  return e.calendar + '|' + e.color;
	}).reduce(function(memo, e) {
	  if(memo.indexOf(e) === -1) {
		memo.push(e);
	  }
	  return memo;
	}, []).forEach(function(e) {
	  var parts = e.split('|');
	  var entry = createElement('span', 'entry ' +  parts[1], parts[0]);
	  legend.appendChild(entry);
	});
	this.el.appendChild(legend);
  }

  Calendar.prototype.nextMonth = function() {
	this.current.add('months', 1);
	this.next = true;
	this.draw();
  }

  Calendar.prototype.prevMonth = function() {
	this.current.subtract('months', 1);
	this.next = false;
	this.draw();
  }

  window.Calendar = Calendar;

  function createElement(tagName, className, innerText) {
	var ele = document.createElement(tagName);
	if(className) {
	  ele.className = className;
	}
	if(innerText) {
	  ele.innderText = ele.textContent = innerText;
	}
	return ele;
  }
}();

!function() {
  var data = [
	/*
	{ eventName: 'Lunch Meeting w/ Mark', calendar: 'Work', color: 'orange' },
	{ eventName: 'Interview - Jr. Web Developer', calendar: 'Work', color: 'orange' },
	{ eventName: 'Demo New App to the Board', calendar: 'Work', color: 'orange' },
	{ eventName: 'Dinner w/ Marketing', calendar: 'Work', color: 'orange' },

	{ eventName: 'Game vs Portalnd', calendar: 'Sports', color: 'blue' },
	{ eventName: 'Game vs Houston', calendar: 'Sports', color: 'blue' },
	{ eventName: 'Game vs Denver', calendar: 'Sports', color: 'blue' },
	{ eventName: 'Game vs San Degio', calendar: 'Sports', color: 'blue' },

	{ eventName: 'School Play', calendar: 'Kids', color: 'yellow' },
	{ eventName: 'Parent/Teacher Conference', calendar: 'Kids', color: 'yellow' },
	{ eventName: 'Pick up from Soccer Practice', calendar: 'Kids', color: 'yellow' },
	{ eventName: 'Ice Cream Night', calendar: 'Kids', color: 'yellow' },

	{ eventName: 'Free Tamale Night', calendar: 'Other', color: 'green' },
	{ eventName: 'Bowling Team', calendar: 'Other', color: 'green' },
	{ eventName: 'Teach Kids to Code', calendar: 'Other', color: 'green' },
	{ eventName: 'Startup Weekend', calendar: 'Other', color: 'green' } */
	
	
	
  ];

  

  function addDate(ev) {
	
  }

  var calendar = new Calendar('#calendar', data);

}();</script>
</html>
