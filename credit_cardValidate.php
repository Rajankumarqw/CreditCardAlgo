<?php



class credit_card 
{
	
	public function  validateCard ($card_number)
	{
		  
		   $card_number_checksum = '';

	    foreach (str_split(strrev((string) $card_number)) as $i => $d) {
	        $card_number_checksum .= $i %2 !== 0 ? $d * 2 : $d;
	    }

	     if(array_sum(str_split($card_number_checksum)) % 10 === 0){
	     	 
			return true;
	     }else{
		 
	     	return false;
	     }
	}
}?>