$( document ).ready( function ()
{
	$( '.feedback-list' ).slick( {
		dots: true,
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 300,
		slidesToShow: 2,
		slidesToScroll: 2,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
		]
	} );
} );

$( '.navbarButton' ).click( () =>
{
	if ( $( '.navbarButton' ).attr( 'aria-expanded' ) == "false" )
		$( '.navbarButton span' ).addClass( 'expanding' );
	else
		$( '.navbarButton span' ).removeClass( 'expanding' );
} );
