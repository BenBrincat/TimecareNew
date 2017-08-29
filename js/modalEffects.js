var ModalEffects = (function() {

function init() {

var overlay = document.querySelector( '.md-overlay' );

[].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
close = modal.querySelectorAll( '.md-close' );

function removeModal( hasPerspective ) {
classie.remove( modal, 'md-show' );

if( hasPerspective ) {
classie.remove( document.documentElement, 'md-perspective' );
}
}

function removeModalHandler() {
removeModal( classie.has( el, 'md-setperspective' ) ); 
}

el.addEventListener( 'click', function( ev ) {
classie.add( modal, 'md-show' );
overlay.removeEventListener( 'click', removeModalHandler );
overlay.addEventListener( 'click', removeModalHandler );

if( classie.has( el, 'md-setperspective' ) ) {
setTimeout( function() {
classie.add( document.documentElement, 'md-perspective' );
}, 25 );
}
});

//close.addEventListener( 'click', function( ev ) {
//ev.stopPropagation();
//removeModalHandler();
//});

for(i=0; i<close.length; i++){
    close[i].addEventListener('click', function( ev ){
        ev.stopPropagation();
        removeModalHandler();
    });
}

} );

}

init();

})();