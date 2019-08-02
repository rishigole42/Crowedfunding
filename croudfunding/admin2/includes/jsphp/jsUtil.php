<?php

//varPrint("hello");
    function setAlert($heading,$msg,$time,$msgtype='SUCCESS')
    {
        $_SESSION['ALERT']['msg'] = $msg;
        $_SESSION['ALERT']['time'] = $time;
        $_SESSION['ALERT']['heading'] = $heading;
		
		switch(strtoupper($msgtype))
		{
			case "SUCCESS":
			
				$_SESSION['ALERT']['msgtype'] = "success";
			break;
			case "WARNING":
			
				$_SESSION['ALERT']['msgtype'] = "warning";
			break;
			
			case "ERROR":
			
				$_SESSION['ALERT']['msgtype'] = "error";
			break;
			case "INFO":
			
				$_SESSION['ALERT']['msgtype'] = "info";
			break;
		}

      //  varPrint($_SESSION['ALERT']);
    }

    function getAlert()
    {
		//varPrint($_SESSION['ALERT']);
        if(@$_SESSION['ALERT'])
        {

            $heading = $_SESSION['ALERT']['heading'];
            $msg = $_SESSION['ALERT']['msg'];
            $time = $_SESSION['ALERT']['time'];
            $msgtype = $_SESSION['ALERT']['msgtype'];
            echo <<<EOT
setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.$msgtype( '$msg','$heading');

            },$time);

EOT;
            unset($_SESSION['ALERT']);

        }
    }



	


?>