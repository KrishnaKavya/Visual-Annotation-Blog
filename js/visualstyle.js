
$(document).ready(function(){
 var selections;
 		alert("entered");
      $('#poem').click(function() {
         var range = window.getSelection().getRangeAt(0),
        span = document.createElement('span');
         span.className = 'highlight';
         span.appendChild(range.extractContents());
         range.insertNode(span);
      });
});

