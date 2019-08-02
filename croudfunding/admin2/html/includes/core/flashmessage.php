<?php
class FlashMessage {
	
	function __construct(){
		
		
	}

    public function render() {
        if (!isset($_SESSION['messages']))
            return null;
			
        $messages = $_SESSION['messages'];
        unset($_SESSION['messages']);
        return implode('<br/>', $messages);
    }
	
	public function is_render() {
        if (!isset($_SESSION['messages']))
            return false;
        	return TRUE;
        
    }

    public function add($message) {
		
	//	varPrint("hello");
        if (!isset($_SESSION['messages'])) {
            $_SESSION['messages'] = array();
        }
        $_SESSION['messages'][] = $message;
    }

}

?>