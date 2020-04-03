
$(function(){
    $(document).on('change', ':file', function() {
      var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      $('.filename').val(label);
  });
  const form = $('form#form-create');
  form.submit(function(e){
    event.preventDefault();
    let inputs = [
      $('input[name="slug"]'),
      $('input[name="name"]'),
      $('input[name="period"]'),
      $('textarea[name="description"]'),
      $('textarea[name="technique"]'),
    ];
    let vals = [];
    for(let i = 0; i < inputs.length; i++){
      vals.push(inputs[i].val());
    }
    let flag = false;
    for(let i = 0; i < vals.length; i++){
      if(vals[i].length == 0){
        let name = '.' + inputs[i].attr('name');
        $(name).addClass('warn');
        flag = true;
      }
    }
    if(!flag){
      form.off( 'submit' );
      form.submit
    }
    return false;
  });
});
