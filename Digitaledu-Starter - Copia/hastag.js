window.onload = function(){

  myFunction();

}


function myFunction(){
  
  var url = "saida_pergunta.php";
  
  var obs      = document.getElementById('obs').value;
  var conteudo = document.getElementById('conteudo').value;
  var id_pro   = document.getElementById('id_pro').value;  

  $.ajax({
    type: "POST",
    url: url,
    data: {'obs':obs ,'conteudo': conteudo,'idpro': id_pro},
    success: function(data)
    {
     document.getElementById('teste').innerHTML=data;
    }
  });

}
