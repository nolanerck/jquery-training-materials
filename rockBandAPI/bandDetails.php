<?
	include_once "incRockBands.php";

	$bandID = $_GET[ "bandID" ];

	switch( $bandID )
	{
		case 1: $bandMembers = array( "Alan Wilder", "Martin Gore", "Dave Gahan", "Andy Fletcher" );
		        break;

		case 2: $bandMembers = array( "Billie Joe Armstrong", "Tre Cool", "Mike Dirnt", "Jason White" );
			    break;

		case 3: $bandMembers = array( "Paul McCartney", "George Harrison", "Ringo Starr", "John Lennon" );
				break;

		case 4: $bandMembers = array( "Kevin Seconds", "Steve Youth", "Troy Mowat", "Bobby Adams" );
				break;

		case 5: $bandMembers = array( "Les Claypool", "Larry Lalonde", "Tim Alexander" );
			    break;

		case 6: $bandMembers = array( "Robin Wilson", "Jesse Valenzuella", "Scott Thompson", "Bill Lean" );
				break;

		case 7: $bandMembers = array( "Roger Daultry", "Pete Townsend", "Keith Moon", "John Entwhistle" );
				break;

		case 8: $bandMembers = array( "Vince Clarke", "Andy Bell" );
			    break;

		case 9: $bandMembers = array( "Vince Clarke", "Allison Moyet" );
				break;

		default: echo( "Error processing bandID." );
		         exit;
	}

	echo json_encode( $bandMembers );

?>