<?php 


class Manager
{

    public function add(Commentaire $comm)
    {
        $nom = $comm->nom();
        $messag = $comm->message();


        $con = mysqli_connect('localhost','root','','blog') or die (mysqli_error());
        $req = "INSERT INTO commentaire (nom,messag) values ('$nom','$messag')";

        $res = mysqli_query($con,$req);




    }

    public function recup()
    {
        $con = mysqli_connect('localhost','root','','blog') or die (mysqli_error());
        $sql = "SELECT * FROM commentaire ORDER BY id DESC";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result))
             {
               echo  $row["nom"].' : '.$row['messag'].'</br>';


            }

            mysqli_close($con);





    }




}


}



?>