const WIDTH = 640; //The width of the game window
const HEIGHT = 360; //The height of the game window
const MIDDLE = [WIDTH / 2, HEIGHT / 2]; //The middle point of the window

const TreasureHunt = new Phaser.Scene('Game'); //Creating the Scene

TreasureHunt.init = function() { //Initiating the Scene
  this.isTerminating = false; //The scene will not terminate as long as this is false
  this.playerSpeed = 3; //Sets the speed of the player
  this.minSpeed = 1;  //Sets the minimum speed within the Scene
  this.maxSpeed = 4; //Sets the maximum speed within the Scene
  this.minY = 80; //Sets the minimum height of the scene with the help of the y-axis
  this.maxY = HEIGHT - 80; //Sets the maximum height of the scene with the help of the highest point of the y-axis minus the minimum height
};

TreasureHunt.preload = function() { //Creating the Sprites for the game
  this.load.image('background', 'Sprites/background.png'); //Sprite used for the background
  this.load.image('enemy', 'Sprites/dog.png'); //Sprite used for the enemy
  this.load.image('player', 'Sprites/valkyrie.png'); //Sprite used for the player
  this.load.image('goal', 'Sprites/treasure.png'); //Sprite used for the Treasure or the goal to reach
};

TreasureHunt.create = function() { //The creation of functions for the scene
  
  cursors = this.input.keyboard.createCursorKeys();  //Enables the use of arrow keys to move
  this.background = this.add.sprite(MIDDLE[0], MIDDLE[1], 'background'); //Adds the imported background sprite to the Scene
    

  this.player = this.add.sprite(40, MIDDLE[1], 'player'); //Adds the player sprite to the scene
  this.player.setScale(0.5); //Sets the scale of the player sprite
  //this.player.depth = -1;   //Changing the depth of the player 
  //this.player.setPosition(640/2, 360/2);  //Sets the player in the middle  

  this.goal = this.add.sprite(WIDTH - 80, MIDDLE[1], 'goal'); //Adds the goal sprite to the scene (Treasure chest)
  this.goal.setScale(0.6);//Set the scale of the goal sprite
    
  //this.player.angle = 180; //change the angle of the player sprite
  //this.player.setAngle(180); // Set the angle
  //this.player.rotation = Math.PI/5; //Roate the player sprite
    
  this.enemies = this.add.group({ //Creating a group of sprites
    key: 'enemy', //The group is about the enemy  
    repeat: 4,  //Create four enemies 
    setXY: { //Sets the x and y positions for the group of enemies as well as their distances from each other
      x: 110,
      y: 100,
      stepX: 95,
      stepY: 20
    }
  });
  //Phaser.Actions.ScaleXY(this.enemies.getChildren(), -0.4, -0.4); //- Minimizing the Scale of all the enemies
  //Phaser.Actions.Call(this.enemies.getChildren(), flipX, this); //- Flips all the enemies on opposite side of the X axis
  this.enemies.getChildren().map(enemy => setEnemySpeed(enemy, this.minSpeed, this.maxSpeed)); //Set the speed of all enemies
    
};

TreasureHunt.update = function() { //The update section of the Scene
  if (this.isTerminating) { //return True to terminate the scene 
    return;
  }

  if (cursors.right.isDown) { //Moves player forward
    this.player.x += this.playerSpeed; //The location of the player on the x-axis increases as they move forward 
  }
    
  if (this.input.activePointer.isDown) { //The player can also click to move forward instead of using the arrow keys
    this.player.x += this.playerSpeed;
  }    
    
  /*if (cursors.up.isDown) { //Moves player up
    this.player.y -= this.playerSpeed;
  }

 if (cursors.down.isDown) { //Moves player down
    this.player.y += this.playerSpeed;
  }*/
  
  /*if(this.player.scaleX < 2){    //-Growing the sprite
    this.player.scaleX += 0.01; //Grows the scale of the player on its x-axis
    this.player.scaleY += 0.01; //Grows the scale of the player on its y-axis
  };*/
    
  
    
  this.enemies.getChildren().map(enemy => moveEnemy(enemy, this.minY, this.maxY)); //places the enemy group on the scene

  let playerBounds = this.player.getBounds(); //Get all the bounds that exists with the player 

  this.enemies.getChildren().map(enemy => { //Check if two rectangles or sprites overlap
    if (Phaser.Geom.Intersects.RectangleToRectangle(playerBounds, enemy.getBounds())) { //If the enemy sprite touches the player
      return this.RestartGame(); //The game restarts
    }
  });

  if (Phaser.Geom.Intersects.RectangleToRectangle(playerBounds, this.goal.getBounds())) { //Check if two rectangles or sprites overlap
    return this.RestartGame(); //If the player touches the treasure sprite, then the game restarts
  }
};

TreasureHunt.RestartGame = function() { //Funtion for terminating the scene/game 
  this.isTerminating = true; // - Terminates the current session
  this.cameras.main.shake(300); // - Camera shake effect
  this.cameras.main.on('camerashakecomplete', (camera, effect) => camera.fade(500)); // - Scene fades
  this.cameras.main.on('camerafadeoutcomplete', (camera, effect) => this.scene.restart()); // - Restarting the scene
};

const config = { //Configures the scene
  type: Phaser.AUTO, //The scene type is part of Phaser
  width: WIDTH, //The width of the scene is the width assigned at the beginning
  height: HEIGHT, //The height of the scene is the height assigned at the beginning
  scene: TreasureHunt //The scene to run, is the TreasureHunt game
};

const game = new Phaser.Game(config); //Inserts the config into the scene to be used 

function flipX(sprite) { //Flips a sprite in the opposite direction based on its x-axis
  sprite.flipX = true; //Flips the sprite on its x-axis
}

function setEnemySpeed(sprite, minSpeed, maxSpeed) { //Sets the details of the enemy's speed and its movement direction 
  const dir = Math.random() < 0.5 ? 1 : -1; // - Reverses the direction of when the enemy reaches the top or bottom of its area 
  const speed = minSpeed + Math.random() * (maxSpeed - minSpeed); //Increases the speed of the enemy sprites
  sprite.speed = dir * speed; //The speed of the enemy is calculated by multiplying the constant direction by the constant speed
}

function moveEnemy(sprite, minY, maxY) { //Creates the function of how the enemy group moves
  sprite.y += sprite.speed; //Sets the speed of how fast the enemy travels on the y-axis

  if (sprite.y <= minY) { //If the enemy sprite reaches the minimum point of the y-axis or tries to go lower than it 
    sprite.y = minY + 1; //the sprite reverses its position on the y-axis and it increases until it reaches the highest point on the y-axis
    sprite.speed *= -1;//the speed decreases
  }

  if (sprite.y >= maxY) {//If the enemy sprite reaches the maximum point of the y-axis or tries to go higher than it
    sprite.y = maxY - 1;//the sprite reverses its position on the y-axis and it increases until it reaches the lowest point on the y-axis
    sprite.speed *= -1;//the speed decreases
  }
}
