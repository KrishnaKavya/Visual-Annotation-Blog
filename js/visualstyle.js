
$(document).ready(function(){

      $('#poem').click(function() {
        var selected=getSelectionText();
        alert(selected);
      });
});



function getSelectionText() {
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type != "Control") {
        text = document.selection.createRange().text;
    }
    return text;
}
