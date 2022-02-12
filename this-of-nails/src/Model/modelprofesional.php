class Profesional {
    public $ciudad;
    public $pueblo;
    public $profesion;
    public $especialidad;
    private $ edad;
    private $telefono;
    public $ email;
    $Profesional->iteraProfesional();
}

function __construct($ciudad, $pueblo, $profesion, $especialidad, $edad, $telefono, $email,){
    $this->ciudad= $ciudad;
    $this->profesión = $profesion;
    $this->especialidad = $especialidad;
    $this->edad = $edad;
    $this->telefono = $telefono;
    $this->email = $ email;
}

$profesionales = new Profesional('Alicante', 'Elche', 'medico estetiscista', '24 años');

echo "Iterar valores de objeto fuera de la clase <br>";
foreach ($profesionales $clave => $valor){
    print "$clave => $valor<br>";
}
echo "<br>";