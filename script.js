var consulta = document.getElementById("consulta");
consulta.addEventListener("Click", consulta);

function consulta(){
 $.ajax({
    method: GET,
    url: "index.php",
    type: Text,
    data: {nome:"carlos", email:"cc", telefone:"321"},
    success: function(){
      $("#resultado").html(data);
    }
 });   
}
consulta();