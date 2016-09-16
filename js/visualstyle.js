function highlightSelection() {
	alert("called");
    var userSelection = window.getSelection().toString();
    alert(userSelection);
    highlightRange(userSelection);

}

function highlightRange(range) {
	alert("highlightRange is called");
    var newNode = document.createElement("div");
    newNode.setAttribute(
       "style",
       "background-color: yellow; display: inline;"
    );
    range.surroundContents(newNode);
}