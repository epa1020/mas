$(function () {

  $('textarea.mention-example2').mentionsInput({
    onDataRequest:function (mode, query, callback) {
      $.getJSON('assets/data.json', function(responseData) {
        responseData = _.filter(responseData, function(item) { return item.name.toLowerCase().indexOf(query.toLowerCase()) > -1 });
        callback.call(this, responseData);
      });
    }

  });
/*traer sintaxis*/
  $('.get-syntax-text').click(function() {
    $('textarea.mention-example2').mentionsInput('val', function(text) {
      alert(text);
    });
  });

/*traer las menciones*/
 $('.get-mentions').click(function() {
    $('textarea.mention-example2').mentionsInput('getMentions', function(data) {
      alert(JSON.stringify(data));
    });
  }) ;


});