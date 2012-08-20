/**
 * @package Scratch
 * @author Ian Dunn <ian@iandunn.name>
 */


/**
 * Wrapper function to safely use $
 * @author Ian Dunn <ian@iandunn.name>
 */
function scratch_wrapper( $ )
{
	var scratch = 
	{
		/**
		 * Main entry point
		 * @author Ian Dunn <ian@iandunn.name>
		 */
		init : function()
		{
			scratch.templateURL = $( '#templateURL' ).val(); 
			scratch.ajaxPostURL = $( '#ajaxPostURL' ).val();
			
			// register event handlers
		}
	}; // end scratch
	
	$( document ).ready( scratch.init );
	
} // end scratch_wrapper()

scratch_wrapper( jQuery );