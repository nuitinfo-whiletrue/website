// Define color variables;

red = [];
orange = [];
green = [];
blue = [];
purple = [];
letterColors = [red, orange, green, blue, purple];

//This variable controls the smallest distance at which a mous will
mouseResponseThreshold = 100;

//This variable controls how strongly the dots will try to return to their starting position

friction = 0.85;

//This variable controls how much the dots will rotate when interacting

rotationForce = 0.0;

message = 'Change the physics';

drawName(message, letterColors);
bounceBubbles();
