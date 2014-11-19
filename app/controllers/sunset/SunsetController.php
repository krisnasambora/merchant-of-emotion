<?php 
	
class SunsetController extends BaseController{

		public function showTBSD01(){
			if ( !Cookie::get('page_viewed') ) {
		        // Update view counter of post
				DB::table('viewcounts')->where('page', 'tbsd-01')->increment('count', 1);

		        // Create a cookie before the response and set it for 30 days
		        Cookie::queue('page_viewed', true, 60 * 24 * 30);
		    }
		    
			return View::make('sunset.the-beginning-of-sunset-deity-01');
		}
}

