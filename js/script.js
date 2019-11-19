var config = {
  type: Phaser.WEBGL,
  width: 1350,
  height: 650,
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

function startJogo(){
  var game = new Phaser.Game(config);
}
//startJogo();

function preload ()
{
  this.load.image('ship', '../estilo/imgs/nave.png');
  this.load.image('bullet', '../estilo/imgs/tiro_top.png');
  this.load.image('fundo', '../estilo/imgs/BackSpace.jpg');
  this.load.image('meteoro', '../estilo/imgs/meteoro_top.png');
}

function create ()
{
  var mainGround = this.add.tileSprite(350, 0, 2300, 2000, 'fundo');
  this.physics.add.existing(mainGround, true);

  var Bullet = new Phaser.Class({

      Extends: Phaser.GameObjects.Image,

      initialize:

      function Bullet (scene)
      {
          Phaser.Physics.Arcade.Image.call(this, scene, 0, 0, 'bullet');

          this.speed = Phaser.Math.GetSpeed(400, 1);
         
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

  bullets = this.physics.add.group({
      classType: Bullet,
      maxSize: 10,
      runChildUpdate: true
  });

  meteor = this.physics.add.group();
  sprite = this.physics.add.image(400, 300, 'ship');

  sprite.setDamping(true);
  sprite.setDrag(0.99);
  sprite.setMaxVelocity(200);
 
  sprite.setCollideWorldBounds(true)
  cursors = this.input.keyboard.createCursorKeys();
  speed = Phaser.Math.GetSpeed(300, 1);
  keyObj = this.input.keyboard.addKey('space');

  this.physics.add.overlap(sprite, meteor, colisaoNave);
  this.physics.add.collider(meteor, bullets, colisaoBala, null);
  timedEvent = this.time.addEvent({ delay: 500, callback: criarMeteoros, callbackScope: this, repeat: 130});
}

function criarMeteoros(){
  var me = meteor.create(Phaser.Math.RND.between(0, 1000), 0, 'meteoro');

  me.body.gravity.y = 100;
  this.physics.add.collider(me, bullets, colisaoBala);
}

function colisaoBala(me,bullets)
{
  console.log("entrou");
  me.disableBody(true, true);
  //O QUE VAI OCORRER QUANDO COLIDIR COM A NAVE
}

function colisaoNave(sprite, meteor)
{
  sprite.disableBody(true, true);
  //O QUE VAI OCORRER QUANDO COLIDIR COM A NAVE
}

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
        lastFired = time + 50;
    }
  }
}