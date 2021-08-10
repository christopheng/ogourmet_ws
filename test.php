<!DOCTYPE html>

<html>
	<script language="javascript">
         document.write("C'est du Javascript.");
    </script><br />
       	<?php
        echo "Et là, du PHP!";
      

		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=ogourmetdata;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
        	die('Erreur : ' . $e->getMessage());
		}

		$reponse = $bdd->query('SELECT * FROM Contact');

		while ($donnees = $reponse->fetch())
		{
			echo $donnees["pass"],$donnees["nom"];
		}

		?>
</html>