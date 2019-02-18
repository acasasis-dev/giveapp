$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

$(".myBox").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});

