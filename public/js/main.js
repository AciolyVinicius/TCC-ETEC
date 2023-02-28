$(document).ready(function() {

    function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#end_rua").val("");
                $("#end_bairro").val("");
                $("#end_cidade").val("");
                $("#end_estado").val("");
                
            }
            
            //Quando o campo cep perde o foco.
            $("#btn_cep").click(function(e) {
                e.preventDefault();

                //Nova variável "cep" somente com dígitos.
                var cep = $('#cep').val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#end_rua").val("...");
                        $("#end_bairro").val("...");
                        $("#end_cidade").val("...");

                        //Consulta o webservice viacep.com.br/

                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#end_rua").val(dados.logradouro);
                                $("#end_bairro").val(dados.bairro);
                                $("#end_cidade").val(dados.localidade);
                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
