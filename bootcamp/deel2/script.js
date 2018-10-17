"use strict";

// Declare variables
var student = "Brendan Eich";
var year = 2018;
var group = "MD2x";
var title = "JavaScript Bootcamp " + year;

// Init
instruction2();


//Instructions

function instruction2() {
    document.title = title;
    document.getElementById("pageHeader").innerText = title;

    document.getElementById("group").innerText = group;

    var elements = document.getElementsByClassName("year");
    for (var i = 0; i < elements.length; i++) {
        elements[i].innerText = year;
    }

    var elements = document.getElementsByClassName("student");
    for (var i = 0; i < elements.length; i++) {
        elements[i].innerText = student;
    }
}

function instruction3() {
    var description = "Na op de link 'Click Event' te hebben geklikt werden de header,"
        + " de beschrijving en de oplossing van de opdracht aangepast";

    document.getElementById("instructionHeader").innerText = "Opdracht 3";
    document.getElementById("instructionDescription").innerText = description;
    document.getElementById("instructionResult").innerText = "";
}

function instruction4() {
  // function instruction 2 has been replaced by function instruction4
}
