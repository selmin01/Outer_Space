var diryJ,dirxJ,jog,velJ,pJx,pJy;
var velT;
var tamTelaW,tamTelaH,talaMsg;
var jogo;
var frames;
var contMeteoros,painelContMeteoros,velM,meteorosTotal,tmpCriaMeteoro;
var iExplosao,iSom;
var vidaPlaneta,barraPlaneta;
var pontuacao = 0;

// Essa função controla a movimentação da Nave
function teclaDw() {
  var tecla=event.keyCode;

  if (tecla==38) {//cima
    diryJ=-1;
  }else if (tecla==40) {//baixo
    diryJ=1;
  }
  if (tecla==37) {//esquerda
    dirxJ=-1;
  }else if (tecla==39) {//direita
    dirxJ=1;
  }
  if (tecla==32) {//espaço
    // Passando para função do tiro a posição da nave
    atirar(pJx+25.5,pJy);
  }
}

// Essa função Para a movimentação da Nave quando a tecla deixa de ser pressionada
function teclaUp() {
  var tecla=event.keyCode;

  if ((tecla==38)||(tecla==40)) {
    diryJ=0;
  }
  if ((tecla==37)||(tecla==39)) {
    dirxJ=0;
  }
}

function controlaJogador() {
  pJy+=diryJ*velJ;
  pJx+=dirxJ*velJ;
  jog.style.top=pJy+"px";
  jog.style.left=pJx+"px";
}

function criaMeteoro() {
  if(jogo){
    var y=0;
    var x=Math.random()*tamTelaW; 
    var meteoro=document.createElement("div");
    var att1=document.createAttribute("class");
    var att2=document.createAttribute("style");
    att1.value="meteoro";
    att2.value="top"+y+"px;left:"+x+"px;";
    meteoro.setAttributeNode(att1);
    meteoro.setAttributeNode(att2);
    document.body.appendChild(meteoro);
    contMeteoros--;
  }
}

function controlaMeteoro() {
   meteorosTotal=document.getElementsByClassName("meteoro");
   var tam=meteorosTotal.length;
   for(var i=0; i<tam; i++){
     if(meteorosTotal[i]){
       var pm=meteorosTotal[i].offsetTop;
       pm+=velM;
       meteorosTotal[i].style.top=pm+"px";
       if(pm>tamTelaH){
         vidaPlaneta-=10; 
         criaExplosao(2,meteorosTotal[i].offsetLeft+45,null);
         meteorosTotal[i].remove();
       }
     }
   }
}

function atirar(x,y) {
  var tiro=document.createElement("div"); 
  var att1=document.createAttribute("class"); 
  var att2=document.createAttribute("style");
  att1.value="tiroJog";
  att2.value="top:"+y+"px;left:"+x+"px";
  tiro.setAttributeNode(att1);
  tiro.setAttributeNode(att2);
  document.body.appendChild(tiro);
}

function controlaTiro() {
  var tiros=document.getElementsByClassName("tiroJog");
  var tam=tiros.length;
  //loop para percorrer o vetor (tiros)
  for(var i=0; i<tam; i++){
    if(tiros[i]){
      var pt=tiros[i].offsetTop; 
      pt-=velT;
      tiros[i].style.top=pt+"px";
      colisaoTM(tiros[i]);
      if(pt<0){
        tiros[i].remove();
      }
    }
  }
}

function colisaoTM(tiro) {
  var tam=meteorosTotal.length;
  for(var i=0; i<tam; i++){
    if(meteorosTotal[i]){
      if(((tiro.offsetTop<=(meteorosTotal[i].offsetTop+50))&& 
      ((tiro.offsetTop+12)>=(meteorosTotal[i].offsetTop))) 
      &&
      ((tiro.offsetLeft<=(meteorosTotal[i].offsetLeft+54))&& 
      ((tiro.offsetLeft+12)>=(meteorosTotal[i].offsetLeft)))){
        criaExplosao(1,meteorosTotal[i].offsetLeft-5,meteorosTotal[i].offsetTop);
        meteorosTotal[i].remove();
        tiro.remove();
        pontuacao = pontuacao + 1;
        console.log(pontuacao);
        document.querySelector('.pontuacao').innerHTML = "Meteoros Destruídos: " + pontuacao
        

      }
    }
  
  }
  
  
}

