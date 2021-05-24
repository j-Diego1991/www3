<? 

class Vuelo
{
    public $id;
    public $origen;
    public $destino;
    public $duracion;

    public function __construct(string $id, string $origen, string $destino, string $duracion)
    {
        $this->id = $id;
        $this->origen = $origen;
        $this->destino = $destino;
        $this->duracion = $duracion;
    }
}