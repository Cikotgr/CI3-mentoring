<?php

class Date{
    function dateymd(){
		try {
			return date('Y-m-d');
		} catch (Exception) {
			return "";
		}
	}

	function datedmy(){
		try {
			return date('d M y');
		} catch (Exception) {
			return "";
		}
	}
}
