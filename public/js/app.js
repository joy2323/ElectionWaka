jQuery( function( $ ) {
  
  // Transition effect for navbar 
  $( window ).scroll( function() {
    if ( $( this).width() <= 768 ) return;
    if( $( this ).scrollTop() > 40 && ! window.noDynamicNav ) { 
        $( '.navbar' ).addClass( 'solid' );
        $( '.navbar-item a:not(.btn)' ).addClass( 'text-dark' ).removeClass( 'text-white' );
    } else {
        $( '.navbar' ).removeClass( 'solid' );
        $( '.navbar-item a:not(.btn)' ).removeClass( 'text-dark' ).addClass( 'text-white' );
    }
  } );

  // Smooth-scrolling effect for links
  $( 'a[href*="#"]:not([href="#"])' ).click( function() {
    if ( location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      || location.hostname == this.hostname ) {
      var target = $( this.hash );
      if ( target ) {
        $( 'html, body' ).animate( {
          scrollTop: target.offset().top
        }, 1000 );
        return false;
      }
    }
  } );
  
  // Share Dialog logic
  $( '#report-modal' ).on( 'show.bs.modal', function( ev ) {
    var button = $( ev.relatedTarget ),
      reportId = button.data( 'report-id' ),
      modal = $( this ),
      currentUrl = null;
    window.location.hash = '#report-item-' + reportId;
    currentUrl = encodeURIComponent( window.location.href );
    
    button.addClass( 'active-btn' );
    
    // Get Report HTML
    modal.find( '.modal-body' ).html( '<div class="container-fluid mx-auto text-center"><span class="lead fa-lg fas fa-spinner fa-spin"></span>' );
    $.get( '/get-report/' + reportId, function( reportHtml ) {
      modal.find( '.modal-body' ).html( reportHtml );
      modal.find( '.modal-body #share-links #share-link-facebook' ).get(0).href = 'https://www.facebook.com/sharer.php?u=' + currentUrl;
      modal.find( '.modal-body #share-links #share-link-twitter' ).get(0).href = 'https://twitter.com/intent/tweet?url=' + currentUrl + '&text=Check out this Report %23' + reportId + ' on Polivoice.&via=PolivoiceNG';
      modal.find( '.modal-body #share-links #share-link-linkedin' ).get(0).href = 'https://www.linkedin.com/shareArticle?mini=true&url=' + currentUrl + '&title=View Report %23' + reportId + '&summary=Check out this Report %23' + reportId + ' on Polivoice.&source=PolivoiceNG';
      modal.find( '.modal-body #share-links #share-link-google-plus' ).get(0).href = 'https://plus.google.com/share?url=' + currentUrl + '&text=Check out this Report %23' + reportId + ' on Polivoice.';
      
      var openURL = function openURL( url ) {
        window.open( url, 'Share', 'width=550, height=400, toolbar=0, scrollbars=1 ,location=0 ,statusbar=0,menubar=0, resizable=0' );
      };
      
      $( '#share-links a' ).on( 'click', function( e ) {
        e.preventDefault();
        openURL( this.href );
      }  );
      
    } );
    
  } );
  $( '#report-modal' ).on( 'hidden.bs.modal', function( ev ) {
    window.location.hash = '';
    $( '.share-btn.active-btn' ).removeClass( 'active-btn' );
  } );
  
  // Multi-step form
  var currentFs, nextFs, previousFs, left, opacity, scale, isAnimating;
  
  $( '.next' ).click( function() {
	  if ( isAnimating ) {
	    return false;
	  }
	  currentFs = $( this ).parent();
	  nextFs = $( this ).parent().next();
	  var filledRequires = currentFs.find( '[required]' ).get(),
	    notFilled = 0,
	    choosedText = [ 'Choose State', 'Choose Category', 'Choose LGA' ];
	  filledRequires.forEach(  function( el ) {
      if ( ! el.value || choosedText.indexOf( el.value ) >= 0 ) {
        el.style.border = '2px solid red';
        notFilled += 1;
      } else {
        el.style.border = '2px solid green';
      }
	  } );
	  if ( notFilled > 0 ) {
      $( '.error-alert' ).show();
      $( 'html, body' ).animate( {
        scrollTop: $( '.error-alert' ).offset().top - 100
      }, 1000 );
      return false;
    } else {
      $( '.error-alert' ).hide();
    }
    isAnimating = true;
	  nextFs.show();
	  currentFs.animate( { opacity: 0 }, {
		  step: function( now ) {
			  scale = 1 - (1 - now) * 0.2;
			  left = (now * 50) + '%';
			  opacity = 1 - now;
			  currentFs.css( {
          'transform': 'scale(' + scale + ')',
          'position': 'absolute'
        } );
			  nextFs.css( {
			    'left': left,
			    'opacity': opacity
			  } );
		  },
		  duration: 800, 
		  complete: function() {
			  currentFs.hide();
			  isAnimating = false;
		  },
		  easing: 'easeInOutBack'
	  } );
  } );

  $( '.previous' ).click( function() {
	  if ( isAnimating ) {
	    return false;
	  }
	  isAnimating = true;
	  currentFs = $( this ).parent();
	  previousFs = $( this ).parent().prev();
	  previousFs.show();
	  currentFs.animate( { opacity: 0 }, {
		  step: function( now ) {
			  scale = 0.8 + ( 1 - now ) * 0.2;
			  left = ( (1 - now ) * 50 ) + '%';
			  opacity = 1 - now;
			  currentFs.css( {
			    'left': left
			  } );
			  previousFs.css( {
			    'transform': 'scale(' + scale + ')',
			    'opacity': opacity
			  } );
		  },
		  duration: 800,
		  complete: function() {
			  currentFs.hide();
			  isAnimating = false;
		  },
		  easing: 'easeInOutBack'
	  } );
  } );
  
  // Form submit validation (Default Object is added because if the current page is not Make a Report to suppress errors)
  ( $( '#msform' ).get(0) || {} ).onsubmit = function( e ) {
    e.preventDefault();
    var notFilled = 0,
      self = e.target,
      requiredFields = $( self ).find( '[required]' ).get(),
      images = $( self ).find( '#images' ).get(0),
      choosedText = [ 'Choose State', 'Choose Category', 'Choose LGA' ],
      imageTypes = [ 'jpeg', 'gif', 'jpg', 'png' ];
    requiredFields.forEach( function( required ) {
      if ( ! required.value || choosedText.indexOf( required.value ) >= 0 ) {
        required.style.border = '2px solid red';
        notFilled += 1;
      } else {
        required.style.border = '2px solid green';
      }
    } );
    
    if ( notFilled > 0 ) {
      $( '.error-alert' ).show();
      $( 'html, body' ).animate( {
        scrollTop: $( '.error-alert' ).offset().top - 100
      }, 1000 );
      return false;
    } else {
      $( '.error-alert' ).hide();
    }
    
    if ( images.files.length > 0 ) {
      notFilled = 0;
      
      // Check if selected image(s) is more than 3
      if ( images.files.length > 3 ) {
        return alert( 'Sorry, you can only upload 3 images!' );
      }
      
      // Check each image(s) MIME type (file extension can be changed so it is much safer to use MIME type)
      [].slice.call( images.files ).forEach( function( image ) {
        var imageType = image.type.split('/').pop().toLowerCase();
        if ( imageTypes.indexOf( imageType ) < 0 ) {
          notFilled += 1;
        }
      } );
      if ( notFilled > 0 ) {
        notFilled = 0;
        return alert( 'Sorry, you can only upload ' + imageTypes.join( ', ' ) + ' images!' );
      }
      
      // Check each image file size (< 2MB)
      [].slice.call( images.files ).forEach( function( image ) {
        var imgSizeMB = image.size / 1024 / 1024;
        if ( imgSizeMB > 2 ) {
          notFilled += 1;
        }
      } );
      if ( notFilled > 0 ) {
        notFilled = 0;
        return alert( 'Sorry, you cannot upload image that it file size is more than 2MB!' );
      }
      
    }
    self.submit();
  };
  
  // Dynamic category field (Default Object is added because if the current page is not Make a Report to suppress errors)
  ( $( '#msform #category' ).get(0) || {} ).onchange = function( e ) {
    var self = e.target;
    if ( self.value == 'Other' ) {
      self.insertAdjacentHTML( 'afterend', '<input type="text" id="other_category" name="other_category" placeholder="Please specify the category (required)" required />' );
    } else {
      $( '#msform #other_category' ).remove();
    }
  };
  
} );

