<?php
if ($_GET['q']='a')
{
	include "acceuil.php";
}



switch ($_GET['q']) {
    case "cl":
        include "library.php";
        break;
    case "g":
        include "gallery.php";
        break;
    case "b":
        include "blog.php";	
        break;
	case "au":
       include "about.php";
        break;
	case "cu":
        include "contact.php";
        break;
	default :
		include "acceuilphp";
		break;
		
	}

?>