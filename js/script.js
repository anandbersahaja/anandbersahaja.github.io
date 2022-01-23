// PORTFOLIO
$.getJSON('env.json', function(result){
  let img = result.items.img.portfolio.url;

  $('#portfolio-list').empty();
  // let content = ``;

  $.each(img, function(i, data){
    $('#portfolio-list').append(`
    <div class="col m3 sm12">
    <img src="`+ data +`" class="responsive-img materialboxed">
    </div>
    `);

    const materialize = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(materialize);
  })

})

// CLIENT
$.getJSON('env.json', function(result){
  let img = result.items.img.client.url;

  $('#client-list').empty();
  // let content = ``;

  $.each(img, function(i, data){

    $('.client-list').append(`
    <div class="col m4 s12">
      <img src="`+ data +`">
    </div>
    `);

    const materialize = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(materialize);
  })

})


// SLIDER
$.getJSON('env.json', function(result){
  let slider = result.items.img.slider;

  let img = slider.url;
  let tagline = slider.tagline;
  let word = slider.word;

  $('#slide-list').empty();
  // let content = ``;

  for(let i=0; i<img.length; i++){
    $('#slide-list').append(`
    <li>
      <img src="`+img[i]+`">
      <div class="caption left-align">
        <h3>`+tagline[i]+`</h3>
        <h5 class="light gery-text text-lighten-3">`+word[i]+`</h5>
      </div>
    </li>
    `);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      duration: 700,
      interval: 3000

    });
  }

})


