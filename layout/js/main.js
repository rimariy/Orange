

function showComment(idcom){
  if(document.getElementById(idcom).className != 'Show'){
  document.getElementById(idcom).className = 'Show';}
  else{
    document.getElementById(idcom).className = 'hide';
  }

}

// Validation Form (Loai)
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})();


////////////////////////////////////////////////////////////////////////////////////////////////////////
// like js code
$(document).ready(function(){

  // if the user clicks on the like button ...
  $('.like-btn').on('click', function(){
    var post_id = $(this).data('id');
      $clicked_btn = $(this);
      if ($clicked_btn.hasClass('fa-thumbs-o-up')) {
          action = 'like';
      }
      else if($clicked_btn.hasClass('fa-thumbs-up')){
          action = 'unlike';
      }
    $.ajax({
        url: 'index.php',
        type: 'post',
        data: {
            'action': action,
            'post_id': post_id
        },
        success: function(data){
            res = JSON.parse(data);
            if (action == "like") {
                $clicked_btn.removeClass('fa-thumbs-o-up');
                $clicked_btn.addClass('fa-thumbs-up');
            } else if(action == "unlike") {
                $clicked_btn.removeClass('fa-thumbs-up');
                $clicked_btn.addClass('fa-thumbs-o-up');
            }
            // display the number of likes 
            $clicked_btn.siblings('span.likes').text(res.likes);



        }
    });

  });



});





