<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Pixel art</title>
        <link rel="stylesheet" href="style.css">
        <script src="jquery.js"></script>
        <script src="jquery-ui.min.js"></script>
    </head>
    <body>

      <div class="square">
      <p class="dragImg" id="noir"></p>
      <p class="dragImg" id="blanc"></p>
      <p class="dragImg" id="vert"></p>
      <p class="dragImg" id="marron"></p>
      <p class="dragImg" id="rouge"></p>
      <p class="dragImg" id="jaune"></p>
      <p class="dragImg" id="bleu"></p>
      <p class="dragImg" id="orange"></p>
      <p class="dragImg" id="violet"></p>
      </div>

      <div id="dropHere"></div>
      <script type="text/javascript">

      $(function() {
        for (var x = 0; x < 16; x++) {
            for (var y = 0; y < 16; y++) {
                $("<div>").addClass("unit").appendTo('#dropHere');
            }
        }
    });
          </script>
          <script>
          $(function() {
              $(".dragImg").draggable({
                drag: function(e, ui) {
                  var color = $(this).css('background-color');
                  $('.unit').droppable({
                    drop : function(e, ui){
                      $(this).css('background-color', color);
                    }
                  })
                },
                revert : 'valid',
                snap : '.unit'
              })
            });
          </script>
    </body>
    </html>
