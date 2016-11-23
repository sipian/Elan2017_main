 
	var $main = $( '#pt-main' ),
		$pages = $main.children( 'div.pt-page' ),
		current = 0,
		isAnimating = false,
		endCurrPage = false,
		endNextPage = false,
		animEndEventNames = {
			'WebkitAnimation' : 'webkitAnimationEnd',
			'OAnimation' : 'oAnimationEnd',
			'msAnimation' : 'MSAnimationEnd',
			'animation' : 'animationend'
		},
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
		// support css animations
		support = Modernizr.cssanimations;
	
	function init() {
		$pages.each( function() {
			var $page = $( this );
			$page.data( 'originalClassList', $page.attr( 'class' ) );
		});
		$pages.eq( current ).addClass( 'pt-page-current' );
	}

	function nextPage(animation , currentPageNumber , nextPageNumber) {
		if( isAnimating ) {
			return false;
		}
		isAnimating = true;
		current = nextPageNumber;
		
		var $currPage = $pages.eq( currentPageNumber );
		var $nextPage = $pages.eq( nextPageNumber).addClass( 'pt-page-current' ), outClass = '', inClass = '';

		let jsonObj = getOrder(animation);
		outClass = jsonObj.outClass;
		inClass = jsonObj.inClass;

		$currPage.addClass( outClass ).on( animEndEventName, function() {
			$currPage.off( animEndEventName );
			endCurrPage = true;
			if( endNextPage )
				onEndAnimation( $currPage, $nextPage );
		});

		$nextPage.addClass( inClass ).on( animEndEventName, function() {
			$nextPage.off( animEndEventName );
			endNextPage = true;
			if( endCurrPage )
				onEndAnimation( $currPage, $nextPage );
		} );

		if( !support )
			onEndAnimation( $currPage, $nextPage );
	}

	function onEndAnimation( $outpage, $inpage ) {
		endCurrPage = false;
		endNextPage = false;
		resetPage( $outpage, $inpage );
		isAnimating = false;
	}

	function resetPage( $outpage, $inpage ) {
		$outpage.attr( 'class', $outpage.data( 'originalClassList' ) );
		$inpage.attr( 'class', $inpage.data( 'originalClassList' ) + ' pt-page-current' );
	}
	init();
 
 $( 'body' ).on("click",".biggies" , function(){
 		if(current != 0)
  			nextPage(36,current,0);		//rotateCubeTopOut
	});
 $( 'body' ).on("click",".culti" , function(){
		if(current != 1)
  			nextPage(60,current,1);		//pt-page-rotateFall
	});
 $( 'body' ).on("click",".infi" , function(){
		if(current != 2)
  			nextPage(66,current,2);		//pt-page-rotateSidesOut
	});
 $( 'body' ).on("click",".online" , function(){
		if(current != 3)
  			nextPage(28,current,3);		//pt-page-rotateRightSideFirst
	});
 $( 'body' ).on("click",".litr" , function(){
		if(current != 4)
  			nextPage(13,current,4);		//pt-page-moveToBottom
	});