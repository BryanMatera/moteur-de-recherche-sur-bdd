<?php

	try
           {
           $bdd = new PDO('mysql:host=localhost;dbname=table;charset=utf8', 'root', '');
           $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           }
            catch(Exception $e)
                {
                   die('Erreur : '.$e->getMessage());
                }


if(isset($_POST['search'])&& !empty($_POST['search']))
{
	$search = (htmlentities($_POST['search']));

	$req=$bdd->prepare('SELECT * 
								FROM table1
								 	WHERE first_name
								 		LIKE :valeur"%"
								 			LIMIT 0,20');


							$req->execute(array('valeur'=>$search)); 


		while($donnee=$req->fetch())
		{
			echo "<li><a href='#'>".$donnee['first_name']. '&nbsp;'.$donnee['last_name']."</a></li>";
		}
								 			
}
?>