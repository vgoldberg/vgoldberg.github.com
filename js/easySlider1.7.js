$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 931;
  var slides = $('.slide');
  var numberOfSlides = slides.length;

  // Remove scrollbar in JS
  $('#slidesContainer').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides
  .wrapAll('<div id="slideInner"></div>')
  // Float left to display horizontally, readjust .slides width
  .css({
    'float' : 'left',
    'width' : slideWidth
  });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner').css('width', slideWidth * numberOfSlides);

  // Insert left and right arrow controls in the DOM
  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Move left</span>')
    .append('<span class="control" id="rightControl">Move right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control')
    .bind('click', function(){
    // Determine new position
      currentPosition = ($(this).attr('id')=='rightControl')
    ? currentPosition+1 : currentPosition-1;

      // Hide / show controls
      manageControls(currentPosition);
      // Move slideInner using margin-left
      $('#slideInner').animate({
        'marginLeft' : slideWidth*(-currentPosition)
      });
    });

  // manageControls: Hides and shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
    if(position==0){ $('#leftControl').hide() }
    else{ $('#leftControl').show() }
    // Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl').hide() }
    else{ $('#rightControl').show() }
    }
  });


// Interactive JQuiry

$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 931;
  var slides = $('.slide2');
  var numberOfSlides = slides.length;



  // Remove scrollbar in JS
  $('#slidesContainer2').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides
  .wrapAll('<div id="slideInner2"></div>')
  // Float left to display horizontally, readjust .slides width
  .css({
    'float' : 'left',
    'width' : slideWidth
  });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner2').css('width', slideWidth * numberOfSlides);

  // Insert left and right arrow controls in the DOM
  $('#slideshow2')
    .prepend('<span class="control2" id="leftControl2">Move left</span>')
    .append('<span class="control2" id="rightControl2">Move right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control2')
    .bind('click', function(){
    // Determine new position
      currentPosition = ($(this).attr('id')=='rightControl2')
    ? currentPosition+1 : currentPosition-1;

      // Hide / show controls
      manageControls(currentPosition);
      // Move slideInner using margin-left
      $('#slideInner2').animate({
        'marginLeft' : slideWidth*(-currentPosition)
      });
    });

  // manageControls: Hides and shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
    if(position==0){ $('#leftControl2').hide() }
    else{ $('#leftControl2').show() }
    // Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl2').hide() }
    else{ $('#rightControl2').show() }
    }
  });

// OldSchoolPrint JQuiry

$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 931;
  var slides = $('.slide3');
  var numberOfSlides = slides.length;



  // Remove scrollbar in JS
  $('#slidesContainer3').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides
  .wrapAll('<div id="slideInner3"></div>')
  // Float left to display horizontally, readjust .slides width
  .css({
    'float' : 'left',
    'width' : slideWidth
  });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner3').css('width', slideWidth * numberOfSlides);

  // Insert left and right arrow controls in the DOM
  $('#slideshow3')
    .prepend('<span class="control3" id="leftControl3">Move left</span>')
    .append('<span class="control3" id="rightControl3">Move right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control3')
    .bind('click', function(){
    // Determine new position
      currentPosition = ($(this).attr('id')=='rightControl3')
    ? currentPosition+1 : currentPosition-1;

      // Hide / show controls
      manageControls(currentPosition);
      // Move slideInner using margin-left
      $('#slideInner3').animate({
        'marginLeft' : slideWidth*(-currentPosition)
      });
    });

  // manageControls: Hides and shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
    if(position==0){ $('#leftControl3').hide() }
    else{ $('#leftControl3').show() }
    // Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl3').hide() }
    else{ $('#rightControl3').show() }
    }
  });

// Packaging JQuiry

$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 931;
  var slides = $('.slide4');
  var numberOfSlides = slides.length;



  // Remove scrollbar in JS
  $('#slidesContainer4').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides
  .wrapAll('<div id="slideInner4"></div>')
  // Float left to display horizontally, readjust .slides width
  .css({
    'float' : 'left',
    'width' : slideWidth
  });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner4').css('width', slideWidth * numberOfSlides);

  // Insert left and right arrow controls in the DOM
  $('#slideshow4')
    .prepend('<span class="control4" id="leftControl4">Move left</span>')
    .append('<span class="control4" id="rightControl4">Move right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control4')
    .bind('click', function(){
    // Determine new position
      currentPosition = ($(this).attr('id')=='rightControl4')
    ? currentPosition+1 : currentPosition-1;

      // Hide / show controls
      manageControls(currentPosition);
      // Move slideInner using margin-left
      $('#slideInner4').animate({
        'marginLeft' : slideWidth*(-currentPosition)
      });
    });

  // manageControls: Hides and shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
    if(position==0){ $('#leftControl4').hide() }
    else{ $('#leftControl4').show() }
    // Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl4').hide() }
    else{ $('#rightControl4').show() }
    }
  });
