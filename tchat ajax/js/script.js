$(document).ready(function()
{
  $("#envoi").click(function(e)
  {
    e.preventDefault();
    let pseudo = $("#pseudo").val();
    let message = $("#message").val();
    console.log(pseudo);
    console.log(message);

    if(pseudo != "" && message != "")
    {
      $.ajax(
        {
          url : "traitement.php",
          type : "POST",
          data : "pseudo=" + pseudo + "&message=" + message,
        });
        $('#messages').append("<p>" + pseudo + " dit : " + message + "</p>");
      }
    });

    function charger()
    {
      setTimeout( function()
      {
        let firstID = $("#messages p:first").attr("id");
        $.ajax(
          {
            url : "charger.php?id=" + firstID,
            type : "GET",
            success : function(html)
            {
              $("#messages").prepend(html);
            }
          });
        charger();
      }, 5000);
    }
  charger();

});
