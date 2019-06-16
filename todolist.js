/**
 * Pablo Sanchez
 * Description: Control for managing list items in todolist.php
 * Features: Add list item and remove list  item.
 */
"use strict";

//event listener
window.onload = function () {
    document.getElementById("add").onclick = addListItem;
    document.getElementById("delete").onclick = removeListItem;
};

/**
 * Create a new list element from user input and put it at bottom of list
 */
function addListItem() {
    //create new li
    var li = document.createElement("li");

    //get user input from form
    var inputValue = document.getElementById("itemtext").value;

    //create text node from user input
    var t = document.createTextNode(inputValue);

    //parent.appendChild(child)
    //parse text to list item
    li.appendChild(t);

    //add new list item to todolist
    document.getElementById("todolist").appendChild(li);
}

/**
 * Remove first list element from list
 */
function removeListItem() {
    //get all list items
    var li = document.getElementsByTagName("li");

    //remove first list item
    document.getElementById("todolist").removeChild(li[0]);
}