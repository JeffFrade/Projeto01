new Vue({
    el: "#app",
    data: {
        cidade: "",
        estado: "",
		bairro: "",
		endereco: "",
        cep: "00000000",
		img: ""
    },
    methods: {
        getCity: function() {
            var self = this;
            $.getJSON("https://viacep.com.br/ws/" + this.cep+"/json", function(result) {
                if (("erro" in result)) {
                    self.error = "CEP não encontrado";
                    self.city = "";
                    $(".error").addClass("no");
                } else {
                    //self.cidade = result.logradouro +", "+result.bairro+ " - "+ result.localidade + "/" + result.uf;
                    self.cidade = result.localidade;
                    self.estado = result.uf;
                    self.bairro = result.bairro;
                    self.endereco = result.logradouro;

                    $(".display").addClass("animated fadeInDown");
                }
            });
        }
    },
    watch: {
        cep: function() {
            if (this.cep.length === 8) {
                this.getCity();
                this.error = "";
                $(".error").removeClass("no");
            }
            if (this.cep.length < 8) {
                this.city = "";
                this.error = "CEP Inválido";
                $(".error").addClass("no");
                $(".display").removeClass("animated fadeInDown");
            }
        }
    },
    ready: function(){
        this.getCity();
    }
});