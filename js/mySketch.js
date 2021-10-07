//Christopher Reyes
//itschrisreyes.myportfolio.com
//Project-03 (Dynamic Drawing)

var backgroundR = 209
var backgroundG = 153
var backgroundB = 198

var ringSize = 0
var ringColor= 256

function setup() {

    createCanvas(640, 480);
    angleMode(DEGREES);

}

function draw() {

    var colorConstrain = constrain(mouseY, 102, 540)

    background(backgroundR, backgroundG, backgroundB);
    fromBG = color(209, 153, 198);
    toBG = color(199, 211, 183);
    backgroundColor = lerpColor(fromBG, toBG, mouseY/width);
    background(backgroundColor);

    var moonConstrainY = constrain(mouseY, 102, 540)

    //Moon, moves in the Y direction as mouseY changes
    noStroke();
    fill(256);
    ellipse(moonConstrainY, 80, 64, 64);

    //Moon shadow, follows moon at a rate that eventually overtakes it
    //Color set to be the same as the background to hide it
    fill(backgroundR, backgroundG, backgroundB);
    fill(backgroundColor);
    ellipse(moonConstrainY*1.30 - 95, 80, 54, 54);

    //Mountain ring, changes scale according to mouseY
    noFill();
    stroke(ringColor);
    strokeWeight(5);
    ringSize = constrain(mouseY, 100, 545) - 100
    ellipse(248, 158, ringSize, ringSize);

    //Secondary rings that rotate while revolving around mountain's peak,
    //based on mouseY position
    var spinConstraint = constrain(mouseY, 102, 540)

    push();
    translate(248, 158);
    rotate(spinConstraint);
    arc(248, 158, ringSize, ringSize,
        spinConstraint + 5, spinConstraint + 115);
    arc(248, 158, ringSize, ringSize,
        spinConstraint + 125, spinConstraint + 235);
    arc(248, 158, ringSize, ringSize,
        spinConstraint + 245, spinConstraint + 355);
    pop();

    push();
    translate(248, 158);
    rotate(spinConstraint - 160);
    arc(248, 158, ringSize*.75, ringSize*.75,
        spinConstraint + 5, spinConstraint + 115);
    arc(248, 158, ringSize*.75, ringSize*.75,
        spinConstraint + 125, spinConstraint + 235);
    arc(248, 158, ringSize*.75, ringSize*.75,
        spinConstraint + 245, spinConstraint + 355);
    pop();

    //Hides rings when they get too small - given same color as background
    if (ringSize == 0) {
        ringColor = backgroundColor;
    } else {
        ringColor = 256;
    }

    noStroke();

    //Draws triangles for mountains that change colors as mouseY changes
    //Note: For organization, for each mountain, the left side is drawn first
    //
    //Mountain color variable format: Mount(#)[(L)eft||(R)ight]

    //Mountain 1, transitions from pink to blue
    fill(232, 151, 168);
    fromMount1L = color(232, 151, 168);
    toMount1L = color(105, 175, 173);
    mount1LColor = lerpColor(fromMount1L, toMount1L, mouseY/width);
    fill(mount1LColor);
    triangle(111, 226, 57, 416, -3, 416);

    fill(206, 122, 137);
    fromMount1R = color(206, 122, 137);
    toMount1R = color(97, 142, 153);
    mount1RColor = lerpColor(fromMount1R, toMount1R, mouseY/width);
    fill(mount1RColor);
    triangle(111, 226, 57, 416, 189, 416);

    //Mountain 2, pink
    fill(232, 151, 168);
    triangle(41, 254, -13, 444, -73, 444);
    fill(206, 122, 137);
    triangle(41, 254, -13, 444, 119, 444);

    //Mountain 3, pink
    fill(232, 151, 168);
    triangle(510, 366, 456, 556, 396, 556);
    fill(206, 122, 137);
    triangle(510, 366, 456, 556, 588, 556);

    //Mountain 4, largest, transitions from yellow to navy
    fill(229, 225, 163);
    fromMount4L = color(229, 225, 163);
    toMount4L = color(31, 60, 78);
    mount4LColor = lerpColor(fromMount4L, toMount4L, mouseY/width);
    fill(mount4LColor);
    triangle(248, 158, 154, 480, -111, 480);

    fill(214, 192, 123);
    fromMount4R = color(214, 192, 123);
    toMount4R = color(10, 30, 49);
    mount4RColor = lerpColor(fromMount4R, toMount4R, mouseY/width);
    fill(mount4RColor);
    triangle(248, 158, 154, 480, 591, 480);

    //Stray cloud with transparency
    fill(256, 125);
    quad(210.5, 272, 250.5, 290, 210.5, 308, 170.5, 290);

    //Mountain 5, transitions from pink to dark green
    fill(232, 151, 168);
    fromMount5L = color(232, 151, 168);
    toMount5L = color(51, 93, 97);
    mount5LColor = lerpColor(fromMount5L, toMount5L, mouseY/width);
    fill(mount5LColor);
    triangle(193, 290, 139, 480, 79, 480);

    fill(206, 122, 137);
    fromMount5R = color(206, 122, 137);
    toMount5R = color(37, 77, 68);
    mount5RColor = lerpColor(fromMount5R, toMount5R, mouseY/width);
    fill(mount5RColor);
    triangle(193, 290, 139, 480, 271, 480);

    //Mountain 6, transitions from blue to pale green
    fill(175, 232, 229);
    fromMount6L = color(175, 232, 229);
    toMount6L = color(170, 191, 156);
    mount6LColor = lerpColor(fromMount6L, toMount6L, mouseY/width);
    fill(mount6LColor);
    triangle(108, 334, 93, 480, -30, 480);

    fill(127, 201, 201);
    fromMount6R = color(127, 201, 201);
    toMount6R = color(130, 171, 142);
    mount6RColor = lerpColor(fromMount6R, toMount6R, mouseY/width);
    fill(mount6RColor);
    triangle(108, 334, 93, 480, 253, 480);

    //Mountain 7, transitions from green to light blue
    fill(160, 232, 160);
    fromMount7L = color(160, 232, 160);
    toMount7L = color(105, 175, 173);
    mount7LColor = lerpColor(fromMount7L, toMount7L, mouseY/width);
    fill(mount7LColor);
    triangle(295, 323, 229, 480, 153, 480);

    fill(117, 175, 117);
    fromMount7R = color(117, 175, 117);
    toMount7R = color(97, 142, 153);
    mount7RColor = lerpColor(fromMount7R, toMount7R, mouseY/width);
    fill(mount7RColor);
    triangle(295, 323, 229, 480, 399, 480);

    //Clouds with transparency
    fill(256, 125);
    quad(332.5, 231, 372.5, 249, 332.5, 267, 292.5, 249);
    quad(393.5, 217, 433.5, 235, 393.5, 253, 353.5, 235);
    quad(298.5, 240, 338.5, 258, 298.5, 276, 258.5, 258);
    quad(275.5, 235, 315.5, 253, 275.5, 271, 235.5, 253);
    quad(258.5, 214, 298.5, 232, 258.5, 250, 218.5, 232);
    quad(313.5, 265, 353.5, 283, 313.5, 301, 273.5, 283);
    quad(339.5, 369, 379.5, 387, 339.5, 405, 299.5, 387);
    quad(403.5, 258, 443.5, 276, 403.5, 294, 363.5, 276);
    quad(353.5, 265, 393.5, 283, 353.5, 301, 313.5, 283);

}
