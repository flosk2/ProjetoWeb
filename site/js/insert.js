$(document).ready(function() {
   
    $("#insert").click(function() {
            
            var nome = $("#nome").val();
            var curso = $("#curso").val();
            var ra = $("#ra").val();
            var dataString = "nome=" + nome + "&curso=" + curso + "&ra=" + ra + "&insert=";
            
            if ($.trim(nome).length > 0 & $.trim(curso).length > 0 & $.trim(ra).length > 0) {
                
                $.ajax({
                    type: "POST",
                    url: "http://igorlisboa/AlunosCeub/www/insert.php",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    
                    beforeSend: function() {
                        $("#insert").val('Salvando...');
                    },
                    success: function(data) {
                        
                        if (data == "success") {
                            alert("Cadastrado");
                            window.location="http://igorlisboa/AlunosCeub/www/index.html";
                            $("#insert").val('Cadastrar');
                        } else if (data == "error") {
                            alert("Erro, dados não salvos");
                        }
                    }
                });
                
                
            }else{ alert("Preencha todos os campos")}
            return false;
        });
    });