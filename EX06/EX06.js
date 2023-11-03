function jsStyle() {
    // function to change style
    // Change the color and the size of the font
    // in the paragraph with id='text'
    elem = document.getElementById("text")
    elem.style.color = "red"
    elem.style.fontSize='35px'
}

function moveRight(){
    elem = document.getElementById("text");
    elem.style.left = parseInt(window.getComputedStyle(elem).left, 10) + 10 + "px";
}

// exercise B
function howmany() {
    console.log("Total number of input elements:", document.getElementsByTagName("input").length)

    console.log("Total number of input elements with type text:", document.querySelectorAll("input[type='text']").length)
}

// exercise C
function getOptions() {
	// function to display the number of options in an alert()
	alert("# of options = " + document.getElementById("mySelect").length)
}

function colorchanger() {
	document.body.style.backgroundColor = document.getElementById("mySelect").value;
}


// exercise D

//put a mouseover and a mouseout event on the p tag below
//create a function that is called on the mouseover that turns the text red
function mouseOverHandler(){
    document.getElementById("rb").style.color =  document.getElementById("mySelect2").value;
}
//create a function that is called on the mouseout that turns the text black
function mouseOutHandler(){
    document.getElementById("rb").style.color = "black"
}

// exercise E
function multiply(){
    let x = parseInt(document.getElementById("firstoperand").value)
    let y = parseInt(document.getElementById("secondoperand").value)
    // remove any text node tht may be present already
    // NOTE: Try and Catch is needed because if there is no text, then an error will be thrown
    try {
        document.getElementById("result").removeChild(document.getElementById("result").firstChild)
    } catch (error) {
    }
    
    document.getElementById("result").appendChild(document.createTextNode( (x * y)));
}

function divide(){
    let x = parseInt(document.getElementById("firstoperand").value)
    let y = parseInt(document.getElementById("secondoperand").value)
    
    //remove any text node tht may be present already
    // NOTE: Try and Catch is needed because if there is no text, then an error will be thrown
    try {
        document.getElementById("result").removeChild(document.getElementById("result").firstChild)
    } catch (error) {
    }
    document.getElementById("result").appendChild(document.createTextNode(x / y))
}