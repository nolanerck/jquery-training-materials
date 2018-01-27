function setupPage()
{
	$( ".page-content" ).hide();
	$( "#home-page" ).show();

	$( "nav ul li" ).on( "click", showPageContent );
}

function showPageContent()
{
	$( ".page-content" ).hide();

	// this is getting the "data-mypage" value so we know which DIV to hide/show
	var selectedPageID = $(this).data( "mypage" );

	$( selectedPageID ).show();

	$( "nav ul li" ).removeClass( "selectedItem" );
	$(this).addClass( "selectedItem" );
}

$(document).ready( setupPage );
