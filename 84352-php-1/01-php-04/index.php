<?php

// Comentario de 1 linha\\

/*
o(a) estudante Dandara da Silva
n1 = 7
n2 = 9
n3 = 6
a média = (n1 + n2 + n3)/3
se a média de Danadara >= 7
    aprovada
se a média de Danadara >= 4
    conselho
snão
    reprovada
*/
$student = "Dandara da Silva";
$n1 = 7;
$n2 = 9;
$n3 = 6;
$average = ($n1 + $n2 + $n3)/3;
//echo "O(a) aluno(a) $student ficou com média igual a $saverage";
if($average >= 7) {
    echo "O(a) aluno(a) $student ficou com média igual a $average e foi aprovado";
}else if($average >= 4) {
    echo "O(a) aluno(a) $student ficou com média igual a $average e foi pro conselho";
}
else{
    echo "O(a) aluno(a) $student ficou com média igual a $average e foi reprovado(a)";
}

?>