var number = 1;
var rating = Array();

function getRandomCommic(min, max) {
  number = Math.floor(Math.random() * (max - min) + min);
  getCommic(number);
}

function getCommic(number) {
    $.get('commic/'+number, function() {
        $('#preloader-primary').removeClass('hide');
        $('#commic').addClass('hide');
    })
    .done(function( data ) {
        $('#preloader-primary').addClass('hide');
        $('#commic').removeClass('hide');
        setImgPrimary(data);
        initStar();
    });
}

function setImgPrimary(json) {
    $('#title-img-primary').text("#"+number+" - "+json.title);
    $('#img-primary').attr('src',json.img);
}

function initStar() {    
    setRating(rating[number]);
}

function setRating(number) {
    let starNumber = number;
    let stars = $('.star-rating');

    for (let i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('seleted-star amber lighten-1');
        $(stars[i]).children().text('star_border');
        $(stars[i]).addClass('grey darken-3');
    }

    for (let i = starNumber; i >= 0; i--) {
        $(stars[i]).children().text('start');
         $(stars[i]).removeClass('grey darken-3');
        $(stars[i]).addClass('seleted-star amber lighten-1');
    }
}

function starRating() {
    $('.star-rating').hover(function() {
        let starNumber = $(this).attr('data-star');
        let stars = $('.star-rating');
                
        for (let i = starNumber; i >= 0; i--) {
            $(stars[i]).children().text('star');
        }
    })
    .mouseout(function() {
        let stars = $('.star-rating');
        
        for (let i = 0; i < stars.length; i++) {
            if (!$(stars[i]).hasClass('seleted-star')) {
                $(stars[i]).children().text('star_border');
            }
        }
    })
    
    $('.star-rating').click(function(){
        let starNumber = $(this).attr('data-star');
        setRating(starNumber);
        
        rating[number] = starNumber;
    })
}

$( document ).ready(function() {
    console.log( "ready!" );
    getRandomCommic(1, 999);
    starRating();
    
    $('#next-commic').click(function() {
        number++;
        console.log(number);
        getCommic(number);
    });
    
    $('#back-commic').click(function() {
        number--;
        getCommic(number);
    });
    
    $('#random-commic').click(function() {
        getRandomCommic(1, 999);
    });
});