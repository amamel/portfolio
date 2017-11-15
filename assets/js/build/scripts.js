//////////////////////////////////////////////////////
// All Scripts that require jQuery will be loaded here
//////////////////////////////////////////////////////
jQuery(document).ready( function($){

    'use strict';

    (function(){
      var words = [
          'Hello',
          'Hola',
          'Grüezi',
          'مرحبا',
          'שלום',
          'Oi',
          'Namaste',
          'Sawubona',
          'سلام',
          'Bonjour',
          'Ciao',
          '你好',
          'สวัสดี',
          'Goeie dag',
          'Hej',
          'привет'
          ], i = 0;
      setInterval(function(){
          $('.greeting').fadeOut(function(){
              $(this).html(words[i=(i+1)%words.length]).fadeIn();
          });
      }, 7000);

  })();

var WIDTH;
var HEIGHT;
var canvas;
var con;
var g;
var pxs = new Array();
var rint = 50;

$(document).ready(function() {
  WIDTH = window.innerWidth;
  HEIGHT = window.innerHeight;
  $("#container-pixie")
    .width(WIDTH)
    .height(HEIGHT);
  canvas = document.getElementById("pixie");
  $(canvas)
    .attr("width", WIDTH)
    .attr("height", HEIGHT);
  con = canvas.getContext("2d");
  for (var i = 0; i < 50; i++) {
    pxs[i] = new Circle();
    pxs[i].reset();
  }
  setInterval(draw, rint);
  setInterval(draw, rint2);
});

function draw() {
  con.clearRect(0, 0, WIDTH, HEIGHT);
  for (var i = 0; i < pxs.length; i++) {
    pxs[i].fade();
    pxs[i].move();
    pxs[i].draw();
  }
}

function Circle() {
  this.s = {
    ttl: 8000,
    xmax: 5,
    ymax: 2,
    rmax: 10,
    rt: 1,
    xdef: 960,
    ydef: 540,
    xdrift: 4,
    ydrift: 4,
    random: true,
    blink: true
  };

  this.reset = function() {
    this.x = this.s.random ? WIDTH * Math.random() : this.s.xdef;
    this.y = this.s.random ? HEIGHT * Math.random() : this.s.ydef;
    this.r = (this.s.rmax - 1) * Math.random() + 1;
    this.dx = Math.random() * this.s.xmax * (Math.random() < 0.5 ? -1 : 1);
    this.dy = Math.random() * this.s.ymax * (Math.random() < 0.5 ? -1 : 1);
    this.hl = this.s.ttl / rint * (this.r / this.s.rmax);
    this.rt = Math.random() * this.hl;
    this.s.rt = Math.random() + 1;
    this.stop = Math.random() * 0.2 + 0.4;
    this.s.xdrift *= Math.random() * (Math.random() < 0.5 ? -1 : 1);
    this.s.ydrift *= Math.random() * (Math.random() < 0.5 ? -1 : 1);
  };

  this.fade = function() {
    this.rt += this.s.rt;
  };

  this.draw = function() {
    if (this.s.blink && (this.rt <= 0 || this.rt >= this.hl))
      this.s.rt = this.s.rt * -1;
    else if (this.rt >= this.hl) this.reset();
    var newo = 1 - this.rt / this.hl;
    con.beginPath();
    con.arc(this.x, this.y, this.r, 0, Math.PI * 2, true);
    con.closePath();
    var cr = this.r * newo;
    g = con.createRadialGradient(
      this.x,
      this.y,
      0,
      this.x,
      this.y,
      cr <= 0 ? 1 : cr
    );
    g.addColorStop(0.0, "rgba(238,180,28," + newo + ")");
    g.addColorStop(this.stop, "rgba(238,180,28," + newo * 0.2 + ")");
    g.addColorStop(1.0, "rgba(238,180,28,0)");
    con.fillStyle = g;
    con.fill();
  };

  this.move = function() {
    this.x += this.rt / this.hl * this.dx;
    this.y += this.rt / this.hl * this.dy;
    if (this.x > WIDTH || this.x < 0) this.dx *= -1;
    if (this.y > HEIGHT || this.y < 0) this.dy *= -1;
  };

  this.getX = function() {
    return this.x;
  };
  this.getY = function() {
    return this.y;
  };
}


});

//////////////////////////////////////////////////////
// Vanilla JS will be loaded here
//////////////////////////////////////////////////////

function colorChange() {
   $('.circle').css('border-color', colorsSelected[activeSlide]);
 };

var $buoop = {vs:{i:10,f:-4,o:-4,s:8,c:-4},unsecure:true,api:4};
  function $buo_f(){
     var e = document.createElement("script");
     e.src = "//browser-update.org/update.min.js";
     document.body.appendChild(e);
    };
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
