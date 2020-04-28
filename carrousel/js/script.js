$(document).ready(function()
{
  let $carrousel = $("#carrousel");
  let $img = $("#carrousel img");
  let index = $img.length - 1;
  let i = 0;
  let $currentImg = $img.eq(i);

  $img.css("display", "none");
  $currentImg.css("display", "block");

  $("body").append('<div class="control"> <button class="prev"> prev </p> <button class="next"> next </p> </div>');

  $('.next').click(function()
  {
    i++;
    if( i <= index )
    {
      $img.css('display', 'none');
      $currentImg = $img.eq(i);
      $currentImg.css('display', 'block');
    }
    else
    {
      i = index;
    }
  });

  $('.prev').click(function()
  {
    i--;
    if( i >= 0 )
    {
      $img.css('display', 'none');
      $currentImg = $img.eq(i);
      $currentImg.css('display', 'block');
    }
    else
    {
      i = 0;
    }
  });

  function deffilement()
  {
    setTimeout(function()
    {
      if(i < index)
      {
	       i++;
	    }
	    else
      {
	       i = 0;
      }

	    $img.css('display', 'none');
	    $currentImg = $img.eq(i);
	    $currentImg.css('display', 'block');

	    deffilement();
      }, 7000);
    }

    deffilement();

});
