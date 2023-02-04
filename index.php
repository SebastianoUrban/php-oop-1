<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OPP 1</title>
    </head>
    <body>
        <main>
            <?php 
                class Movie {
                    public $nome;
                    public $genere;

                    function __construct($_nome) {
                        $this->nome = $_nome;
                    }

                    public function getAbstract() {
                        $output = 'Il film '.$this->nome.' appartiene al genere '.$this->genere;
                        return $output;
                    }
                }
            ?>
            <p>
                <?php 
                    $avatar = new Movie('Avatar');
                $avatar->genere = 'Avventura';
                echo $avatar->getAbstract();
                ?>
            </p>
            <p>
                <?php 
                    $irnoman = new Movie('Iron Man');
                    $irnoman->genere = 'Azione';
                    echo $irnoman->getAbstract();
                ?>
            </p>
        </main>
    </body>
</html>