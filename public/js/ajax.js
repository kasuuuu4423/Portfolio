$(function(){
  $('.link-work').on('click', function(){
    let modal = $('.modal');
    modal.fadeOut(200);
    modal.find('.date').empty();
    modal.find('.title').empty();
    modal.find('.cat').empty();
    modal.find('.description').empty();
    modal.find('.technique').empty();
    modal.find('.wrap_video').attr('style', '').empty();
    modal.find('.link').remove();
    let slug = $(this).attr('data-slug');
    ajax(slug);
  });
  $('.cross').on('click', function(){
    let modal = $('.modal');
    modal.fadeOut(200);
    modal.find('.date').empty();
    modal.find('.title').empty();
    modal.find('.cat').empty();
    modal.find('.description').empty();
    modal.find('.technique').empty();
    modal.find('.wrap_video').attr('style', '').empty();
    modal.find('.link').remove();
  });
});

let pp = function(){
  $('.wrap_modal').hide();
  $('.modal').fadeIn(200);
  $('.pp-modal').fadeIn(200);
}

let ajax = function(data_slug){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var url = 'https://shimizoo.com/ajax'
  $.ajax({
    type: 'post',
    url: url,
    data: {
      'slug': data_slug,
    },
    beforeSend: function(){
      let htmlid = '#' + data_slug;
      $(htmlid).append('<img class="load" src="https://shimizoo.com/img/load.gif">');
    },
    success: function(data){
      $('.load').remove();
      data = JSON.parse(data);
      let slug = data['slug'];
      let name = data['name'];
      let cat = data['cat'];
      let period = data['period'];
      let desc = data['description'];
      let tech = data['technique'];
      let id = data['url'];
      let link = data['link'];
      let imgname = data['img'];
      let modal = $('.modal');
      modal.find('.date').append(period);
      modal.find('.title').append(name);
      modal.find('.cat').append(cat);
      modal.find('.description').append(desc);
      modal.find('.technique').append(tech);
      if(id != null){
        let url = '<iframe src="https://www.youtube.com/embed/'  + id + '/' + '" controls=0  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        modal.find('.wrap_video').append(url);
      }
      else{
        let img = 'background-image: url(https://shimizoo.com/storage/img/' + imgname + ')';
        modal.find('.wrap_video').attr('style', img);
      }
      if(link != null && link != ''){
        let tag = '<div class="link"><dt>Link: </dt><dd><a href="' + link + '" target="_blank">' + link + '</a></dd><div>';
        modal.find('.wrap_detail').append(tag);
      }
      $('.modal').fadeIn(200);
    }
  });
  return false;
}
