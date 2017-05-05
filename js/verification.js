$(document).ready(function()
{
  $("#lastname, #firstname, #username, #message").on('blur', function()
  {
    if ($(this).val() == "")
    {
      $(this).css("background", "black");
    }
    else
    {
      $(this).css("background", "white");
    }
  })
});
