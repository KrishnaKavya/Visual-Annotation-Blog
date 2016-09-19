
$(document).ready(function(){

      $('#poem').click(function() {
         var range = window.getSelection().getRangeAt(0),
        span = document.createElement('span');
         span.className = 'highlight';
         span.appendChild(range.extractContents());
         range.insertNode(span);
      });
});

