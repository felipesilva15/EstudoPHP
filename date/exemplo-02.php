<?php

// Seta a localidade
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// Função de data utilizando a localidade setada
echo strftime("Dia %d de %B de %Y - %A");

?>