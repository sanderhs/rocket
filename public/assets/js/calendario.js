var data;


$(function(){


	$('#calendario1').fullCalendar({

        locale: 'pt-br',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        buttonText: {
            today: 'Hoje',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia'
        },

        editable: true,
        droppable: false, // this allows things to be dropped onto the calendar !!!
        dayClick: function (date, jsEvent, view) {
            data = (($(this)).attr('data-date'));
            console.log(data);
            $('#exampleModal').modal('show');

        },
    });


    function initEvents(ele){
    	// console.log(ele);
    	ele.each((e)=>{
			console.log($(e));
    	})
    }

    initEvents($('.events'));
});	


// function addEvent(e){
// 	e.preventDefault();
// 	var titulo = $('#titulo');
// 	var desc = $('#descricao');
// 	var cor = $('#cor-fundo');
// 	dados = {
// 		titulo : titulo.value,
// 		desc : desc,
// 		cor : cor,
// 		data : data
// 	}
// 	console.log(dados);
// };