// Higlight report item on page load with Hash
( function( $ ) {
  var scrollSpeed = 1000,
    highlightColor = '#F8F99A',
    hashValue = window.location.hash;

  if ( hashValue ) {
    setTimeout( function() {
      window.scrollTo( 0, 0 );
    }, 1 );

    $( document ).ready( function() {
      var css = '.highlight-target:target .report-item-inner { animation: highlight 2s; -moz-animation: highlight 2s; -webkit-animation: highlight 2s; } ' +
        '@keyframes highlight { 50% { box-shadow: 0 0 30px #ccc; transform: scale(1.1); } } '+
        '@-moz-keyframes highlight { 50% { box-shadow: 0 0 30px #ccc; transform: scale(1.1); } } '+
        '@-webkit-keyframes highlight { 50% { box-shadow: 0 0 30px #ccc; transform: scale(1.1); } }';
      $( '<style type="text/css"> ' + css + ' </style>' ).appendTo( 'head' );
    } );
  }

  $( window ).on( 'load', function() {
    if ( $( hashValue ).length > 0 ) {
      var elementObj = $( hashValue );
      window.scroll( 0, 0 );
      $( 'html, body' ).animate( {
        scrollTop: elementObj.offset().top - 100
      }, scrollSpeed, function() {
        elementObj.addClass( 'highlight-target' );
      } );
    }
  } );
  
} )( jQuery );
