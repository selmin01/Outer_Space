//Variaveis de fases (ciclos)
var pontuacao=0;
var velocidadeDisparo=300, velocidadeMeteoro=1000;
var gravidade=20 /*100*/;


var config = {
  type: Phaser.WEBGL,
  width: 1350,
  height: 600,
  physics: {
      default: "arcade",
      arcade: {
        fps: 60
      }
  },
  backgroundColor: '#2d2d2d',
  parent: 'phaser-example',
  scene: {
      preload: preload,
      create: create,
      update: update
  }
};

var bullets;
var ship;
var speed;
var stats;
var cursors;
var lastFired = 0;
var sprite;
var keyObj;
var meteor;
var game;

function startJogo(){
  game = new Phaser.Game(config);
}

function preload ()
{
  this.load.image('ship', '../estilo/imgs/nave.png');
  this.load.image('bullet', '../estilo/imgs/tiro.png');
  this.load.image('fundo', '../estilo/imgs/BackSpace.jpg');
  this.load.image('meteoro', '../estilo/imgs/meteoro_top.png');
  this.load.image('explosao', '../estilo/imgs/explosao.png');
  this.load.audio('WorldBackground', '../estilo/sounds/naveEspacial.mp3');
  this.anims.create({
    key: 'left',
    frames: this.anims.generateFrameNumbers('dude', { start: 0, end: 3 }),
    frameRate: 10,
    repeat: -1
  });
}

function create ()
{
  var mainGround = this.add.tileSprite(350, 0, 2300, 2000, 'fundo');
  this.physics.add.existing(mainGround, true);

  var music = this.sound.add('WorldBackground');
  var musicConfig = {
    mute: false,
    volume: 1,
    rate: 1,
    detune: 0,
    seek: 0,
    loop: true,
    delay: 0
  }

  var Bullet = new Phaser.Class({

      Extends: Phaser.GameObjects.Image,

      initialize:

      function Bullet (scene)
      {
        Phaser.Physics.Arcade.Image.call(this, scene, 0, 0, 'bullet');
        this.speed = Phaser.Math.GetSpeed(800, 1);
      },

      fire: function (x, y)
      {
          this.setPosition(x, y-50);
          this.setActive(true);
          this.setVisible(true);
      },

      update: function (time, delta)
      {
          this.y -= this.speed * delta;
          if (this.y < -50)
          {
              this.setActive(false);
              this.setVisible(false);
          }
      }
  });

  music.play(musicConfig);

  bullets = this.physics.add.group({
      classType: Bullet,
      maxSize: 10,
      runChildUpdate: true
  });

  meteor = this.physics.add.group();
  sprite = this.physics.add.image(675, 450, 'ship');

  sprite.setDamping(true);
  sprite.setDrag(0.99);
  sprite.setMaxVelocity(velocidadeNave);
 
  sprite.setCollideWorldBounds(true)
  cursors = this.input.keyboard.createCursorKeys();
  speed = Phaser.Math.GetSpeed(velocidadeNave, 1); //velocidadeNave
  keyObj = this.input.keyboard.addKey('space');

  this.physics.add.overlap(sprite, meteor, colisaoNave, null, this);
  timedEvent = this.time.addEvent({ delay: velocidadeMeteoro, callback: criarMeteoros, callbackScope: this, repeat: totalMeteoro}); //velocidadeMeteoro totalMeteoro
}

function fase() {
  //alert("IRADO!");

  $.ajax({
    method: "POST",
    url: "../acao/acaoJogo/req_fase.php",
    data: {pont: pontuacao}
  }).done(function(resposta){
    window.location.href='../acao/acaoPergunta/randomPergunta.php';
  }).fail(function(jqXHR, textStatus) {
    console.log("Request failde: " + textStatus);  
  });
}

function criarMeteoros(){
  var me = meteor.create(Phaser.Math.RND.between(0, 1350), 0, 'meteoro');

  me.body.gravity.y = gravidade; //gravidade
  this.physics.add.collider(me, bullets, colisaoBala);
}

function colisaoMeteoro(bullet,meteoros)
{
   bullet.disableBody(true, true);
}

function colisaoBala(me,bullets)
{
  //debugger;
  //console.log("entrou");
  //O QUE VAI OCORRER QUANDO TIRO COLIDIR COM O METEORO
  me.disableBody(true, true);
  pontuacao = pontuacao + 1;
  console.log(pontuacao);
  document.querySelector('.pontuacao').innerHTML = "Meteoros Destruídos: "+pontuacao;
}

function requisicao() {
  //debugger;
  $.ajax({
    method: "POST",
    url: "../acao/acaoJogo/req_pontuacao.php",
    data: {pont: pontuacao}
  }).done(function(resposta){
    window.location.href='../interacaoJogo/gameOver.php';
  }).fail(function(jqXHR, textStatus) {
    console.log("Request failde: " + textStatus);  
  });
}

function colisaoNave(sprite, meteor)
{
  sprite.disableBody(true, true);
  requisicao();
  //hitBomb();
  //O QUE VAI OCORRER QUANDO COLIDIR COM A NAVE
}
/*
function hitBomb (sprite, bometeormb)
{
    this.game.pause();

    sprite.setTint(0xff0000);

    sprite.anims.play('turn');

    gameOver = true;
}
*/
function update (time, delta)
{
  if (cursors.up.isDown){
      sprite.y -= delta * speed;
  }
  else if (cursors.down.isDown)
  {
      sprite.y += delta * speed;
  }

  if (cursors.right.isDown)
  {
      sprite.x += delta * speed;
      //sprite.setAngularVelocity(-300);
  }
  else if (cursors.left.isDown)
  {
      sprite.x -= delta * speed;
      //sprite.setAngularVelocity(300);
  }

  if (keyObj.isDown && time > lastFired)
  {
    var bullet = bullets.get();
    
    if (bullet)
    {
        bullet.fire(sprite.x, sprite.y);
        lastFired = time + velocidadeDisparo; //velocidadeDisparo 
    }
  }

  if(pontuacao>pontFase){
    fase();
  }
}