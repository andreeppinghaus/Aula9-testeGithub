<!DOCTYPE html>
<html>
<head>
<style>
  li {color:#00ff00}
th,td{border: 5px solid #00ff00;}
  
table{width: 100%;}

ul.a {
  list-style-type: square;}

ol.d  {
  list-style-type: upper-roman;}

#lista {background-color: green}
#titulo {background-color:#00ff00}
#produtos {background-color:#00ff00}
#geral{background-image: url(https://th.bing.com/th/id/OIP.UJ7_STRF0blgscsGpR7pXAHaEo?w=238&h=180&c=7&o=5&pid=1.7);
background-repeat: repeat;
}
</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <title>Razor</title>
 <meta name="viewport"
content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
</head>


<body id="geral">  
  <div class="container">
    
<div id="foto">
 <img 
src= "https://th.bing.com/th/id/Reb229392ef5567198f1454172ab80eb3?rik=4RlDzs7eBDEHbw&riu=http%3a%2f%2fcdn.wallpapersafari.com%2f14%2f31%2fvVTGPN.png&ehk=5p0R00F%2fUqZGUX5cINwen%2fLwsIHf4j2pZnQr1gSUsxs%3d&risl=&pid=ImgRaw" width="30%"> 
</div>


<div id="nome">
 <hr2> <h1 style="color:#00ff00">Razor </h1> <hr2>
</div>

<div id="titulo">
  <h4 style="color:BLACK":>Melhor loja de periféricos do Brasil</h4>
  </div>

<div id="produtos" >
 <p style="color:BLACK">Nossos mouses e teclados possuem tecnologia de última geração, com sensores mais sensíveis e responsivos, botões que suportam mais de 50 milhões de cliques e contém um esquema de luzes próprio que pode ser customizado átravez de seu sistema.<br>CLIQUE ABAIXO E CONFIRA:
</p>
 <ul class="a">
   <li style="color:BLACK">
    <button style="color:green" type="button" class="btn 1" >      
      <a style="color:green" id="123"
      href=https://www.bing.com/th/id/OGC.a891c84a47d217873c3ce39dd65e62d3?pid=1.7&rurl=https%3a%2f%2fimagekit.androidphoria.com%2fwp-content%2fuploads%2fXiaomi-mouse-gamer.gif&ehk=mnpGyAb5Pslnk0u0p%2fhpgDUZ0yO4bKZncNJJgqG3fk8%3d>Mouse</a>
      </button>
      
    <br><br>
     </li>
    
     <img src="https://www.bing.com/th/id/OGC.a891c84a47d217873c3ce39dd65e62d3?pid=1.7&rurl=https%3a%2f%2fimagekit.androidphoria.com%2fwp-content%2fuploads%2fXiaomi-mouse-gamer.gif&ehk=mnpGyAb5Pslnk0u0p%2fhpgDUZ0yO4bKZncNJJgqG3fk8%3d" alt="Mouse"height="100">
    
  
  <li style="color:BLACK">
   
    <button style="color:green" type="button" class="btn 2">
      <a style="color:green"id="123" href=https://www.bing.com/th/id/OGC.158ef840498038afe9a833a550009b58?pid=1.7&rurl=https%3a%2f%2fmedia.giphy.com%2fmedia%2f10sT6ZDUhxsCIM%2fgiphy.gif&ehk=qxxkjf003yh3JVkMB%2bss1BqVvLSpOS%2ba%2brYwLnG2260%3d>Teclado</a>
     
      </button onclick="document.getElementById('123').innerHTML = Date(https://www.bing.com/th/id/OGC.a891c84a47d217873c3ce39dd65e62d3?pid=1.7&rurl=https%3a%2f%2fimagekit.androidphoria.com%2fwp-content%2fuploads%2fXiaomi-mouse-gamer.gif&ehk=mnpGyAb5Pslnk0u0p%2fhpgDUZ0yO4bKZncNJJgqG3fk8%3d)"> 
      
    <br><br>
   
    </li>
  <img src="https://www.bing.com/th/id/OGC.158ef840498038afe9a833a550009b58?pid=1.7&rurl=https%3a%2f%2fmedia.giphy.com%2fmedia%2f10sT6ZDUhxsCIM%2fgiphy.gif&ehk=qxxkjf003yh3JVkMB%2bss1BqVvLSpOS%2ba%2brYwLnG2260%3d" alt="Teclado" height="100">
</div>



<div id="dados" style="background-color:black;" >
<p style="color:#00ff00;">Somos uma empresa especializada em distribuição de periféricos no Brasil.<p>

</div>
<div>
<ol class="d" id="lista">
  <li>Entre em Contato: 21 9xxx00688</li>
  <li>Encomende um de nossos produtos!</li>
  <li>Confirme o pagamento</li>
  <li>Aguarde a entrega de seu produto no conforto de sua casa</li>
</ol>
</div>

<p3 style="color:#00ff00">TABELA DE VALORES DOS PRODUTOS:</p3>
<br>
<table>
  <br>
  <thead>
  <tr style="color:#00ff00">
    <th>PRODUTOS</th>
    <th>VALORES</th>
  </tr>
  </thead>
  <tbody>
  <tr style="color:#00ff00">
    <td style="text-align:center">Mouse</td>
    <td style="text-align:center">R$ 50,00</td>
  </tr>
  <tr style="color:#00ff00">
    <td style="text-align:center">Teclado</td>
    <td style="text-align:center">R$ 150,00</td>
  </tr>
  </tbody>
  <tfoot style="color:#00ff00">
    <th>Total do Kit</th>
    <th>R$ 200,00</th>
  </tfoot>
</table>
</div>
<br><br>
<div class="row align-items-center">
  
  <div class="col-md-4"><br></div>
  <div class="col-md-4 offset-md-4">
    <div class="card" style="width: 18rem;">
      <img width=400px src="https://www.bing.com/th/id/OGC.a891c84a47d217873c3ce39dd65e62d3?pid=1.7&rurl=https%3a%2f%2fimagekit.androidphoria.com%2fwp-content%2fuploads%2fXiaomi-mouse-gamer.gif&ehk=mnpGyAb5Pslnk0u0p%2fhpgDUZ0yO4bKZncNJJgqG3fk8%3d" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
  </div>

</div>

</div>

</body>
</html>
