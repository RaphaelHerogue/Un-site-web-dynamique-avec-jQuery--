$(document).ready(function()
{
  let $mdp = $("#mdp");
  let $confirmation = $("#confirmation");
  let $pseudo = $("#pseudo");
  let $mail = $("#mail");
  let $champ = $(".champ");
  let $reset = $("#rafraichir");
  let $envoi = $("#envoi");
  let $erreur = $("#erreur");

  /*$erreur.css(
  {
    display : "none",
  });*/

  $champ.keyup(function()
  {
    console.log($(this).val());
    console.log($(this).val().length);
    if($(this).val().length <= 7)
    {
      $(this).css(
      {
        borderColor : "red",
      })
    }
    else
    {
      $(this).css(
      {
        borderColor : "green",
      });
    }
  });

  $confirmation.keyup(function()
  {
    if($(this).val() != $mdp.val())
    {
      $(this).css(
        {
     	     borderColor : "red",
        });
    }
        else
        {
	         $(this).css(
             {
	              borderColor : "green",
	           });
        }
    });

  $envoi.click(function(e)
  {
    verifier($pseudo);
    verifier($mdp);
    verifier($confirmation);
    verifier($mail);

    e.preventDefault();
  });

  function verifier(champ)
  {
    if($champ.val() == "")
    {
    	 $erreur.css(
       {
         display : "flex",
       });
    }
  }

  $reset.click(function()
  {
    $champ.css(
    {
      borderColor : "#ccc",
    	color : "#555",
    });
    $erreur.css(
    {
      display : "none",
    });
  });
});
