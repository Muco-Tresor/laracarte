<?php 

	if(!function_exists('page_title'))
	{
		function($title)
		{
			if($title == "")
			{
				return "Laracarte - List of all artisans";
			}
			else
			{
				return $title ." | "."Laracarte - List of all artisans";
			}
		}	
	}