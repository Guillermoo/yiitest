<?php

class MyFilter extends CFilter


public $param1=null;

function preFilter($filterChain)
{
	
	$filterChain->run(); //It can follow other filter
	return true;	//false to don't allow execute the code
}

function postFilter($filterChain)
{
	//return true;
}
?>