function criaExplosao(tipo,x,y) { //tipo 1=AR, 2=TERRA
  if(document.getElementById("explosao"+(iExplosao-1))){
    document.getElementById("explosao"+(iExplosao-1)).remove();
  }
  var explosao=document.createElement("div");
  var img=document.createElement("img");
  //var som=document.createElement("audio");
  //atributos para div
  var att1=document.createAttribute("class");
  var att2=document.createAttribute("style");
  var att3=document.createAttribute("id");
  //atributos para imagem
  var att4=document.createAttribute("src");
  //atributos para audio
  //var att5=document.createAttribute("src");
  //var att6=document.createAttribute("id");

  att3.value="explosao"+iExplosao;
  if(tipo==1){
    att1.value="explosaoAr";
    att2.value="top:"+y+"px;left:"+x+"px";
    att4.value="../estilo/imgs/explosao.png?"+new Date();
  }else{
    att1.value="explosaoChao";
    att2.value="top:"+(tamTelaH-48)+"px;left:"+(x-37)+"px";
    att4.value="../estilo/imgs/explosao_chao.png?"+new Date();
  }
  //att5.value="";
  //att6.value="som"+iSom;
  explosao.setAttributeNode(att1);
  explosao.setAttributeNode(att2);
  explosao.setAttributeNode(att3);
  img.setAttributeNode(att4);
  //som.setAttributeNode(att5);
  //som.setAttributeNode(att6);
  explosao.appendChild(img);
  //explosao.appendChild(som);
  document.body.appendChild(explosao); 
  //document.getElementById("som"+iSom).play(); //da o play no som
  iExplosao++; //indice de explosao
  //iSom++;
}

function gereciaGame() { //caso ganhar
  barraPlaneta.style.width=vidaPlaneta+"px";
  if(contMeteoros<=0){
    jogo=false;
    clearInterval(tmpCriaMeteoro);
    telaMsg.style.backgroundImage="url('../estilo/imgs/fundo_Vitoria.jpg')";
    telaMsg.style.display="block";
    naveJog.style.display="none";
  }
  if(vidaPlaneta<=0){ //caso perder
    jogo=false;
    clearInterval(tmpCriaMeteoro);
    telaMsg.style.backgroundImage="url('../estilo/imgs/fundo_FimDeJogo.jpg')";
    telaMsg.style.display="block";
    naveJog.style.display="none";
  }
}

function gameLoop() {
  if (jogo) {
    //funçoes de controle
    controlaJogador();
    controlaTiro();
    controlaMeteoro();
  }
  gereciaGame();
  frames=requestAnimationFrame(gameLoop);
}


function start() {
  //controle dos meteoros
  contMeteoros=150;
  velM=3;
  meteorosTotal=document.getElementsByClassName("meteoro");
  var tam=meteorosTotal.length;
  for(var i=0; i<tam; i++){
    if(meteorosTotal[i]){
      meteorosTotal[i].remove();
    }
  }
  clearInterval(tmpCriaMeteoro);
  cancelAnimationFrame(frames);
  telaMsg.style.display="none";
  naveJog.style.display="block";
  vidaPlaneta=300;
  //posição jogador
  pJx=tamTelaW/2;
  pJy=tamTelaH/2;
  jog.style.top=pJy+"px";
  jog.style.left=pJx+"px";
  //controle de explosao
  iExplosao=0;
  //iSom=0;

  jogo=true;
  tmpCriaMeteoro=setInterval(criaMeteoro,1700);
  gameLoop();
}

function inicia() {
  jogo=false;
  
  // Tamanho da Tela
  tamTelaH= window.innerHeight;
  tamTelaW= window.innerWidth;

  // Definindo posição da Nave
  dirxJ=diryJ=0;
  velJ=velT=10;
  jog=document.getElementById("naveJog"); 
  naveJog.style.display="none";
  //controle do planeta*
  vidaPlaneta=300;
  barraPlaneta=document.getElementById("barraPlaneta")
  barraPlaneta.style.width=vidaPlaneta+"px";
  
  


  //telas
  //telaMsg=document.getElementById("telaMsg");
  telaMsg.style.backgroundImage="url('../estilo/imgs/fundo_inicio.jpg')";
  telaMsg.style.display="block";
  //document.getElementById("btnJogar").addEventListener("click",start);

  start();
}

window.addEventListener("load",inicia); 
document.addEventListener("keydown",teclaDw);
document.addEventListener("keyup",teclaUp);