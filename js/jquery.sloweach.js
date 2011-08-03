jQuery.slowEach = function( array, interval, callback ) { 
    if( ! array.length ) return; 
    var i = 0; 
    next(); 
    function next() { 
        if( callback.call( array[i], i, array[i] ) !== false ) 
            if( ++i < array.length ) 
                setTimeout( next, interval ); 
    } 
}; 
jQuery.fn.slowEach = function( interval, callback ) { 
    jQuery.slowEach( this, interval, callback ); 
};