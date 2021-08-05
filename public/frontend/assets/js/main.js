var login_pos= $('.login-div').position().top;
$('.login-div').addClass('scrolled');
$( window ).scroll(function() {
    

    console.log(document.documentElement.scrollTop+window.innerHeight);
    console.log(login_pos);
    
    if ( document.documentElement.scrollTop+window.innerHeight < login_pos ) {
    $('.login-div').addClass('scrolled');
    // console.log(document.scrollingElement.scrollTop );
    }
    else{
    $('.login-div').removeClass('scrolled');
    
    }
});