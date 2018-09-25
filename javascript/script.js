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
});


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