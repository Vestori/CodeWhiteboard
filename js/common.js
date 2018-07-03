$(document).ready(function() {


// Attach a submit handler to the form
$( "#chat-form" ).submit(function( event ) {

  // Stop form from submitting normally
  event.preventDefault();

  // Get some values from elements on the page:
  var $form = $( this ),
    chat_message = $form.find( "input[name='message']" ).val(),
    url = $form.attr( "action" );

  // Send the data using post
  var posting = $.post( url, { message: chat_message } );

  // Put the results in a div
  posting.done(function( data ) {
    // console.log(data);
    $form.find( "input[name='message']" ).val('');
  });

});


  // Function to refresh the users on the screen
  function get_users(){
      $.getJSON('/users.php', function(result){
        // console.log(result);
        $('#users-list').html('');
        $.each(result, function (index, value) {
          $('#users-list').append('<li class="list-group-item">'+value.email+'</li>');
        });

        setTimeout(function(){get_users();}, 5000);
      });
  }

  // Trigger the display of the users
  if ( $('#users-list').length )
  {
    get_users();
  }

  // Function to refresh the users on the screen
  function get_chats(){
      $.getJSON('/discussion.php', function(result){
        // console.log(result);
        $('#discussion-list').html('');
        $.each(result, function (index, value) {
          $('#discussion-list').append('<li>'+value.message+'</li>');
        });

        setTimeout(function(){get_chats();}, 2000);
      });
  }

  // Trigger the display of the users
  if ( $('#discussion-list').length )
  {
    get_chats();
  }


});

