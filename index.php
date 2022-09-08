<!--1-->
<template>
    <div class="container">
    <div class="row">
      
      <div class="col-md-5">
        <a><img alt="Vue logo" src="./assets/dio.png"/>
        <button class="btn btn-primary btn-saf" v-on:click="calcular()"> CLIQUE AQUI!</button>
      </a></div>
      <!-- fim da imagem -->

      <div class="col-md-7">

            <h1>Cálculo de % de sangue de Joestar</h1>
            <p>
              Em 1987 uma obra prima da indústria de animações japonesa foi lançada. <b>JoJo no Kimyou na Bouken</b> é a
              animação que por meio de uma matemática <b>AVANÇADA</b> calcula seu valor de
              sangue JoJo.
            </p>

            <div class="mb-3">
              <label class="form-label" style="color:BLACK">DIO:</label>
              <input class="form-control" type="text" v-model="dia"/>
            </div>
            <div>
              <label class="form-label" style="color:BLACK">MÊS:</label>
              <input class="form-control" type="text" v-model="mes"/>
            </div>
            <div>
              <label class="form-label" style="color:BLACK">ANO:</label>
              <input class="form-control" type="text" v-model="ano"/>
            </div>

            

      </div>
      <!-- fim do formulário -->

    </div>

    <div class="row">
      <div class="offset-md-4 col-md-8">
        <!-- area para exibir as variáveis -->
        <div v-if="dia != null && anjeza == 0">
          <p>Calculando seu potencial...</p>
        </div>
          <div v-if="anjeza != 0 && nao_anjeza != 0">
        <p>Você tem {{anjeza}}% de sangue Joestar, e {{nao_anjeza}}% de sangue Plebe!</p>
        <p><b>DIO:</b>{{dia}}         <b>Sangue JoJo:</b>{{anjeza}}</p>      
        <p><b>MÊS:</b>{{mes}}         <b>Plebe:</b>{{nao_anjeza}}</p>     
        <p><b>ANO:</b>{{ano}}</p>   

        
      </div>
    </div>

  </div>
  </div>
</template>

<!--2-->

<script>

  export default {

    nome : 'App',
    data(){

      return{
        dia: null,
        mes: null,
        ano: null,
        anjeza : 0,
        nao_anjeza : 0

      }

    },
    methods : {
      somatorio(mes){
        let soma = 0
        let repeticoes = mes

        for (let i = 0; i < repeticoes; i++){
          soma = soma + mes
          mes --
        }
      return soma

      },
      calcular(){

        if(this.ano>=2000){
          this.ano = this.ano - 2000
        }
        else if(this.ano > 1000){
          this.ano = this.ano - 1900
        }

        this.nao_anjeza = this.somatorio(parseInt(this.mes)) + (this.ano/100) * (50-this.dia)
        this.anjeza = 100 - this.nao_anjeza;

        this.anjeza = Math.round(this.anjeza)
        this.nao_anjeza = Math.round(this.nao_anjeza)
      }
    }

  }

</script>

<!--3-->
<style>
 @import "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css";

 .btn-saf{
  position: absolute;
  top: 290px;
  left: 610px
 }
</style>
