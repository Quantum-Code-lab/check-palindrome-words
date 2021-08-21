<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome String Checker</title>
    <link rel="stylesheet" href="Palindrome-Checke.css">

</head>

<body>
    <header>

    </header>
    <main>
        <form action="" method="post">
            <fieldset>
                <legend>Check You String</legend>
                <span>
                    <?php
                        if (isset($_POST["submit"])) 
                        {
                            $word=$_POST["palword"];
                            // for reverse that word and stored a var
                            $reverse=strrev($word);
                            if ($word===$reverse) 
                            {
                                echo"Great! It's a Palindrome";
                            }
                            else
                            {
                                echo"Sorry! $word That's not a Palindrome Word";
                            }
                        }
                    ?>
                </span>
                <textarea name="palword" id="" cols="30" rows="10" placeholder="Type Here"></textarea>
            </fieldset>
            <fieldset class="f2">
                <input type="submit" name="submit"></input>
            </fieldset>
        </form>
    </main>
</body>

</html>