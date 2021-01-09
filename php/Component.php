function button($btnid,$styleclass,$text,$name,$attr){
    $btn="
    <button name='$name'class='$styleclass' id='$btnid'>$text</button>
    ";
    echo $btn;
}