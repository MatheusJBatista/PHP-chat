(function(){
	var username = prompt('Digite seu nome');

	$('.username').html(username);

	$('.chat__form').on('submit', function(a){
		var form = $(this);
		a.preventDefault();
		$.ajax({
			url: form.attr('action'),
			method: form.attr('method'),
			data: form.serialize()
		}).done(function(msg){
			form.find('textarea').val('');
			console.log('Sucesso');
		});
	});

	var pusher = new Pusher('46c60cd1b2ae910d3b08', {
      cluster: 'us2',
      encrypted: true
    });

    var channel = pusher.subscribe('message');
    channel.bind('send-message', function(data) {
      var line = $('<p>').html("<strong>"+data.message+"</strong>");
      $('.chat_message').append(line);
    });

})();