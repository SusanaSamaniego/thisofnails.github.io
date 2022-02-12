<?php

class Usuario
{
    public $nombre_usuario;

    public function __construct(string $nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;
    }
}

$usuarios = [
    new Usuario('usuario 1'),
    new Usuario('usuario 2'),
    new Usuario('usuario 3'),
];

print_r(array_column($usuarios, 'nombre_usuario'));
?>