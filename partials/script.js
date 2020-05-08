$(document).ready(function(){






  ajaxDischi();

})



function ajaxDischi() {

  $.ajax({
    url: "./partials/api.php",
    method: "get",
    success: function(data){

      for (var i = 0; i < data.length; i++) {
        var infoAlbum = data[i];


        var objTemplate = {
          immagine: infoAlbum.copertina,
          nome: infoAlbum.titolo,
          autore: infoAlbum.autore,
          anno: infoAlbum.anno
        }

        var template = Handlebars.compile($("#gestione-messaggi").html());

        var pushHtml = template(objTemplate);

        $(".container").append(pushHtml);

        console.log(objTemplate);


      }

    },

    error: function(){
      console.log("error");
    }
  })

}
