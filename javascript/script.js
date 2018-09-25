$(document).ready(function() {

    // MENU LATERAL------------------------------------------------------------------------------------------
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });
    $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        var elem = document.getElementById("sidebar-wrapper");
        left = window.getComputedStyle(elem,null).getPropertyValue("left");
        if(left == "-200px"){
            document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
        }
        else if(left == "200px"){
            document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
        }
    });
    // -------------------------------------------------------------------------------------------------------

    $("#add1").click(function() {
        jQuery('#add1').prop('disabled', false);
      $("#target1").submit();
    });

    // ------------------------------------------------------------------

    $("#add2").click(function() {
        var title = $("#title2").val();
        var content = $("#content2").val();

        var card = "<li>" + "<a href='#' data-toggle='modal' data-target='#myModal2'> <h2>"+ title + "</h2> <p>"+ content + "</p> </li>";

        //$('#lista1').html(card);
        document.getElementById("lista2").innerHTML += card;
        $("#title2").val(" ");
        $("#content2").val(" ");
        $("#modalAddCard2").modal("hide");
    });

    // ------------------------------------------------------------------

    $("#add3").click(function() {
        var title = $("#title3").val();
        var content = $("#content3").val();

        var card = "<li>" + "<a href='#' data-toggle='modal' data-target='#myModal3'> <h2>"+ title + "</h2> <p>"+ content + "</p> </li>";

        //$('#lista1').html(card);
        document.getElementById("lista3").innerHTML += card;
        $("#title3").val(" ");
        $("#content3").val(" ");
        $("#modalAddCard3").modal("hide");
    });
});


function openModal(id) {
    $('#edit_card_title_1').val($('#title_1_'+id).text());
    $('#edit_card_content_1').val($('#content_1_'+id).text());
    
    $('#edit_modal_1').modal('show');
}

function closeModal(modal) {    
    location.reload();
}

function excluirCard(idcandidato){

    var r = confirm("Deseja excluir esse candidato?");

    if(r == true){

      var idRemover = 'http://andrebordignon.esy.es/php/deletacandidato.php?idcandidato='+ idcandidato;
          $.ajax({
            url: idRemover,
              success:function(data){
                alert(data);
                  location.reload();
              },
              error: function(data){
                alert(data);
              }   
          });
    }
}

/* CODIGO PARA RECUPERAR VIA JSON DADOS DO BACKEND

$(document).ready(function(){
    carregarCandidatos();
});

var senhas =[];


function carregarCandidatos(){
    $.get("http://andrebordignon.esy.es/php/consultacandidatos.php", function(data1, status){
      var tabelaDados = "";
      var data = JSON.parse(data1);
      
      for (let index = 0; index < data.length; index++) {

        var id= index;
        var ano = new Date().getFullYear();

        var idade = ano - data[index].datanasc.substring(0, 4);

        senhas[index] = data[index].senha;

        var excluirCandidato = '<a onClick="excluirCandidato('+data[index].idcandidato+')" class="btn btn-danger">Remover</button>';

        var editarCandidato = '<button onClick="editarCandidato('+id+')" class="btn btn-default openmodal">Editar</button>';
        
        tabelaDados += '<tr>' +
                              '<td id=id'+id+'>'+ data[index].idcandidato + '</td>' + '<td id=nome'+id+'>'+ data[index].nome + '</td>' + '<td id=sexo'+id+'>'+ data[index].sexo + 
                              '</td>' + '<td id=cidade'+id+'>'+ data[index].cidade + '</td>'+ '<td id=estado'+id+'>'+ data[index].estado + '</td>' + 
                              '<td id=rua'+id+'>'+ data[index].rua + '</td>' + '<td id=numero'+id+'>'+ data[index].numero + '</td>' + '<td id=email'+id+'>'+ data[index].email +
                              '</td>' + '<td id=cpf'+id+'>'+ data[index].cpf + '</td>' + '<td id=cadjus'+id+'>'+ data[index].cadjus + '</td>' + '<td id=dataNasc'+id+'>'+ idade + '</td>'+ 
                              '<td>'+ editarCandidato + '</td>' + '<td>'+ excluirCandidato + '</td>'+
                       '</tr>';                       
        
      }

      $('#listagem').html(tabelaDados);
        
      });
}

function excluirCandidato(idcandidato){

    var r = confirm("Deseja excluir esse candidato?");

    if(r == true){

      var idRemover = 'http://andrebordignon.esy.es/php/deletacandidato.php?idcandidato='+ idcandidato;
          $.ajax({
            url: idRemover,
              success:function(data){
                alert(data);
                  location.reload();
              },
              error: function(data){
                alert(data);
              }   
          });
    }
}


function editarCandidato(id){

    $('#nome').val($('#nome'+id).text());
    $('#sexo').val($('#sexo'+id).text());
    $('#dataNasc').val($('#dataNasc'+id).text());
    $('#rua').val($('#rua'+id).text());
    $('#numero').val($('#numero'+id).text());
    $('#estado').val($('#estado'+id).text());
    $('#cidade').val($('#cidade'+id).text());
    $('#cpf').val($('#cpf'+id).text());
    $('#cadjus').val($('#cadjus'+id).text());
    $('#email').val($('#email'+id).text());
    $('#senha').val();

    
    $("#myModal").modal("show");
    
    

    
    $('#salvar').click(function() {
        var idcandidato = $('#id'+id).text();
        var nome = $('#nome').val();
        var sexo = $('#sexo').val();
        var dataNasc = $('#dataNasc').val();
        var rua = $('#rua').val();
        var numero = $('#numero').val();
        var estado = $('#estadoID option:selected').text();
        var cidade = $('#cidadeID option:selected').text();
        var cpf = $('#cpf').val();
        var cadjus = $('#cadjus').val();
        var email = $('#email').val();
        var senha = $('#senha').val();

        if(validarCPF(cpf) && validarIdade(dataNasc) && validarNome(nome) && validarCad(cadjus) && validarSenhaEditar(senha, senhas[id])){
            $.ajax({
              type: 'POST',
              url:'http://andrebordignon.esy.es/php/atualizacandidato.php',
              data:{idcandidato:idcandidato,nome:nome, sexo:sexo,dataNasc:dataNasc,rua:rua,
                    numero:numero,estado:estado, cidade:cidade, cpf:cpf, cadjus:cadjus,
                    email:email},
              success:function(data, status, jqXHR){
                  alert(data);
                  location.reload();
              },
              error: function(data){
                  console.log(data);
              } 
          });
        }
    });
}*/