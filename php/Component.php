<?php

function inputElement($icon,$placeholder,$name,$value){
    $ele="
    <div class=\"py-2\">
        <div class=\"input-group mb-3\">
            <span class=\"input-group-text bg-info\">$icon</span>
            </div>
            <input type=\"text\" name="$name" value="$value" autocomplete=\"off\" placeholder="$placeholder" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
        </div>




";
echo $ele;
}
?>